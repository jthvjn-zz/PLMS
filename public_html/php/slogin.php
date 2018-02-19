<?php
session_start();
include_once "connect.php";
$user = $conn->real_escape_string($_POST['Username']);
$pass = $conn->real_escape_string(md5($_POST['Password']));

if($user == "" || $pass == "")
    echo "2";
else {

    $sql = " SELECT * FROM USERS 
        WHERE U_Name = '$user' AND Pass = '$pass';
        ";
    $res = $conn->query($sql) or die($conn->error);
    if ($res->num_rows > 0) {
        $rows = $res->fetch_assoc();
        $_SESSION['user']=$_POST['Username'];
        $sql = " SELECT Reg_No FROM STUDENT WHERE U_Name = '$user';";
        $reg = $conn->query($sql) or die($conn->error);
        $regno = $reg->fetch_assoc();
        $_SESSION['regno'] = $regno['Reg_No'];

        if($rows["Role"] == 1) echo "1";
        else if($rows["Role"] == 0) echo "0";

    }

    else
        echo "-1";
}


?>