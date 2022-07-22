<?php

class Controller_registration extends Controller{
    public function action_index()
    {
        $this->view->generate('view_registration.php','view_template.php');
    }

    public function action_complete()
    {
        $_POST['password'] = md5($_POST['password']);
        $_POST['repeat'] = md5($_POST['repeat']);
        if ($_POST['repeat'] !== $_POST['password']){
            $data = 'err_query';
        }else {
            $data = $this->model->action_main('Model_registration_complete');
        }

        switch ($data){
            case 'ok':
                $this->view->generate("view_registration_complete.php",'view_template.php');
                break;
            case 'err_exist':
                $this->view->generate("view_registration_incomplete.php",'view_template.php');
                break;
            case 'err_query':
                $this->view->generate("view_registration_incomplete_err.php",'view_template.php');
                break;
        }
    }
}