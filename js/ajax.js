$(document).ready(function() {

    $.ajax({
        url:"getposts.php",
        type:"GET",
        cache:false,
        data:{}, // Отправка
        success: function (data) {
            var div = document.getElementById('messages');
            for (i=0;data.length-1;++i){
                div.innerHTML +=
                    '<div class="mes">' +
                    '<h3>' + (data[i].name) + '</h3>' +
                    '<h5>' + (data[i].data) + '</h5>' +
                    '<p>' + (data[i].text) + '</p>' +
                    '</div>' +'<hr>';
            }
        }

    });


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