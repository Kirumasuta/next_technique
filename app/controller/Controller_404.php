<?php

class Controller_404 extends Controller{
    public function action_index()
    {
        $this->view->generate('view_404.php','view_template.php');
    }
}