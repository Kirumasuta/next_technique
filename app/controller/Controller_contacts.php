<?php

class Controller_contacts extends Controller{

    public function action_index()
    {
        $this->view->generate('view_contacts.php','view_template.php');
    }
}