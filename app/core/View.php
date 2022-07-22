<?php

class View{

    public function generate($content_view, $template_view){
        include 'app/view/'.$template_view;
    }

}