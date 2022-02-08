$(document).ready(function(){
    
    $("#input1").on("keyup", function(){
        if($("#input1").val().length > 0){
            $("#input2").focus();
        }
    });
    $("#input2").on("keyup", function(){
        if($("#input2").val().length > 0){
            $("#input3").focus();
        }
        if($("#input2").val().length == 0){
            $("#input1").focus();
        }
    });
    $("#input3").on("keyup", function(){
        if($("#input3").val().length > 0){
            $("#input4").focus();
        }
        if($("#input3").val().length == 0){
            $("#input2").focus();
        }
    });
    $("#input4").on("keyup", function(){
        if($("#input4").val().length == 0){
            $("#input3").focus();
        }
    });

    
});