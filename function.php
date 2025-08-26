<?php include 'connection.php';?>
<?php
function emptyInputSignup($name,$phone,$email,$password) {

if(empty($name)||empty($phone)||empty($email)||empty($password)) {
    $result=true;
}
    return $result;
} 

function invalidEmail($email) {
  

if(!preg_match("/^[a-zA-Zo-9@.]*$/",$email)) {
    $result=true;
}
    return $result;
} 

function pwdMatch($password,$c_password) {
  

if($password!==$c_password) {
    $result=true;
} else {
    $result=false;
}
    return $result;
} 

function emailExists($con,$email) {
  
$sql="SELECT * FROM user_r WHERE Email=?;";
$stmt=mysqli_stmt_init($con);

if(mysqli_stmt_prepare($stmt,$sql)) {
    header("location:../registration.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt,"s",$email);
mysqli_stmt_execute($stmt);
$resultData=mysqli_stmt_get_result($stmt);

if($row = mysqli_fetch_assoc($resultData)) {
    return $row;
} else {
    return false;
}
mysqli_stmt_close($stmt);
} 
function createUser($con,$name,$phone,$email,$password) {
    $sql = "INSERT INTO user_r (Name,Phone,Email,Password) VALUES (?,?,?,?)";
    $stmt=mysqli_stmt_init($con);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
header("Location :.. /registration.php?error=stmtfailed");
exit();
}
mysqli_stmt_bind_param($stmt, "ssss", $name, $phone, $email, $password);

    
    mysqli_stmt_execute($stmt);

    
    mysqli_stmt_close($stmt);
}

function emptyInputs($email, $password) {
   if(empty($email)||empty($password)) {
    $result=true;
}
    return $result;
} 

function loginUser($con,$email, $password) {
   $emailExists=emailExists($con,$email);

}
   $pwdExists=$emailExists["Password"];
   $checkPassword=password_verify($password,$pwdExists);

   if($checkPassword==false)  {
    header("location../signup?not verified");
    exit();
   }
   else if($checkPassword==true) {
        session_start();
        $_SESSION['name'] = $emailExists['Name'];
        $_SESSION['password'] = $emailExists['Password'];
        header('location../index.php');
        exit();
   }
?>