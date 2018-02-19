<?php
$s="
<script>
$(\"form.ajax\").on(\"submit\", function () {
    if( $('adminU').val() == \"\" ||  $('adminP').val() == \"\") $(\"#adminerr\").html(\"**Fields Required!\");
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
            if(response == 1) window.location.assign('../Adminpage.html');
            else if( response == 0)  $(\"#adminerr\").html(\"**Invalid credentials!\");
            else if( response == 2)  $(\"#adminerr\").html(\"**Fields Required!\");
            }
    });

    return false; });
</script>

";
echo $s;
?>