$('.login-but').click(function (e) {
e.preventDefault();
let login = $('input[name="login"]').val();
let password = $('input[name="password"]').val();
$.ajax({
    url:'/auth.php',
    type:'POST',
    dataType:'text',
    data:{
        login:login,
        password:password,
    },
success(data) {
    $('.msg').text(data);
}
});
});