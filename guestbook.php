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
                <form method="post" action="#" id="form">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Введите ваше имя</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Не менее трех символов" pattern="[A-Za-zА-Яа-яЁё]{3,}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Введите ваше сообщение (не менее 15 сим.)</label>
                        <textarea class="form-control" name="message" id="message"  rows="3" required></textarea>
                    </div>
                    <input type="submit" id="btn" class="btn btn-primary mb-2">
                </form>
                <div id="messages">
                </div>
            </div>
        </div>
    </div>
</body>


<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
