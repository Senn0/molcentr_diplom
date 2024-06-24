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
                        .password_w{
                            display: none;
                        }
                    </style>
    <div class="login" style="margin-top: 30px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-dark">
                    <h2 class="h1" align="center" style="margin-top: 5%;margin-bottom: 60px;">Вход</h2>
                </div>
                <form class="col-7 text-left" style="width: 50%; margin: 0 auto;" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Электронная почта</label>
                        <input name="email" type="" class="form-control" id="exampleInputPassword1" required>
                        <div id="emailHelp" class="form-text">Введите вашу электронную почту</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Пароль</label>
                      <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                      <div id="emailHelp" class="form-text password_q">Введите ваш пароль</div>
                      <p class="password_w" style="color:crimson;">Неправильная почта или пароль</p>
                    </div>
                    <button type="submit" name="log" class="btn btn-dark " style="width: 100%; margin-top: 2%;">Войти</button>
                  <div class="col-12 text-dark">
                    <p  align="center" style="margin-top: 2%;margin-bottom: 60px;">Ещё не зарегистрированны? <a href="register.php">Регистрация</a></p>
                    </div>
                </form>
            </div>
        </div>
      </div>
    <?php 
        if(isset($_POST["log"])){
            $users =[];
            $users = extraction_table('user');
            for($i = 0; $i < count($users); $i++){
                if($users[$i]['email'] == $_POST["email"] && $users[$i]['password'] == $_POST["password"]){
                    echo "успешно";
                    $email = $_POST["email"];
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
                }else{
                    ?>
                    <style>
                        .password_q{
                            display: none;
                        }
                        .password_w{
                            display: block;
                        }
                    </style>
                    <?php
                }
            }
            
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>