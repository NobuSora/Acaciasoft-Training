$(document).ready(function () {
    //Assigning Result Box
    var result;
    var opeExceed = false;
    var inputEmpty = false;
    var pointNum = 0;
    var pointBool = false;

    function validate(){

        
        if ($("#result").val().includes('+')) 
        {
            opeExceed = true;
        }else if ($("#result").val().includes('-'))
        {
            opeExceed = true;
        }else if ($("#result").val().includes('*'))
        {
            opeExceed = true;
        }else if ($("#result").val().includes('/'))
        {
            opeExceed = true;
        }
        else if (pointNum == 1){
            pointBool = true;
        }
        else {opeExceed = false;}

        if ($("#result").val() === "") {
            inputEmpty = true;
        }
        else {inputEmpty = false;}
    }

    function operate(opeBtn)
    {
        validate();
        if (opeExceed == true || inputEmpty == true) {
            //Do Nothing
        }
        else if ($("#result").val().length <=0)
        {
            //DO Nothing
        }
        else
        {
        result = $("#result").val() + $(opeBtn).val();
        $("#result").val(result);
        // $btn = $(opeBtn).val
        // $.ajax({
        //     url:'classes/equal.php',
        //     type: "POST",
        //     data:{'result':result},
        //     success: function(msg)
        //     {
        //         $('#result').val(msg);
        //     }
        // });
        // }
        }
    }   
    function concat(btnConcat){
        result = $("#result").val() + $(btnConcat).val();
        $("#result").val(result);
    }

    function checkdecimal(pointBtn)
    {
        validate();
        if (pointNum == 0)
        {
            result = $("#result").val() + $(pointBtn).val();
            $("#result").val(result);
            pointNum++;
        }
        else if (opeExceed == true && pointNum == 1 && pointBool == true)
        {
            result = $("#result").val() + $(pointBtn).val();
            $("#result").val(result);
            pointNum++;
            pointBool = false;
        }

        
    }

    //Operation Buttons
    $("#btnOpeSolve").click(function(){
        result = $("#result").val();
        $.ajax({
            url:'classes/equal.php',
            type: "POST",
            data:{'result':result},
            success: function(msg)
            {
                $('#result').val(msg);
            }
        });
        
    });
    
    $("#btnOpeAdd").click(function(){
        operate(this);
    });

    $("#btnOpeMul").click(function(){
        operate(this);
    });

    $("#btnOpeSub").click(function(){
        operate(this);
    });

    $("#btnOpeDiv").click(function(){
        operate(this);
    });

    //Number and Point Buttons
    $("#btnNumPoint").click(function(){
        checkdecimal(this);
    });
    $("#btnNum1").click(function(){
        concat(this);
    });

    $("#btnNum2").click(function(){
        concat(this);
    });

    $("#btnNum3").click(function(){
        concat(this);
    });

    $("#btnNum4").click(function(){
        concat(this);
    });

    $("#btnNum5").click(function(){
        concat(this);
    });

    $("#btnNum6").click(function(){
        concat(this);
    });

    $("#btnNum7").click(function(){
        concat(this);
    });

    $("#btnNum8").click(function(){
        concat(this);
    });

    $("#btnNum9").click(function(){
        concat(this);
    });

    $("#btnNum0").click(function(){
        concat(this);
    });

    //Delete Button
    $("#delBtn").click(function(){
        result = $("#result").val().slice(0,-1);
        $("#result").val(result);
    });

    //Clear Button
    $("#clearBtn").click(function(){
        $("#result").val("");
        result = "";
        pointNum = 0;
        opeExceed = false;
        inputEmpty = false;
    });



});