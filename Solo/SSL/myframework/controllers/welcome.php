<?php

class Welcome extends AppController{
    public function __construct(){

    }

    public function index() {
        $this->getView("header",array("pagename"=>"home"));

        $this->getView("welcome");
    }
}

?>