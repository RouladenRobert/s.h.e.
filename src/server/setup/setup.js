$(document).ready(function(){

    // Check input field SERVER_NAME and update span #SERVER_DNS
    setInterval(function(){
        if($("#server_name").val().length < 4 || $("#server_name").val().length > 20) {
            $("#server_name").addClass("false");
            $("#server_name").removeClass("true");
            $("#next1").css("display","none");
        } else {
            $("#server_name").addClass("true");
            $("#server_name").removeClass("false");
            $("#next1").css("display","block");
        }
        $("#server_dns").text($("#server_name").val());
    }, 100);

    // Slider
    var i = 0;
    $(".next").click(function(){
        if(i < 3) {
            $(".setup_slider").animate({"marginLeft":"-=100%"}, 400);
            i++;
        } else {
            $(".setup_slider").animate({"marginLeft":"0"}, 400);
            i = 0;
        }
        $(".setup_step").text(i+1);
    });

    $(".prev").click(function(){
        if(i != 0) {
            $(".setup_slider").animate({"marginLeft":"+=100%"}, 400);
            i--;
        } else {
            $(".setup_slider").animate({"marginLeft":"-400%"}, 400);
            i = 3;
        }
        $(".setup_step").text(i+1);
    });
})
