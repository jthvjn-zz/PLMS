<?php
$s="
<script>
$(\"form.slogin\").on(\"submit\", function () {
    if( $('Username').val() == \"\" ||  $('Password').val() == \"\") $(\"#serr\").html(\"**Fields Required!\");
    var that = $(this),
        url = that.attr(\"action\"),
        type = that.attr(\"method\"),
        data = {};
    that.find(\"[name]\").each(function (index, value) {
        that = $(this),
            name = that.attr(\"name\"),
            value = that.val();
        data[name] = value;

    });
        $.ajax({
        url : url,
        type : type,
        data : data,
        success : function (response) {
       
            if(response == 1) window.location.assign('../staff_dashboard.php');
            else if( response == 0)  window.location.assign('../student_dashboard.php');
            else if( response == -1)  $(\"#serr\").html(\"**Invalid credentials!\");
            else if( response == 2)$(\"#serr\").html(\"**Fields Required!\");
            }
    });

    return false; });
</script>

";
echo $s;
?>