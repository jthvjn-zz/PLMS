<?php
session_start();

include_once 'connect.php';
$reg = $_SESSION['regno'];

$sql = "select Lc_Name from LAB_COURSE_SET where Lc_Id in
(select Lc_Id from LAB_COURSE_WORK where Cw_Id in
(select Cw_Id from LAB_GDPTS where Reg_no='$reg') and Status=0);";
$res = $conn->query($sql);

while ($labName = $res->fetch_array()) {
    $lab = $labName['Lc_Name'];
$data = "<div class=\"well well-lg\">" .
"<div>" .
    "<label>" .$lab. "</label>";

    $s = "select Cw_Id from LAB_GDPTS where Cw_Id in
    (select Cw_Id from LAB_COURSE_WORK where Lc_Id in
    (select Lc_Id from LAB_COURSE_SET where Lc_Name = '$lab')
    and Status = 1) and Reg_No = '$reg';";
    $v = $conn->query($s);
    $w = $v->fetch_array();
    $id = $w['Cw_Id'];
    // print_r($w);
    $data .= "<a href=\"#\" class=\"btn btn-success pull-right\" id="."\"".$id."\"" .">ENTER</a>" .
        "</div>" .
        "</div>";
echo $data;

}

?>