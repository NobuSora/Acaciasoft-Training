$(document).ready(function()
{
    //Animations
    $("#inInc").hover(
		//Hover In
        function () {
           $(this).css({"background-color":"green"});
        }, 
        //Hover Out
        function () {
           $(this).css({"background-color":"white"});
        }
    )
    $("#inDec").hover(
		//Hover In
        function () {
           $(this).css({"background-color":"red"});
        }, 
        //Hover Out
        function () {
           $(this).css({"background-color":"white"});
        }
    )
    //Operations---------------------------------------------------------
    ////Increase Value
    $("#inInc").click(function()
    {
        var CurVal = $("#valOut").text();
        ResultVal = parseInt(CurVal, 10) + 1; //Parsing and Computation
        $("#valOut").text(ResultVal);
        $(this).css({"background-color":"green"});
    });
    ////Decrease Value
    $("#inDec").click(function()
    {
        var state = true;
        var CurVal = $("#valOut").text();
        ResultVal = parseInt(CurVal, 10) - 1; //Parsing and Computation
        $("#valOut").text(ResultVal);
        $(this).css({"background-color":"red"});
    });
    //Operations-End-----------------------------------------------------
});