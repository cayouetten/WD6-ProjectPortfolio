<?php

class register extends appController {
    public function __construct($parent)
    {
        $this->parent = $parent;
    }

    public function index() {
        $this->getView("header", array("pagename" => "register"));

        //captcha
        $random = substr( md5(rand()), 0, 7);

        $this->getView("register", array("cap"=>$random));
    }

    public function addUser() {
        //captcha
        if(@$_REQUEST["captcha"] == $_SESSION["captchaImg"]) {
            if(filter_var(@$_REQUEST["email"],FILTER_VALIDATE_EMAIL)) {
                if(preg_match("/^[0-9a-zA-Z]+$/", @$_REQUEST["password"])) {
                    $this->parent->getModel("users")->add("insert into users (email, password) values (:email, :password)", array(":email"=>@$_REQUEST["email"], ":password"=>@$_REQUEST["password"]));
                    echo "welcome";
                } else {
                    echo "passwordErr";
                }
            } else {
                echo "emailErr";
            }
        } else {
            echo "captchaErr";
        }
    }

    public function deleteUser($email) {
        $data = $this->parent->getModel("users")->select("select * from users where email = (:email)", array(":email"=>$email));

        foreach($data as $d) {
            $mssg="User ".$d["email"]." successfully removed.";
            $this->parent->getModel("users")->delete("delete from users where (id) = (:id)", array(":id"=>$d["id"]));
        }
        header("Location:/register?msg=".$mssg);
    }

    public function showEditUserForm($email) {
        $data = $this->parent->getModel("users")->select("select * from users where email = (:email)", array(":email"=>$email));

        $this->getView("header", array("pagename" => "about"));
        $this->getView("editUserForm", $data);
    }

    public function updateUser($id) {
        $this->parent->getModel("users")->update("update users set email = (:email), password = (:password) where id = (:id)", array(":id"=>$id, ":email"=>$_REQUEST["email"], ":password"=>$_REQUEST["password"]));

        header("Location:/register?msg=updateComplete");
    }
}

?>