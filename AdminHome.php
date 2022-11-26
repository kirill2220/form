<?php
session_start();
require $_SERVER['DOCUMENT_ROOT'].'/Add/addfilm.php'
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="Style/forms.css">
    <link rel="stylesheet" href="Style/global_style.css">
    <link href="./lib/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
</head>

<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarColor01" style="">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <ul class="form-inline my-2 my-lg-0 navbar-nav d-flex">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./images/user.png" class="rounded-circle mr-2" height="34" alt="/*Username*/"> <span>Username</span>
                </a>
                <div class="dropdown-menu navbar-dark" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#"><i class="icon-user-plus"></i> My Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"><i class="icon-cog5"></i> Account settings</a>
                    <a href="#" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <?=$_SESSION['a1'].'hi';?>
    <?=$_SESSION['a2'].'fr';?>
    <?=$_SESSION['a3'].'sw';?>
    <form class="addFilms form-group" >
        <div class="row">
            <label class="col-sm-4" for="name">
                <p>Название фильма</p>
                <input class="form-control" id="name" type="text">
            </label>
            <label class="col-sm-4" for="year">
                <p>Год выпуска</p>
                <input class="form-control" id="year" type="number">
            </label>
            <label class="col-sm-4" for="duration">
                <p>Продолжительность</p>
                <input class="form-control" id="duration" type="time">
            </label>
        </div>
        <div class="row">
            <label class="col-sm-4" for="age">
                <p>Возростное ограничение</p>
                <input class="form-control" id="age" type="number">
            </label>
            <label class="col-sm-4" for="date_of_start">
                <p>Дата начала проката</p>
                <input class="form-control" id="date_of_start" type="date">
            </label>
            <label class="col-sm-4" for="date_of_end">
                <p>Дата оканчания проката</p>
                <input class="form-control" id="date_of_end" type="date">
            </label>
        </div>
        <div class="row">
            <label class="col-sm-4" for="genre">
                <p>Жанр</p>
                <input class="form-control" id="genre" type="text">
            </label>
            <!--<label class="col-sm-4" for="poster">
                <p>Постер фильма</p>
                <input class="form-control" id="poster" multiple accept="image/*,image/jpeg" type="file">
            </label>
            <label class="input__wrapper col-sm-4" for="poster">
                <p>Трейлер фильма</p>
                <input class="form-control input input__file" id="poster input__file" multiple accept="video/*" type="file">
            </label>-->
            <div class="col-sm-4">
                <p>Постер фильма</p>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="poster">Choose file</label>
                        <input type="file"  class="custom-file-input" accept="image/*,image/jpeg" id="poster">
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <p>Трейлер фильма</p>
                <div class="input-group mb-3">
                    <div class="custom-file">
                        <label class="custom-file-label" for="trailer">Choose file</label>
                        <input type="file" class="custom-file-input" multiple accept="video/*" id="trailer">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <label class="col-sm-12" for="description">
                <p>Описание</p>
                <textarea rows="5" class="form-control" id="description"></textarea>
            </label>
        </div>
        <hr>
        <button class="btn btn-outline-danger btn-lg btn-block" type="submit">Отправить</button>
    </form>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="lib/jquery-3.6.1.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>
<script src="lib/bootstrap/js/popper.min.js"></script>
<script src="js/AddFilm.js"></script>
<script>

</script>
</body>

</html>
<?php
session_destroy();
?>