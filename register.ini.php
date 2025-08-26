<?php 
 if(isset($_POST['submit'])) {
    $name=$_POST['Name'];
    $phone=$_POST['Phone'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
    $c_password=$_POST['C_password'];

    require_once 'connection.php';
    require_once 'function.php';

    $emptyInput= emptyInputSignup($name,$phone,$email,$password);
    $invalidEmail= invalidEmail($email);
    $pwdMatch= pwdMatch($password,$c_password);
    $emailExists= emailExists($con,$email);

    if($emptyIput!==false) {
        header("Location:../registration.php?error=empty iput");
        exit();
    }
        if($invalidEmail!==false) {
        header("Location:../registration.php?error=invalid email");
        exit();
    }
        if($pwdMatch!==false) {
        header("Location:../registration.php?error=pwd dont match");
        exit();
    }
        if($emailExists!==false) {
        header("Location:../registration.php?error=email exists");
        exit();
    }
      createUser($con,$name,$phone,$email,$password);

 }
?>