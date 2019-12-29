$('#attendanceFrom').submit(function(e){
    $('#attendanceFrom').preventDefault();
    console.log('clicked');
    
});
$('#submitAttend').click(function(){
    $('#attendanceFrom').submit();
});

$('#attendanceFrom td span').click(function(){
    var a = $(this).text();
    if(a == 'Yes'){
        $(this).next().attr("disabled", 'disabled');
        $(this).next().css("background", '#ccc');
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
var attend = [];
var absend = [];
$('td:first-child').each(function() {
    var studentId = $(this).attr('id');
    
    
    
    // attend student 
    $('#attend'+studentId).css('display', 'none');
    $('#attendance1'+studentId).click(function(){
        $('#attend'+studentId).css('display', 'block');
        $('#attendance1'+studentId).css('display', 'none');
        $('#absend'+studentId).css('display', 'none');
        $('#attendance2'+studentId).css('display', 'block');
        attend.push(studentId);
        absend.pop(studentId);
        
    })

    $('#attend'+studentId).click(function(){
        $('#attend'+studentId).css('display', 'none');
        $('#attendance1'+studentId).css('display', 'block');
        attend.pop(studentId);
    })


    // absend student 
    $('#absend'+studentId).css('display', 'none');
    $('#attendance2'+studentId).click(function(){
        $('#absend'+studentId).css('display', 'block');
        $('#attendance2'+studentId).css('display', 'none');

        $('#attend'+studentId).css('display', 'none');
        $('#attendance1'+studentId).css('display', 'block');
        attend.pop(studentId);
        absend.push(studentId);
    })

    $('#absend'+studentId).click(function(){
        $('#absend'+studentId).css('display', 'none');
        $('#attendance2'+studentId).css('display', 'block');
        absend.pop(studentId);
    })

    

});