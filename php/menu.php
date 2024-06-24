<nav class="navbar-light container text-center col-12 menu" style="z-index: 100;">
<a id="up"></a>
      <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
          <div class="col col-3">
            <a href="index.php"><img class="logo" src="img/logo.png"></a>
          </div>
          <div class="col col-6 dext">
            <a class="a black_text_color menu_links_size menu_links_margin" href="aboutus.php">О нас</a>
            <a class="a black_text_color menu_links_size menu_links_margin" href="news.php">Новости</a>
            <a class="a black_text_color menu_links_size menu_links_margin" href="event.php">Мероприятия</a>
            <a class="a black_text_color menu_links_size menu_links_margin" href="#contact">Контакты</a>
            <?php 
            if($_SESSION != null){
            ?>
            <a class="a black_text_color menu_links_size" href="profile.php">Профиль</a>
            <?php 
            }else{
            ?>
            <a class="a black_text_color menu_links_size" href="login.php">Войти</a>
            <?php 
            }
            ?>
          </div>
          <div class="col col-3 dext">
            <a class="phone_size a black_text_color">8(921)125-87-00<br>8(981)125-87-00</a>
          </div>
          <div class="col-3">
        <button class="navbar-toggler dropdown_m" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button></div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h2 class="offcanvas-title" id="offcanvasNavbarLabel">Молодежный центр</h2>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item"><br>
                <a class="h4 a black_text_color" href="index.php">Главная страница</a>
              </li>
              <li class="nav-item"><br>
                <a class="h4 a black_text_color" href="aboutus.php">О нас</a>
              </li>
              <li class="nav-item"><br>
                <a class="h4 a black_text_color" href="news.php">Новости</a></li>
              </li>
              <li class="nav-item"><br>
                <a class="h4 a black_text_color" href="event.php">Мероприятия</a></li>
              </li>
              <li class="nav-item"><br>
                <a class="h4 a black_text_color" href="#contact">Контакты</a></li>
              </li>
              <li class="nav-item"><br>
              <?php 
            if($_SESSION != null){
            ?>
            <a class="h4 a black_text_color" href="profile.php">Профиль</a>
            <?php 
            }else{
            ?>
            <a class="h4 a black_text_color" href="login.php">Войти/Зарегистрироваться</a></li>
            <?php 
            }
            ?>
              </li>
              <li class="nav-item"><br><br>
                <a class="h5 a black_text_color">8(921)125-87-00<br>8(981)125-87-00</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </nav>