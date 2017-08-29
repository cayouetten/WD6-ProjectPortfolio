<link href="../../assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">

<?php

class about extends appController {
    public function __construct($parent)
    {
        $this->parent = $parent;
        $this->showList();
    }

    public function showList() {
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table");

        $this->getView("header", array("pagename" => "about"));
        $this->getView("about", $data);
    }

    public function showAddForm() {
        $this->getView("header", array("pagename" => "about"));
        $this->getView("addForm");
    }

    public function addAction() {
        $this->parent->getModel("fruits")->add("insert into fruit_table (name) values (:name)", array(":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }

    public function deleteAction($id) {
        $this->parent->getModel("fruits")->delete("delete from fruit_table where (id) = (:id)", array(":id"=>$id));

        header("Location:/about");
    }

    public function showEditForm($id) {
        $data = $this->parent->getModel("fruits")->select("select * from fruit_table where (id) = (:id)", array(":id"=>$id));

        $this->getView("header", array("pagename" => "about"));
        $this->getView("editForm", $data);
    }

    public function updateAction($id) {
        $this->parent->getModel("fruits")->update("update fruit_table set name = (:name) where id = (:id)", array(":id"=>$id, ":name"=>$_REQUEST["name"]));

        header("Location:/about");
    }
}

?>