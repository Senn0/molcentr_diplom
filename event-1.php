<?php include 'php/db.php';?>
<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Подробнее о мероприятии</title>
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
  <style>
  </style>
    <div >
      <?php 
      $id = 1;
      $event = extraction_one_event($id);
      ?>
        <div class="col-12 text-center align-items-center justify-content-center" style="max-width:100%;">
          <div class="row text-dark">
                    <h2 class="h1" style="margin-top: 100px;margin-bottom: 30px;"><?php echo $event[0]['name']; ?></h2>
          </div>
          <div class="row justify-content-center" style="max-width:100%;">
            <img src="img/event/<?php echo $id; ?>.jpg" style="width:55em;">
          </div>
          <div class="row text-dark justify-content-center" style="max-width:100%;">
            <p class="fs-5" ><br><?php echo $event[0]['date'] . " • " . $event[0]['price']; ?></p>
            <p class="fs-5" style="width:25em;"><i><?php echo $event[0]['adress']?></i></p>
          </div>
          <div class="row text-dark justify-content-center" style="max-width:100%;">
            <p class="fs-4" style="text-align: left; width:36em;"><?php echo $event[0]['body']?></p>
          </div>
          <div class="" style="max-width:100%;">
            <?php 
            if($_SESSION != null){
            ?>
            <a href="<?php echo $event[0]['link']; ?>" class=" fs-5 link-light btn align-items-center" style="background-color: #000000; padding: 10px 24px; margin-top:1em; width: 15em;" >Купить билеты</a>
            
            <?php 
            $liked = liked($_SESSION['id_user'], $event[0]['id_card']);
            if($liked[0]['likes'] != 0){
              ?>
              <form method="POST">
              <button type="submit" name="unsubs" class=" fs-5 link-light btn align-items-center" style="background-color: #524072; padding: 10px 24px; margin-top:1em; width: 15em;" >Перестать отслеживать</button>
              </form>
              <?php
            }else{
            ?>
            
            <form method="POST">
              <button type="submit" name="subs" class=" fs-5 link-light btn align-items-center" style="background-color: #524072; padding: 10px 24px; margin-top:1em; width: 15em;" >Отслеживать мероприятие</button>
            </form>
            <?php }
            }else{
            ?>
            <a href="<?php echo $event[0]['link']; ?>" class=" fs-5 link-light btn align-items-center" style="background-color: #000000; padding: 10px 24px; margin-top:1em; width: 15em;" >Купить билеты</a>
            <?php 
            }
            ?>
          </div>
          <?php 
          if(isset($_POST['subs'])){
            like($_SESSION['id_user'], $event[0]['id_card']);
            echo "<br><h4>Теперь вы отслеживаете это мероприятие</h4>";
          }
          if(isset($_POST['unsubs'])){
            dislike($_SESSION['id_user'], $event[0]['id_card']);
            echo "<br><h4>Вы больше не отслеживаете это мероприятие</h4>";
          }
          
          ?>
      </div>
      </div>
    <?php include 'php/contacts.php';?>
    <?php include 'php/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>