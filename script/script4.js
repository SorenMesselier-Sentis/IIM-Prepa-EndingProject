//lightBox Galerie
$(function (){
    $(".normal").click(function(){
    var LowImg = $(this).attr('src');
    $(".fullscreen").html("<img src='" + LowImg + "'>");
    $(".fullscreen").fadeIn("slow").css("display", "flex");
    });
    $(".fullscreen").click(function (){
    $(".fullscreen").fadeOut("fast");
    })
})
