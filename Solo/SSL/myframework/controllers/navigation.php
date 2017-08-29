<?php

class navigation extends AppController
{
    public function __construct() { }

    public function index(){
        $this->getView("header", array("pagename" => "navigation"));

        $labels = array("pageone"=>"pageone", "pagetwo"=>"pagetwo", "pagethree"=>"pagethree");

        $this->getView("navigation", $labels);
    }

    public function pageone(){
        $this->getView("header", array("pagename" => "navigation"));

        $this->getView("pageone");
    }

    public function pagetwo(){
        $this->getView("header", array("pagename" => "navigation"));

        $this->getView("pagetwo");
    }

    public function pagethree(){
        $this->getView("header", array("pagename" => "navigation"));

        $this->getView("pagethree");
    }
}
?>