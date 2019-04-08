<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/ajax.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Guest book</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <form method="post" action="#">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Введите ваше имя</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Введите ваше сообщение</label>
                        <textarea class="form-control" name="message" id="message"  rows="3"></textarea>
                    </div>
                    <button id="btn" class="btn btn-primary mb-2">Отправить</button>
                </form>
                <div id="messages">
                </div>
                <button id="test">test</button>
            </div>
        </div>
    </div>
</body>


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
