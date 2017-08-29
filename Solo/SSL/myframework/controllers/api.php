<?php

class api extends AppController {
    public function __construct($parent) {
        $this->parent = $parent;
    }

    public function index() {
        $this->getView("header", array("pagename"=>"api"));

        $data = $this->parent->getModel("apiModel")->googleYouTube("Journey");
        $dataBooks = $this->parent->getModel("apiModel")->googleBooks("Henry David Thoreau");

        $this->getView("api", $data);
        $this->getView("apiBooks", $dataBooks);
    }

    public function searchYouTubeAPI() {
        $this->getView("header", array("pagename"=>"api"));

        if(@$_REQUEST["query"] != "") {
            $data = $this->parent->getModel("apiModel")->googleYouTube(@$_REQUEST["query"]);
        } else {
            echo "search error";
        }

        $this->getView("api", $data);
        $this->getView("apiBooks");
    }

    public function redirectYouTube($videoId) {
        if($videoId != "") {
            header("Location: http://www.youtube.com/watch?v=".$videoId);
        } else {
            echo "error";
        }
    }

    public function searchBookAPI() {
        $this->getView("header", array("pagename"=>"api"));

        if(@$_REQUEST["queryBook"] != "") {
            $data = $this->parent->getModel("apiModel")->googleBooks(@$_REQUEST["queryBook"]);
        } else {
            echo "search error";
        }


        $this->getView("api");
        $this->getView("apiBooks", $data);
    }
}

?>