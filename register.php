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

    <style>
        .email_w{
            display: none;
        }
        .password_check_w{
            display: none;
        }
        .password_w{
            display: none;
        }
    </style>

    <div class="login" style="margin-top: 30px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-dark">
                    <h2 class="h1" align="center" style="margin-top: 5%;margin-bottom: 60px;">Регистрация</h2>
                </div>
                <form class="col-7 text-left" name="register" method="POST" style="width: 50%; margin: 0 auto;">
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">ФИО</label>
                      <input name="surname" type="text" class="col form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Фамилия" required>
                      <input name="name" type="text" class="col form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Имя" required>
                      <input name="secondname" type="text" class="col form-control mb-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Отчество (если есть)">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Телефон</label>
                        <input name="phone" type="tel" class="form-control" id="exampleInputPassword1" placeholder="+7 (ХХХ) ХХХ-ХХ-ХХ" required>
                        <div id="emailHelp" class="form-text">Введите номер телефона</div>
                      </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Электронная почта</label>
                        <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="example@mail.ru" required>
                        <div id="emailHelp" class="form-text email_q">Введите вашу электронную почту</div>
                        <p class="email_w" style="color:crimson;">Такой адрес электронной почты уже зарегистрирован</p>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Пароль</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                      <div id="emailHelp" class="form-text password_q">Ваш пароль должен состоять из 4-20 символов, содержать буквы и цифры и не должен содержать пробелов, специальных символов или эмодзи</div>
                      <p class="password_w" style="color:crimson;">Неправильный формат пароля</p>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Повтор пароля</label>
                        <input name="password_check" type="password" class="form-control" id="exampleInputPassword1" required>
                        <div id="emailHelp" class="form-text password_check_q">Повторите пароль</div>
                        <p class="password_check_w" style="color:crimson;">Пароли не совпадают</p>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                      <label class="form-check-label" for="exampleCheck1">Я соглашаюсь на обработку персональных данных</label>
                    </div>
                    <button type="submit" name="reg" class="btn btn-dark " style="width: 100%; margin-top: 2%;">Регистрация</button>
                  <div class="col-12 text-dark">
                    <p  align="center" style="margin-top: 2%;margin-bottom: 60px;">Уже зарегистрированны? <a href="login.php">Войти</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php 
        if(isset($_POST["reg"])){
            $users =[];
            $users = extraction_table('user');
            for($i = 0; $i < count($users); $i++){
                if($users[$i]['email'] == $_POST["email"]){
                    ?>
                    <style>
                        .email_q{
                            display: none;
                        }
                        .email_w{
                            display: block;
                        }
                    </style>
                    <?php 
                    exit;
                }
            }
            if(strlen($_POST["password"]) < 4 || strlen($_POST["password"]) > 20){
                    ?>
                    <style>
                        .password_w{
                            display: block;
                        }
                    </style>
                    <?php 
                    exit;
            }
            if($_POST["password"] != $_POST["password_check"]){
                    ?>
                    <style>
                        .password_check_q{
                            display: none;
                        }
                        .password_check_w{
                            display: block;
                        }
                    </style>
                    <?php 
                    exit;
            }
            $name = $_POST["name"];
            $secondname = $_POST["secondname"];
            $surname = $_POST["surname"];
            $phone = $_POST["phone"];
            $email = $_POST["email"];
            $password= $_POST["password"];
            
            insert_user($name, $secondname, $surname, $phone, $email, $password);

                    $user = extraction_one_user($email);
                    $_SESSION['id_user'] = $user[0]['id_user'];
                    $_SESSION['name'] = $user[0]['name'];
                    $_SESSION['secondname'] = $user[0]['secondname'];
                    $_SESSION['surname'] = $user[0]['surname'];
                    $_SESSION['date_born'] = $user[0]['date_born'];
                    $_SESSION['institut'] = $user[0]['institut'];
                    $_SESSION['phone'] = $user[0]['phone'];
                    $_SESSION['email'] = $user[0]['email'];
                    $_SESSION['password'] = $user[0]['password'];
                    $_SESSION['status'] = $user[0]['status'];
                    $_SESSION['profile_image'] = $user[0]['profile_image']; 
            ?>
            <script type="text/javascript">location.href = 'profile.php';</script>
            <?php
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>