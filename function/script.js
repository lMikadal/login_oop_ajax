function checkusername(val){
    $.ajax({
        type: 'POST',
        url: 'register_db.php',
        data: 'username='+val,
        success: function(data){
            $('#usernameavailable').html(data);
            $('#sing_up').html(data);
        }
    })
}
function checkemail(val){
    $.ajax({
        type: 'POST',
        url: 'register_db.php',
        data: 'email='+val,
        success: function(data){
            $('#emailavailable').html(data);
        }
    })
}