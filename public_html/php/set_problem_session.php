<?php
session_start();
include_once 'connect.php';
$_SESSION['problem_id'] = $_GET['value'];
$problem_id = $_GET['value'];
$sql = "select P_Name from PROBLEMS where Problem_Id ='$problem_id';";
$res = $conn->query($sql);
$r= $res->fetch_assoc();
$_SESSION['p_name'] = $r['P_Name'];
?>


