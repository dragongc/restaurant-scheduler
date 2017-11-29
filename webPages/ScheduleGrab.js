$(document).ready(function() {

    $.post("homeSchedule.php", {day: "MONDAY", shift: "LUNCH"}, function(result){
        $("#monLunch").html(result);
    });

    $.post("homeSchedule.php", {day: "TUESDAY", shift: "LUNCH"}, function(result){
        $("#tuesLunch").html(result);
    });

    $.post("homeSchedule.php", {day: "WEDNESDAY", shift: "LUNCH"}, function(result){
        $("#wedLunch").html(result);
    });

    $.post("homeSchedule.php", {day: "THURSDAY", shift: "LUNCH"}, function(result){
        $("#thursLunch").html(result);
    });

    $.post("homeSchedule.php", {day: "FRIDAY", shift: "LUNCH"}, function(result){
        $("#friLunch").html(result);
    });

    $.post("homeSchedule.php", {day: "SUNDAY", shift: "BRUNCH"}, function(result){
        $("#sunBrunch").html(result);
    });

    $.post("homeSchedule.php", {day: "MONDAY", shift: "DINNER"}, function(result){
        $("#monDin").html(result);
    });

    $.post("homeSchedule.php", {day: "TUESDAY", shift: "DINNER"}, function(result){
        $("#tuesDin").html(result);
    });

    $.post("homeSchedule.php", {day: "WEDNESDAY", shift: "DINNER"}, function(result){
        $("#wedDin").html(result);
    });

    $.post("homeSchedule.php", {day: "THURSDAY", shift: "DINNER"}, function(result){
        $("#thursDin").html(result);
    });

    $.post("homeSchedule.php", {day: "FRIDAY", shift: "DINNER"}, function(result){
        $("#friDin").html(result);
    });

    $.post("homeSchedule.php", {day: "SATURDAY", shift: "DINNER"}, function(result){
        $("#satDin").html(result);
    });

});