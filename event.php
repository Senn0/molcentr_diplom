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

    <div class="">
        <div class="container text-center">
            <div class="row align-items-top justify-content-around" style="margin-left: 2%;">
                <div class="col-12 text-dark">
                    <h2 class="h1 events_h"  style="margin-top: 60px; margin-bottom: 60px;">Мероприятия</h2>
                    </div>
                    <?php 
                    $events = extraction_table('posts');
                    $len = count($events);
                    
                    for($i=$len; $i>= 0; $i--){
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
                </div>
            </div>
        </div>
        
    <?php include 'php/contacts.php';?>
    <?php include 'php/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>