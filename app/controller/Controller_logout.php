<?php

class Controller_logout extends Controller{

    public function action_index()
    {
        session_start();
        unset($_SESSION['name']);
        session_destroy();

        $this->view->generate('view_logout.php','view_template.php');
    }

}
