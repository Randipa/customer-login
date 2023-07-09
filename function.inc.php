<?php 
$result;
//admin empty input signup check function
function emptyInputsSignup($name, $email, $username, $pwd, $pwdRepeat){
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
  
}
//check invalid admin user name function
function invalidUid($username){
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
   
    
}

//check admin invalid email address function
function invalidEmail($email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
 
}
//check to match admin use password and password repeart function
function pwdMatch($pwd, $pwdRepeat){
    if ($pwd !== $pwdRepeat){
        $result = true;
    }else{
        $result = false;
    }
    return $result;

}
//check admin user id is exists function
function uidExists($conn, $username, $email){
    $sql = "SELECT * FROM usersadmin WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../homeadmin/login.php?error=stmpfailed");
            exit();
        }
        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);
        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            return $row;
        }else{
            return false;
        }
        mysqli_stmt_close($stmt);
            
}
//create admin user function
function createUser($conn, $name, $email, $username, $pwd){
    $sql = "INSERT INTO usersadmin (usersName, usersEmail, usersUid, usersPwd) VALUES (?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location:../homeadmin/login.php?error=stmpfailed");
            exit();
        }
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location:../homeadmin/login.php?error=none");
    exit();
    
}

//-------------------------------------Login function--------------------------------------//
//check empty input in loging function
function emptyInputsLogin($username, $pwd){
    if(empty($username) || empty($pwd) ){
        $result = true;
    }else{
        $result = false;
    }
    return $result;
  
}
//check loging admin function
function loginUser($conn, $username, $pwd){
    $uidExists = uidExists($conn, $username, $username);
    if($uidExists == false){
        header("Location:../homeadmin/login.php?error=wronglogin");
        exit();
    }
    
    $pwdHashed = $uidExists["usersPwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd == false){
            header("Location:../homeadmin/login.php?error=wronglogin11");
            exit();
    }elseif($checkPwd == true){
        session_start();
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["username"] = $uidExists["usersname"];
        header("Location:../homeadmin/index.php");//pass homeadmin page
        exit();
    }
}

