<?php
session_start();
include_once 'connect.php';
$reg = $_SESSION['regno'];
if($_GET['value'] == 'active') {
    $sql = "select Lc_Name from LAB_COURSE_SET where Lc_Id in 
(select Lc_Id from LAB_COURSE_WORK where Cw_Id in 
(select Cw_Id from LAB_GDPTS where Reg_no='$reg') and Status=1);";
    $res = $conn->query($sql);

    while ($labName = $res->fetch_array()) {
       $data= "<div class=\"well well-lg\">".
        "<div>".
             "<label>".$labName['Lc_Name']."</label>";
        $lab = $labName['Lc_Name'];

        $s = "select Cw_Id from LAB_GDPTS where Cw_Id in
              (select Cw_Id from LAB_COURSE_WORK where Lc_Id in 
              (select Lc_Id from LAB_COURSE_SET where Lc_Name = '$lab') 
              and Status = 1) and Reg_No = '$reg';";
        $v = $conn->query($s);
        $w = $v->fetch_array();
        $id = $w['Cw_Id'];
       // print_r($w);
        $data.='<a href="../6_course_home_student.php" class="btn btn-success pull-right" id="'.$id.'">ENTER</a>'.
            "</div>".
        "</div>";
        echo $data;
    }

}
else if($_GET['value'] == 'archived') {

    $sql = "select Lc_Name from LAB_COURSE_SET where Lc_Id in 
(select Lc_Id from LAB_COURSE_WORK where Cw_Id in 
(select Cw_Id from LAB_GDPTS where Reg_no='$reg') and Status=0);";
    $res = $conn->query($sql);

    while ($labName = $res->fetch_array()) {
        $data = "<div class=\"well well-lg\">" .
            "<div>" .
            "<label>" . $labName['Lc_Name'] . "</label>";
        $lab = $labName['Lc_Name'];

        $s = "select Cw_Id from LAB_GDPTS where Cw_Id in
              (select Cw_Id from LAB_COURSE_WORK where Lc_Id in 
              (select Lc_Id from LAB_COURSE_SET where Lc_Name = '$lab') 
              and Status = 0) and Reg_No = '$reg';";
        $v = $conn->query($s);
        $w = $v->fetch_array();
        $id = $w['Cw_Id'];
        $data .= '<a href="../6_course_home_student.php" class="btn btn-success pull-right" id="'.$id.'">VIEW</a>'.
            "</div>".
            "</div>";
        echo $data;

    }
}
echo "
<script>
    $(document).ready(function () {
        $(\".btn.btn-success \").click(function () {
           var d = $(this).attr(\"id\");

            $.ajax({
               url : \"php/set_student_session.php\",
                data : {value:d},
                success : function (response) {
                    console.log(response);

                }
            });
        });
        
    });
</script>
";

?>
