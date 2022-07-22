<?php

class Model_registration_complete extends Model{

    public $status;

    public function __construct(){

        $name = $_POST['name'];
        $pass = $_POST['password'];

        $sql = "select 'Y' as check from users where name='$name' limit 1";
        $result = pg_query($sql) or die('Request error: '.pg_last_error());
        $result = pg_fetch_array($result);
        if ($result['check'] !== 'Y') {
            $sql = "insert into users(name,h_pass) values ('$name','$pass')";
            if (pg_query($sql) or die('Request error: '.pg_last_error())){
                session_start();
                $_SESSION['name'] = $name;
                $this->status='ok';
            }
        }elseif($result['check'] == 'Y'){
            $this->status='err_exist';
        }else{
            $this->status='err_query';
        }

    }

    public function __toString()
    {
        return $this->status;
    }

}