<?php
session_start();
include_once 'connect.php';
$pid = $_SESSION['problem_id'];
$cw_id = $_SESSION['cw_id'];
$regno = $_SESSION['regno'];
$sql = "select Status from LAB_GDPTS where Reg_No = '$regno' and Cw_Id = '$cw_id';";
$res = $conn->query($sql);
$r = $res->fetch_assoc();
$statusString = str_split($r['Status']);
$sql = "select Problem_Id from PSET where Cw_Id ='$cw_id';";
$result = $conn->query($sql);
$index = 0;
$p = $result->fetch_array();
while(isset($p[$index]) && $p[$index] != $pid){$index++;}
$p_status = $statusString[$index];
$_SESSION['p_status'] = $p_status;

switch ($p_status){
    case 0:echo "<span>Not Tried</span>";break;
    case 1:echo "<span style='color:red'>Worng Algorithm</span>";break;
    case 2:echo "<span style='color:darkgreen'>Algorithm Accepted</span>";break;
    case 3:echo "<span style='color:red'>Worng Program</span>";break;
    case 4:echo "<span style='color:darkgreen'>Solution Accepted</span>";break;
}
?>