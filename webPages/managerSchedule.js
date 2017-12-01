$(document).ready(function() {

    $.post("manSchedGrab.php", function(result){
        $("#manSched").html(result);
    });
});