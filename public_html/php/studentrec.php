<?php
include_once 'connect.php';

$registration = $conn->real_escape_string($_POST['regno']);
$name = $conn->real_escape_string($_POST['nme']);
$department = $conn->real_escape_string($_POST['dept']);
$course = $conn->real_escape_string($_POST['course']);
$scheme = $conn->real_escape_string($_POST['scheme']);
$admn = $conn->real_escape_string($_POST['admn']);
$sem = $conn->real_escape_string($_POST['sem']);
$user = $conn->real_escape_string($_POST['user']);
$password = $conn->real_escape_string($_POST['pass']);
$confirm = $conn->real_escape_string($_POST['confirm']);

if($registration == "" || $name == "" || $department == "" || $course == "" || $scheme == "" || $admn == "" || $sem == "" || $user == "" || $pass=="" || $conf="")
    echo "0";
else {

  $did= "SELECT D_Id FROM DEPARTMENT WHERE D_Name='$department'";
  $cid= "SELECT C_Id FROM COURSE WHERE C_Name='$course'";
  $sid= "SELECT Scheme_Id FROM SCHEME WHERE Scheme_Name='$scheme'";

    $sql = " INSERT INTO STUDENT
         (Reg_No,U_Name,Pass,Name,Yr_Admn,Scheme,Sem,D_Id,C_Id,Scheme_Id)
         VALUES('$registration','$user','$password','$name','$admn','$scheme','$sem','$did','$cid','$sid')
        ";
    $res = $conn->query($sql) or die($conn->error);
    if ($res->num_rows > 0) {
      $path = "Files/".$department."/".$program."/".$scheme."/".$admn."/".$registration";
      if(!is_dir($path)){
      mkdir($path,0777,true);
        echo "1";
      }
    else
        echo "0";
}

?>
