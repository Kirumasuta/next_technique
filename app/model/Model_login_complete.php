<?php

class Model_login_complete extends Model{

    public $status;

    public function __construct(){
        $name = $_POST['name'];
        $pass = $_POST['password'];

        try {
            $sql = "select 'Y' as check from users where name='$name' and h_pass='$pass'";
            $result = pg_query($sql) or die('Request error: '.pg_last_error());
            $result = pg_fetch_array($result);
            if ($result['check'] == 'Y'){
                session_start();
                $_SESSION['name'] = $name;
                $this->status='ok';
            }else{
                $this->status='err';
            }
        }catch (Exception $e){
            $this->status='err';
        }
    }

    public function __toString()
    {
        return $this->status;
    }
}