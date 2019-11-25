$('#attendanceFrom').submit(function(e){
    e.preventDefault();
});

$('#attendanceFrom td button').click(function(){
    var a = $(this).text();
    if(a == 'Yes'){
        $(this).next().attr("disabled", 'disabled');
        $(this).next().next().css('display', 'inline-block');
        
    }else if(a == 'No'){
        $(this).prev().attr("disabled", 'disabled');
        $(this).next().css('display', 'inline-block');
    }else if(a == 'Undo'){
        $(this).prev().removeAttr("disabled");
        $(this).prev().prev().removeAttr("disabled");
        $(this).css('display', 'none');
    }
    
    console.log(a);
});