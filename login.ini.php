<?php 
if(isset($_POST['submit'])) {
      $name=$_POST['Name'];
      $password=$_POST['Password'];

      require_once 'connection.php';

      if(emptyInputs($name,$password) !== false) {
       exit();
      }
      loginUser($con,$name,$password);

} else {
    header('Location:../login.php');
}
?>