<?php
session_start();
include_once "connect.php";
$passcode = $conn->real_escape_string($_POST['Passcode']);

if($passcode == "")
    echo "2";
else {

 if($_POST['radio']=="staff") {
    $sql = " SELECT * FROM STAFFPASSCODE
        WHERE passc = '$passcode';
        ";
    $res = $conn->query($sql) or die($conn->error);
    if ($res->num_rows > 0)
        echo "0";
 else
   echo "-1";

    }
  else {

    $sql = " SELECT * FROM STUDENTPASSCODE
        WHERE passc = '$passcode';
        ";
    $res = $conn->query($sql) or die($conn->error);
    if ($res->num_rows > 0)
        echo "1";
  else
   echo "-1";
}
 }

?>
