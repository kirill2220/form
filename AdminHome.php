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
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
    <div class="container">
        <form class="addFilms form-group" method="post">
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
                <label class="col-sm-4" for="poster">
                    <p>Постер фильма</p>
                    <input class="form-control" id="poster" multiple accept="image/*,image/jpeg" type="file">
                </label>
                <label class="col-sm-4" for="poster">
                    <p>Трейлер фильма</p>
                    <input class="form-control" id="poster" multiple accept="video/*" type="file">
                </label>
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
    <script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/bootstrap/js/popper.min.js"></script>
</body>

</html>