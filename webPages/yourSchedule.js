$(document).ready(function() {

    $.post("yourSchedGrab.php", function(result){
        $("#yourSched").html(result);
    });
});