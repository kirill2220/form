$('.btn-block').click(function (e) {
    e.preventDefault();

    let name = $('input[id="name"]').val();
    let year = $('input[id="year"]').val();
    let duration = $('input[id="duration"]').val();
    let age = $('input[id="age"]').val();
    let date_of_start = $('input[id="date_of_start"]').val();
    let date_of_end = $('input[id="date_of_end"]').val();
    let genre =$('input[id="genre"]').val();
    let poster = $('input[id="poster"]').val();
    let trailer = $('input[id="trailer"]').val();
    let description = $('input[id="description"]').val();

    $.ajax({
        url:'../Add/addfilm.php',
        type:'POST',
        dataType:'json',
        data:{
            name:name,
            year:year,
            duration:duration,
            date_of_start:date_of_start,
            date_of_end:date_of_end,
            genre:genre,
            age:age,
            poster:poster,
            trailer:trailer,
            description:description
        },
        success(data) {
            if (data.status) {
                //document.location.href = 'Register.php';
                $('.msg').text(data.message);
            } else {
                switch (data.type){
                    case 1:
                        data.fields.forEach(function (field){
                            $(`input[name="${field}"]`).addClass('error');
                        })
                        $('.msg').text(data.message);
                        break;
                    case 2:
                        $('.msg_login').text(data.message);
                        break;
                    case 3:
                        $('.msg_email').text(data.message);
                        break;
                    case 4:
                        $('.msg_password').text(data.message);
                        break;
                    case 5:
                        $('.msg_confirm').text(data.message);
                        break;
                    case 6:
                        $('.msg_name').text(data.message);
                        break;
                }
            }
        }
    });
});
