$(document).ready(function () {
    //alertify.set('confirm','transition', 'fade');
    //alertify.set('notifier','position', 'top-right');

    alert("login");
    
    $('form').submit(function (e) {

        e.preventDefault();
       
        var data = {consulta:'login',email:'tomela',array:['hola','todos','mae']};//$(this).serializeArray();
        var url = "Controller/controladora_login.php";

        //validar

        $.ajax({
            url: url,
            type: 'post',
            dataType: 'json',
            data: data,
            success: function (resp) {      
                alert(resp);        
                
            },
            error: function (jqXHR, estado, error) {
                alert('error log');
                console.log("fallo");
            }
        });
    });
});
