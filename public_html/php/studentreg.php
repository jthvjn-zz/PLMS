<?php
$s="
<script>
$(\"form.ajax\").on(\"submit\", function () {
    if( $('regno').val() == \"\" ||  $('nme').val() == \"\" ||  $('dept').val() == \"\" ||  $('course').val() == \"\" ||  $('scheme').val() == \"\" ||  $('admn').val() == \"\" || $('sem').val() ==\"\" ||  $('user').val() == \"\" ||  $('pass').val() == \"\" ||  $('confirm').val() == \"\" ) $(\"#regerr\").html(\"**Fields Required!\");
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
            if(response == 1){ window.location.assign('../7_Active_courses.html');
            else if( response == 0)  $(\"#regerr\").html(\"**Invalid credentials!\");
            else if( response == 2)  $(\"#regerr\").html(\"**Fields Required!\");
            }
    });

    return false; });
</script>

";
echo $s;
?>
