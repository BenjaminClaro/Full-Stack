$(document).ready(function()
{

    $.ajax({
        url: "../php/header.php",
        type: "GET",
        success: function(data){
            $("#header").html(data);
        }
    });

    $.ajax({
        url: "../php/footer.php",
        type: "GET",
        success: function(data){
            $("#footer").html(data);
        }
    });


});