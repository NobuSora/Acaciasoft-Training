$(document).ready(function () {

    //Button Animations
    $("#calcu :input[type='button']").each(function(){
        var button = $(this); 

        //Hover Animation--
        button.hover(function () {
            $(this).animate({
                backgroundColor: "#b4b4b4",
                color: "black"
            },50);
        }, function () {
            $(this).animate({
                backgroundColor: "rgba(90, 90, 90, 0.527)",
                color: "white"
            },50);
        });
        //Click Animation
        button.click(function(){
            
            $(this).animate({
                boxShadow: "0px 0px 0px 0px rgb(0, 0, 0)",
                backgroundColor: "#24242486",
                height: "75px",
                width: "90px"
            },50);
            $(this).animate({
                boxShadow: "0px 0px 5px 2px rgb(0, 0, 0)",
                backgroundColor: "#b4b4b4",
                height: "80px",
                width: "100px"
            },50);
            

        });
       });

});