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

      <div class="maneac" style="z-index: 10;">
        <div class="container text-center">
            <div class="row align-items-end">
                <div class="col-12 text-light">
                    <h1 class="maneac_h">МОЛОДЕЖНЫЙ ЦЕНТР РАЗВИТИЯ ЛИЧНОСТИ</h1>
                    <p class="maneac_p">РАЗВИТИЕ ТВОРЧЕСКИХ,<br> ИННОВАТОРСКИХ И<br> ПРЕДПРИНИМАТЕЛЬСКИХ<br> ИНИЦИАТИВ МОЛОДЕЖИ</p>
                    <a class="maneac_button" href="#">Присоединиться</a>
                </div>
            </div>
        </div>
      </div>

      <div class="">
        <div class="container text-center">
            <div class="row align-items-top justify-content-around" style="margin-left: 2%;">
                <div class="col-12 text-dark">
                    <h2 class="h1 events_h"  style="margin-top: 60px; margin-bottom: 60px;">Мероприятия</h2>
                    </div>
                    <?php 
                    $events = extraction_table('posts');
                    $len = count($events);
                    
                    for($i=$len; $i>= $len-3; $i--){
                        if (isset($events[$i])){
                            ?>
                                <div class="card col-3 event_card" style="margin-bottom: 40px; width: 24rem; text-align: left; background-color:#c4cbf4; border-radius: 1%; border: 0;">
                                    <div class="card-body" style="padding: 25px 20px;">
                                    <h5 class="card-title" ><?php echo $events[$i]['name']; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $events[$i]['date']; ?></h6>
                                    <p class="card-text"><br><?php echo $events[$i]['description']; ?></p>
                                    <a href="event-<?php echo $i+1; ?>.php" class="card-link link-dark" >Подробнее</a>
                                    </div>
                                </div>
                            <?php
                    }}
                    ?>
                    <div class="col-12 text-dark">
                        <a class="fs-3 link-light btn" style="background-color: #000000; padding: 10px 24px;" href="event.html">Все мероприятия</a>
                    </div>
                </div>
            </div>
        </div>

      <div class="aboutus" id="aboutus" style="background-color: #4d5ec9; margin-top: 100px;">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-12 text-light">
                    <h2 class="h1" style="margin-top: 100px;margin-bottom: 30px;">О нас</h2>
                    <p class="fs-4" style="text-align: left; margin-bottom: 80px;">Добро пожаловать в Молодёжный центр города Вологды! Мы — команда профессионалов, которые стремятся сделать жизнь молодёжи яркой и насыщенной. Наша цель — помочь молодым людям раскрыть свой потенциал, реализовать свои идеи и мечты.
                    <br><br>В Молодёжном центре города Вологды каждый молодой человек может найти занятие по душе и раскрыть свой потенциал. Мы стремимся создать пространство, где молодёжь может развиваться, общаться, творить и мечтать. Присоединяйтесь к нам и вместе мы сделаем мир лучше!</p>
                </div>
            </div>
        </div>
      </div>
      
      <div class="news" id="news" >
        <div class="row text-center align-items-start justify-content-center" style="max-width: 100%;">
          <div class="col-12 text-dark">
                    <h2 class="h1" style="margin-top: 100px;margin-bottom: 70px;">Новости</h2>
                </div>
            <div class="card col-3" style="margin-bottom: 40px; width: 24rem;text-align: left; border-radius: 1%; border: 0;">
                <div class="card-img-top" style="background-image: url(img/news1.PNG); height: 400px; background-size: 100%; background-repeat: no-repeat;"></div>
                <div class="card-body" style="margin: 0; padding: 0; margin-top: -100px;">
                  <h5 class="card-title fs-3"><br>«Цифровой прорыв. Сезон: искусственный интеллект»</h5>
                  <p class="card-text fs-4">Открыта регистрация на первый окружной хакатон проекта «Цифровой прорыв. Сезон: искусственный интеллект»</p>
                  <p class="card-subtitle mb-2 text-muted fs-4">01.04.2024</p>
                  <a href="https://hacks-ai.ru" type="button" class="card-link link-dark fs-4"">Подробнее</a>
                </div>
              </div>
              <div class="card col-3" style="margin-bottom: 40px; width: 24rem;text-align: left; border-radius: 1%; border: 0;">
                <div class="card-img-top" style="background-image: url(img/news2.png); height: 400px; background-size: 100%; background-repeat: no-repeat;"></div>
                <div class="card-body" style="margin: 0; padding: 0; margin-top: -100px;">
                  <h5 class="card-title fs-3"><br>Фестиваль короткометражных фильмов о Великой Отечественной войне</h5>
                  <p class="card-text fs-4">Всероссийский кинопоказ и телемост пройдут в Международному дню освобождения узников фашистских концлагерей</p>
                  <p class="card-subtitle mb-2 text-muted fs-4">01.04.2024</p>
                  <a href="https://detivbezopasnosti.ru/c/respublikanskij-kinofestival" type="button" class="card-link link-dark fs-4">Подробнее</a>
                </div>
              </div>
              <div class="card col-3" style="margin-bottom: 40px; width: 24rem;text-align: left; border-radius: 1%; border: 0;">
                <div class="card-img-top" style="background-image: url(img/news3.png); height: 400px; background-size: 100%; background-repeat: no-repeat;"></div>
                <div class="card-body" style="margin: 0; padding: 0; margin-top: -100px;">
                  <h5 class="card-title fs-3"><br>Первый сезон конкурса Росмолодёжь</h5>
                  <p class="card-text fs-4">Гранты до 1 млн рублей может выиграть молодежь Вологодской области в первом сезоне конкурса Росмолодёжь.</p>
                  <p class="card-subtitle mb-2 text-muted fs-4">01.04.2024</p> <br>
                  <a href="https://fadm.gov.ru/news/obyavleny-itogi-vserossiyskogo-grantovogo-konkursa-molodyezhnykh-proektov-rosmolodezh-granty-1-sezon/" type="button" class="card-link link-dark fs-4">Подробнее</a>
                </div>
              </div>
              <div class="col-12 text-dark" style="margin-top: 40px; margin-bottom: 100px;">
                <a class="fs-4 link-light btn" style="background-color: #000000; padding: 10px 24px; margin-top: 10px;" href="news.html">Все новости</a>
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