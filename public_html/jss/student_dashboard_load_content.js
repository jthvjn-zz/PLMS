/**
 * Created by architect on 22/4/16.
 */
$(document).ready(function () {
    $('#content').load('php/student_dashboard_active_courses.php');
    $('ul.nav li a').click(function () {
    var page = $(this).attr('href');
        $("#content").load(page);
        return false;

    });
});