<?php

class Model{

    static function connect(){
        $host = 'ec2-52-212-228-71.eu-west-1.compute.amazonaws.com';
        $port=5432;
        $user = 'fjoqfzeouhpkqc';
        $pass = '8f3400f8539ba03a46729b3fb8f09174e51ec5444c34ae0c04e7f32be67e744c';
        $db = 'd77hmbb2s6t3g';
        $connect = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass");

        if(!pg_ping($connect)){
            echo "Ошибка соединения с БД";
            exit;
        }
    }

    public function action_main($model_name){
        $model_file = $model_name.'.php';
        include 'app/model/'.$model_file;
        return new $model_name;
    }

}