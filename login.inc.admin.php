<?php 
if (isset($_POST["submit"])) {//submit btn click checker
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'database.inc.php';//use database.inc.php
    require_once 'function.inc.php';//use function.inc.php

    if (emptyInputsLogin($username, $pwd) !== false) {
        exit();
    }
    loginUser($conn, $username, $pwd);

}
else {
    header('Location:../homeadmin/login.php');
} 