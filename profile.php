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
    <?php include 'php/menu.php';
    // massive_output($_SESSION);
    ?>

    <div class="contacts" style="margin-top: 30px;">
        <div class="container text-center">
            <div class="row align-items-center ">
                <div class="row text-dark">
                    <hr style="border: solid 1px #757575; margin-left: 1.5em;">
                    <h2 class="h1 col-12" style="margin-top: 60px;margin-bottom: 60px;">Личный кабинет</h2>
                    <div class="clearfix row" style="margin-left: 1.5em;">
                    <?php 
                          if ($_SESSION['profile_image'] == null){
                            
                          
                    ?>
                    <img src="img/user.png" class="col-3" style="min-width: 22em; margin-bottom: 1.5em;" alt="...">
                    <?php 
                          }else{
                    ?>
                    <img class="col-3" style="min-width: 22em; margin-bottom: 1.5em;" alt="..." src="data:image/png;base64,<?php echo base64_encode( $_SESSION['profile_image'] ); ?>" />
                    <?php 
                          }
                    ?> 
                        <div class="col-8 justify-content-start"  style="min-width: 22em;" >
                        <p  class="fs-5" style="text-align: left;">
                          Статус: <?php 
                          if($_SESSION['status'] == 'admin'){
                            echo "Администратор";
                          }
                          if($_SESSION['status'] == 'user'){
                            echo "Пользователь";
                          }
                          if($_SESSION['status'] == 'volunteer'){
                            echo "Волонтёр";
                          }
                          ?>
                        </p>
                        <br>
                        <p  class="fs-5" style="text-align: left;">
                            ФИО: <?php 
                          echo $_SESSION['surname'] . ' ' . $_SESSION['name'] . ' ' . $_SESSION['secondname'];
                          ?>
                        </p>
                        <p  class="fs-5" style="text-align: left;">
                            Дата рождения: <?php 
                          echo $_SESSION['date_born'];
                          ?>
                        </p>
                        <!-- <p  class="fs-5" style="text-align: left;">
                            Образовательное учреждение: <?php 
                        //   echo $_SESSION['institut'];
                           ?>
                        </p> -->
                        <br>
                        <p  class="fs-5" style="text-align: left;">
                            Почта: <?php 
                          echo $_SESSION['email'];
                          ?>
                        </p>
                        <p  class="fs-5" style="text-align: left;">
                            Телефон: <?php 
                          echo $_SESSION['phone'];
                          ?>
                        </p>
                        </div>
                        
                      </div>
                      
                </div>
            </div>
                <div class="col-5 text-dark" style="margin-left:2em; margin-top: 1em; max-width:3em;">
                    <button type="button" class="btn btn-dark but_user" style="width: 21em;" data-bs-toggle="modal" data-bs-target="#exampleModal">Редактировать данные</button>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Изменение данных</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                    <form method="POST">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ФИО</label>
                      <input name="surname" type="text" class="col form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Фамилия">
                      <input name="name" type="text" class="col form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Имя">
                      <input name="secondname" type="text" class="col form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Отчество (если есть)">
                    </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Дата рождения</label>
                            <input name="date_born" type="date" class="form-control" id="exampleInputPassword1" placeholder="XX.XX.XXXX">
                            <div id="emailHelp" class="form-text">Введите дату рождения</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Телефон</label>
                            <input name="phone" type="tel" class="form-control" id="exampleInputPassword1" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ">
                            <div id="emailHelp" class="form-text">Введите номер телефона</div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Закрыть</button>
                        <button name="change" type="submit" class="btn btn-dark">Сохранить изменения</button>
                    </div>
                    </form>
                    </div>
                </div>
                </div>


                <div class="col-5 text-dark " style="margin-left:2em; margin-top: 1em; max-width:3em;">
                <form method="post">
                    <button name="logout" type="submit" class="btn btn-danger but_user" style="width: 21em;">Выйти</button>
                </form>
                <div class="col-10">
                <?php 
                    if(isset($_POST['change'])){
                        if($_POST['name'] != null) {
                            update_user_name($_POST['name'], $_SESSION['id_user']);
                        }
                        if($_POST['secondname'] != null) {
                            update_user_secondname($_POST['secondname'], $_SESSION['id_user']);
                        }
                        if($_POST['surname'] != null) {
                            update_user_surname($_POST['surname'], $_SESSION['id_user']);
                        }
                        if($_POST['date_born'] != null) {
                            update_user_dateborn($_POST['date_born'], $_SESSION['id_user']);
                        }
                        if($_POST['phone'] != null) {
                            update_user_phone($_POST['phone'], $_SESSION['id_user']);
                        }

                    $user = [];
                    $user = extraction_one_user($_SESSION['email']);
                    $_SESSION['name'] = $user[0]['name'];
                    $_SESSION['secondname'] = $user[0]['secondname'];
                    $_SESSION['surname'] = $user[0]['surname'];
                    $_SESSION['date_born'] = $user[0]['date_born'];
                    $_SESSION['phone'] = $user[0]['phone'];
                    $_SESSION['profile_image'] = $user[0]['profile_image'];
                   ?> 
                   <?php }
                   ?></div>
                    
                
                <?php 
                if(isset($_POST['logout'])){
                    echo "Выход";
                    unset($_SESSION['id_user']);
                    unset($_SESSION['name']);
                    unset($_SESSION['secondname']);
                    unset($_SESSION['surname']);
                    unset($_SESSION['date_born']);
                    unset($_SESSION['institut']);
                    unset($_SESSION['phone']);
                    unset($_SESSION['email']);
                    unset($_SESSION['password']);
                    unset($_SESSION['status']);
                    unset($_SESSION['profile_image']);
                    if ($_SESSION == null){
                        ?>
                    <script type="text/javascript">location.href = 'index.php';</script>
                    <?php
                    }
                }
                ?>
                </div>
        </div>
      </div>

      <div class="container text-center" style="margin-bottom:100px">
        <div class="row align-items-center justify-content-around" style="margin-left: 2%;">
            <div class="col-12 text-dark">
                <br><br>
                <hr style="border: solid 1px #757575;">
                <h2 class="h1 events_h"  style="margin-bottom: 60px; margin-top: 60px;">Отслеживаемые мероприятия</h2>
                
                    <?php 
                    $events = extraction_likes('likes', $_SESSION['id_user']);
                    $len = count($events);
                    if($events != null){
                        ?> 
                        <div class="row align-items-top justify-content-around" style="margin-left: 2%;">
                        <?php
                        for($i=$len; $i>= 0; $i--){
                            if (isset($events[$i])){
                                $eve = extraction_one_event($events[$i]['card_id']);
                                ?>
                                    <div class="card col-3 event_card" style="margin-bottom: 40px; width: 24rem; text-align: left; background-color:#c4cbf4; border-radius: 1%; border: 0;">
                                        <div class="card-body" style="padding: 25px 20px;">
                                        <h5 class="card-title" ><?php echo $eve[0]['name']; ?></h5>
                                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $eve[0]['date']; ?></h6>
                                        <p class="card-text"><br><?php echo $eve[0]['description']; ?></p>
                                        <a href="event-<?php echo $events[$i]['card_id']; ?>.php" class="card-link link-dark" >Подробнее</a>
                                        </div>
                                    </div>
                                <?php
                        }}
                        ?>
                        </div>
                        <?php
                    }else{
                    ?>
                    
                </div>
                <p class="fs-4" style="text-align: center;">Вы не добавили никаких мероприятий</p>
                <br><br>
                <a class="btn btn-dark btn-lg" style="padding: 0.5em 2em; width: 15em;" href="event.php">Смотреть мероприятия</a></form>
                <?php 
                }
                ?>
            </div>
            </div>
        </div>
    </div>

                <?php 
                if($_SESSION['status'] == 'user'){
                ?>
                 <div class="container text-center" style="margin-bottom:100px">
                <div class="row align-items-center justify-content-around" style="margin-left: 2%;">
                <div class="col-12 text-dark">
                <hr style="border: solid 1px #757575;">
                <h2 class="h1 events_h"  style="margin-bottom: 60px; margin-top: 60px;">Волонтерская деятельность</h2>
                <p class="fs-4" style="text-align: left;">Вы не являетесь волонтером, чтобы получить доступ к волонтерской деятельности отправьте заявку и дождитесь её одобрения.</p>
                <br><br>
                <form method="post"><button type="submit" name="volunteer" class="btn btn-dark btn-lg" style="padding: 0.5em 2em;">Оставить заявку</button></form>
                </div>
                </div>
                </div>
                <?php
                if(isset($_POST['volunteer'])){
                    ?>
                    <h4 align="center">Заявка отправлена, пожалуйста дождитесь ответа администратора на почту</h4>
                    <?php
                } 
                } 
                if($_SESSION['status'] == 'volunteer'){
                ?>
                <div class="container text-center" style="margin-bottom:100px">
                <div class="row align-items-center justify-content-around" style="margin-left: 2%;">
                <div class="col-12 text-dark">
                <hr style="border: solid 1px #757575;">
                <h2 class="h1 events_h"  style="margin-bottom: 60px; margin-top: 60px;">Волонтерская деятельность</h2>
                
                <p class="fs-4" style="text-align: left;">Нет доступных мероприятий.</p>
                </div>
                </div>
            </div>
                <?php }
                ?>

    <?php 
    if($_SESSION['status'] == 'user' || $_SESSION['status'] == 'volunteer'){
        include 'php/contacts.php';
    }
    
    ?>
    <?php include 'php/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>