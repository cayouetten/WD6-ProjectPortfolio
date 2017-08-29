<?php

class auth extends AppController {
    public function __construct($parent) {
        $this->parent = $parent;
    }

    public function login() {
        if($_REQUEST["username"] && $_REQUEST["password"]) {
//            //.txt read test
//            $loginCredentials = file("./assets/sources/loginTest.txt");
//            $usern = $_REQUEST["username"];
//            $descr = $_REQUEST["password"];
//
//            $loginSuccess = false;
//            foreach($loginCredentials as $cred) {
//                $userCred = explode("|", $cred);
//                if($userCred[0] == $usern && $userCred[1] == $descr) {
//                    $loginSuccess = true;
//                    $descr = $userCred[2];
//                    break;
//                }
//            }
//
//            if($loginSuccess) {
//                $_SESSION["loggedin"] = 1;
//
//                $this->getView("header", array("pagename" => "profile"));
//
//                //This is a protected view
//                $this->getView("profile", array("pagename" => "profile", "profileUsern" => $usern, "profileDescr" => $descr));
//            } else {
//                header("Location:/welcome?msg=Bad Login");
//            }

            $data = $this->parent->getModel("users")->select(
                "select * from users where email = :email and password = :password",
                  array(":email"=>$_REQUEST["username"], ":password"=>sha1($_REQUEST["password"])));
                                                                     //encrypt passw
            if($data) {
                $_SESSION["loggedin"]=1;
                $_SESSION["email"] = $_REQUEST["username"];
                header("Location:/welcome?msg=Welcome");
            } else {
                header("Location:/welcome?msg=Bad Login");
            }
        } else {
            header("Location:/welcome?msg=Bad Login");
        }
    }

    public function logout() {
        session_destroy();

        header("Location:/welcome");
    }
}

?>