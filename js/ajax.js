$(document).ready(function() {

    $('#btn').click (function(){

        $.ajax({
            url:"post.php",
            type:"POST",
            cache:false,
            data:{ name:$('#name').val(), message:$('#message').val() }, // Отправка
            success: function (data) {
                $('#one').html(data);
            }

        });

    });

});