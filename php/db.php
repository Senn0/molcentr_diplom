<?php 


require ('connect.php');


session_start();
//Вывод массива
function massive_output($value){
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}
//Собирает таблицу из базы данных в массив
//$query = $mysqli->query("SELECT * FROM `$table` WHERE $parametr = '$status'");
function extraction_table($table, $params=[]){
    global $mysqli;

    $query = $mysqli->query("SELECT * FROM `$table` ");

    $date_users = [];
    while($row = $query->fetch_assoc()){
        $date_users[] = $row;
    }
    
    return $date_users;
}

function extraction_likes($table, $id_user){
    global $mysqli;
    $value = 1;
    $query = $mysqli->query("SELECT * FROM `$table` WHERE likes = '$value' AND user_id = '$id_user'");

    $date_users = [];
    while($row = $query->fetch_assoc()){
        $date_users[] = $row;
    }
    
    return $date_users;
}
//Возвращает данные конкретного пользователя
function extraction_one_user($email){
    global $mysqli;

    $query = $mysqli->query("SELECT * FROM `user` WHERE email = '$email'");

    $date_users = [];
    while($row = $query->fetch_assoc()){
        $date_users[] = $row;
    }
    
    return $date_users;
}

function like($id_user, $id_event){
    global $mysqli;
    
    $value=1;
    $insert = $mysqli->query("UPDATE `likes` SET `likes`='$value' WHERE user_id = '$id_user' AND card_id = '$id_event'");
    if ($insert) {
        ?> 
        <?php
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function dislike($id_user, $id_event){
    global $mysqli;
    
    $value=0;
    $insert = $mysqli->query("UPDATE `likes` SET `likes`='$value' WHERE user_id = '$id_user' AND card_id = '$id_event'");
    if ($insert) {
        ?> 
        <?php
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function liked($id_user, $id_event){
    global $mysqli;

    $query = $mysqli->query("SELECT * FROM `likes` WHERE user_id = '$id_user' AND card_id = '$id_event'");

    $date_likes = [];
    while($row = $query->fetch_assoc()){
        $date_likes[] = $row;
    }
    
    return $date_likes;
}

function extraction_one_event($id){
    global $mysqli;

    $query = $mysqli->query("SELECT * FROM `posts` WHERE id_card = '$id'");

    $date_users = [];
    while($row = $query->fetch_assoc()){
        $date_users[] = $row;
    }
    
    return $date_users;
}

//Добавление нового пользователя в базу данных
function insert_user($name, $secondname, $surname, $phone, $email, $password){
    global $mysqli;
    $insert = mysqli_query($mysqli, "INSERT 
    INTO `user`(`name`, `secondname`, `surname`, `phone`, `email`, `password`, `status`) 
    VALUES ('$name','$secondname','$surname','$phone','$email','$password', 'user')");
    if ($insert) {
        ?> 
        <?php
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_name($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `name`='$value'
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Имя успешно изменено <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_secondname($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `secondname`='$value'
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Отчество успешно изменено <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_surname($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `surname`='$value'
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Фамилия успешно изменена <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_dateborn($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `date_born`='$value'
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Дата рождения успешно изменена <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_institut($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `institut`='$value'
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Образовательное учреждение успешно изменено <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_phone($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `phone`='$value' 
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Номер телефона успешно изменен <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_password($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `password`='$value' 
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Пароль успешно изменен <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function update_user_profile_image($value, $id){
    global $mysqli;

    $insert = mysqli_query($mysqli, "UPDATE `user` SET 
        `profile_image`='$value'
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Изображение успешно изменено <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
      }
}

function delete_user($id){
    global $mysqli;
    $insert = mysqli_query($mysqli, "DELETE 
    FROM `user` 
    WHERE id_user = $id");
    if ($insert) {
        echo '<br><br> Пользователь успешно удален <br><br>';
    } else {
        echo '<br><br><p>Произошла ошибка: ' . mysqli_error($mysqli) . '</p> <br><br>';
    }
    }

// Получение базы данных user в формате:
// Array
// (
//     [0] => Array
//         (
//             [id_user] => 1
//             [name] => admin
//             [secondname] => -
//             [surname] => -
//             [date_born] => 2012-12-12
//             [institut] => -
//             [phone] => -
//             [email] => admin
//             [password] => qwerty
//             [status] => admin
//             [profile_image] => �PNG
//         )
//     etc...
// )
?>