<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <form class="form-group" method="post">
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
            <label class="col-sm-4" for="age">
                <p>Возростное ограничение</p>
                <input class="form-control" id="age" type="number">
            </label>
        </div>
        <div class="row">
            <label class="col-sm-4" for="date_of_start">
                <p>Дата начала проката</p>
                <input class="form-control" id="date_of_start" type="date">
            </label>
            <label class="col-sm-4" for="date_of_end">
                <p>Дата оканчания проката</p>
                <input class="form-control" id="date_of_end" type="date">
            </label>
            <label class="col-sm-4" for="genre">
                <p>Жанр</p>
                <input class="form-control" id="genre" name="genre" type="text">
            </label>
            <label class="col-sm-4" for="poster">
                <p>Постер фильма</p>
                <input class="form-control" id="poster" multiple accept="image/*,image/jpeg" type="file">
            </label>
        </div>
        <div class="row">
            <label for="description">
                <p>Описание</p>
                <textarea class="form-control form-control-file" rows="5" id="description"></textarea>
            </label>
        </div>
        <div class="row">
            <input class="btn btn-outline-danger form-control" type="submit" value="Отправить">
        </div>
    </form>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="lib/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/bootstrap/js/popper.min.js"></script>
</body>

</html>