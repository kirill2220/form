$('.login-but').click(function (e) {
e.preventDefault();
let login = $('input[name="login"]').val();
let password = $('input[name="password"]').val();
$.ajax({
    url:'/auth.php',
    type:'POST',
    dataType:'json',
    data:{
        login:login,
        password:password,
    },
success(data) {
        if(data.status){

           document.location.href='/Office.php';
        }else {
            $('.msg').text(data.message);
        }

}
});
});