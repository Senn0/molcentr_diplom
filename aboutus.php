<?php include 'php/db.php';?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Главная страница</title>
  <link rel="stylesheet" href="/style/style.css" />
  <link rel="icon" type="image/png" href="img/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php include 'php/style.php';?>
    <?php include 'php/connect.php';?>
    <?php include 'php/up.php';?>
    <?php include 'php/menu.php';?>

    <div class="aboutus aboutus_new" id="aboutus" style="background-color: #f4f6ff; padding-top: 60px;  padding-bottom: 60px;">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-12 text-dark">
                    <h2 class="h1" style="margin-top: 100px;padding-bottom: 30px;">О нас</h2>
                    <p class="fs-4" style="text-align: left; padding-bottom: 80px;">Добро пожаловать в Молодёжный центр города Вологды! Мы — команда профессионалов, которые стремятся сделать жизнь молодёжи яркой и насыщенной. Наша цель — помочь молодым людям раскрыть свой потенциал, реализовать свои идеи и мечты.
                    <br><br>В Молодёжном центре города Вологды каждый молодой человек может найти занятие по душе и раскрыть свой потенциал. Мы стремимся создать пространство, где молодёжь может развиваться, общаться, творить и мечтать. Присоединяйтесь к нам и вместе мы сделаем мир лучше!</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'php/questions.php';?>
    <?php include 'php/contacts.php';?>
    <?php include 'php/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>