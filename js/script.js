
$(document).ready(function(){

    $(".bildgalerie img").click(function(){

var src =$(this).attr("src");
$(".lightBox img").attr("src",src);
$(".lightBox .beschreibung").hide();
$(".lightBox").fadeIn(1000);



    });

    $(".lightBox .content #close").click(function(){

        $(".lightBox").fadeOut(1000);
    
    });

    $(".lightBox .content").hover(function(){
        $(".lightBox .beschreibung").fadeIn(1000);

    },function(){
        $(".lightBox .beschreibung").fadeOut(500);
    });





















});


