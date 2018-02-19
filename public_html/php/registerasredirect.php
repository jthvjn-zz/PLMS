<?php
$s="
<script>
$(\"form.registeras\").on(\"submit\", function () {
    if( $('Passcode').val() == \"\") $(\"#serr\").html(\"**Fields Required!\");
    var that = $(this),
        url = that.attr(\"action\"),
        type = that.attr(\"method\"),
        data = {};
          console.log(url);
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

            if(response == 1) window.location.assign('../student-registration.html');
            else if( response == 0)  window.location.assign('../staff-registration.html');
            else if( response == -1)  $(\"#serr\").html(\"**Passcode does not exist!\");
            else if( response == 2)$(\"#serr\").html(\"**Field Required!\");
            }
    });

    return false; });
</script>

";
echo $s;
?>
