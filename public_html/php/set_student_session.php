<?php
session_start();
include_once 'connect.php';
$_SESSION['cw_id'] = $_GET['value'];

$cwid = $_GET['value'];
$regno = $_SESSION['regno'];
$sql = "SELECT Yr_Admn, D_Id, C_Id, Scheme_Id FROM STUDENT WHERE Reg_No ='$regno';";
$res = $conn->query($sql);
$data = $res->fetch_assoc();
////////////////////////////
$yradmn = $data['Yr_Admn'];
$did = $data['D_Id'];
$cid = $data['C_Id'];
$scheme = $data['Scheme_Id'];
////////////////////////////
$sql = "SELECT C_Name, C_Type FROM COURSE WHERE C_Id = '$cid';";
$res = $conn->query($sql);
$data = $res->fetch_assoc();
////////////////////////////
$cname = $data['C_Name'];
$ctype = $data['C_Type'];
////////////////////////////
$sql = "select Lc_Name from LAB_COURSE_SET where Lc_Id = 
(select Lc_Id from LAB_COURSE_WORK where Cw_Id ='$cwid');";
$res = $conn->query($sql);
$data = $res->fetch_assoc();
/////////////////////////////
$lcname = $data['Lc_Name'];
/////////////////////////////
$sql = "select Status from LAB_COURSE_WORK WHERE Cw_Id='$cwid';";
$res = $conn->query($sql);
$data = $res->fetch_assoc();
$status = $data['Status'];
/////////////////////////////
$_SESSION['yr_admn'] = $yradmn ;
$_SESSION['d_id'] = $did ;
$_SESSION['c_id'] = $cid ;
$_SESSION['scheme_id'] = $scheme ;
$_SESSION['c_name'] = $cname ;
$_SESSION['c_type'] = $ctype ;
$_SESSION['lc_name'] = $lcname;
$_SESSION['status'] = $status;

//print_r($_SESSION);


?>


