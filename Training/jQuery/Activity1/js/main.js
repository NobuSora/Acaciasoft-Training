$(document).ready(function()
{
    //Operations---------------------------------------------------------
    ////Increase Value
    var ResultVal;
    $("#inInc").click(function()
    {
        //Animation
        $(this).animate({
            boxShadow: "0px 0px 0px 0px rgb(0, 0, 0)",
            backgroundColor: "green",
            height: "45px",
            width: "45px"
        },50);
        $(this).animate({
            boxShadow: "0px 0px 5px 2px rgb(0, 0, 0)",
            backgroundColor: "white",
            height: "50px",
            width: "50px"
        },50);
        //Process
        var CurVal = parseInt($("#valOut").text(), 10); //Parsing
        ResultVal = CurVal + 1;
        $("#valOut").text(ResultVal);
    });

    ////Decrease Value
    $("#inDec").click(function()
    {

        var CurVal = parseInt($("#valOut").text(), 10); //Parsing
        if(CurVal=== 0){
            
            //Process
            ResultVal = CurVal;
            alert("Nope...We don't do that here.");
        }else
        {
            //Animation
            $(this).animate({
                boxShadow: "0px 0px 0px 0px rgb(0, 0, 0)",
                backgroundColor: "red",
                height: "45px",
                width: "45px"
            },50);
            $(this).animate({
                boxShadow: "0px 0px 5px 2px rgb(0, 0, 0)",
                backgroundColor: "white",
                height: "50px",
                width: "50px"
            },50);
            ResultVal = CurVal - 1;
            $("#valOut").text(ResultVal);
        }
        
    });
    //Operations-End-----------------------------------------------------
});