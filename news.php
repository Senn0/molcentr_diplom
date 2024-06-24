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
        </div>
      </div>
    <?php include 'php/contacts.php';?>
    <?php include 'php/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>