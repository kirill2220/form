//Авторизация
$('.login-but').click(function (e) {
e.preventDefault();
    $(`input`).removeClass('error');
let login = $('input[name="login"]').val();
let password = $('input[name="password"]').val();
$.ajax({
    url:'/auth.php',
    type:'POST',
    dataType:'json',
    data:{
        login:login,
        password:password
    },
success(data) {
    if (data.status) {
        document.location.href = '/Office.php';
    } else {
        if(data.type===1){
            data.fields.forEach(function (field){
                $(`input[name="${field}"]`).addClass('error');
            })
        }
            $('.msg').text(data.message);
        }

}
});
});
//Регистрация
$('.register-but').click(function (e) {
    e.preventDefault();
    $(`input`).removeClass('error');
    let login = $('input[name="login"]').val();
    let password = $('input[name="password"]').val();
    let Confirm_password = $('input[name="Confirm_password"]').val();
    let name = $('input[name="name"]').val();
    let email = $('input[name="email"]').val();

    $.ajax({
        url:'/function.php',
        type:'POST',
        dataType:'json',
        data:{
            login:login,
            password:password,
            Confirm_password:Confirm_password,
            email:email,
            name:name
        },
        success(data) {
            console.log(data);
            if (data.status) {
                console.log(2);
                document.location.href = '/Office.php';
            } else {
                console.log(data.type);
                if(data.type===1){
                    console.log(4);
                    data.fields.forEach(function (field){
                        $(`input[name="${field}"]`).addClass('error');
                    })
                }
                $('.msg').text(data.message);
            }

        }
    });
});