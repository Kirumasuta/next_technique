<?php

class Controller_login extends Controller{

    public function action_index()
    {
        $this->view->generate('view_login.php','view_template.php');
    }

    public function action_complete()
    {
        $_POST['password'] = md5($_POST['password']);
        $data = $this->model->action_main('Model_login_complete');

        switch ($data){
            case 'ok':
                $this->view->generate("view_login_complete.php",'view_template.php');
                break;
            case 'err':
                $this->view->generate("view_login_incomplete.php",'view_template.php');
                break;
        }
    }
}