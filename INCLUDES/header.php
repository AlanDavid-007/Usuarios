<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/x-icon" href="../Assets/logo.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <!-- My Assets -->
  <link rel="stylesheet" href="../Assets/CSS/styles.css">
  <script src="../Assets/JS/navbar.js"></script>
  <!-- Title -->
  <title>Usuários</title>

</head>

<body class="text-light">
  <div class="container m-auto">
    <header class="header">
      <a href="../index.php" class="header__logo"></a>

      <ion-icon name="menu-outline" class="header__toggle" id="nav-toggle"></ion-icon>

      <nav class="nav " id="nav-menu">
        <div class="nav__content bd-grid">

          <ion-icon name="close-outline" class="nav__close" id="nav-close"></ion-icon>

          <div class="nav__perfil">
            <div class="nav__img">
              <img src="../Assets/logo.png" alt="">
            </div>

            <div>
              <a href="../index.php" class="nav__name" style="text-decoration: none;">USUÁRIOS</a>
            </div>
          </div>

          <div class="nav__menu">
            <ul class="nav__list">
              <li class="nav__item"><a href="../Index/index_usuarios.php" class="nav__link">Usuários</a></li>
            </ul>
          </div>

          <div class="nav__social">
            <a href="https://github.com/AlanDavid-007/Usuarios/" class="nav__social-icon">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </div>
        </div>
      </nav>
    </header>
    <div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
    <section class="header2 m-auto d-flex p-2 bd-highlight">
      <div class="texts">
        <h1><?php echo TITLE ?></h1>
        <p>Formulário criado para cadastro de Usuários</p>
      </div>
      <div class="wrap" style="padding:20px; margin-left:20%;">
      <a class="m-auto" href="<?php echo HREF ?>">
        <button class="btn btn-header btn-lg"><?php echo BUTTONTEXT ?></button>
      </a>
      </div>
    </section>
    <br>
    <!--<br>
    <div class='box'>
  <div class='wave -one'></div>
  <div class='wave -two'></div>
  <div class='wave -three'></div>
</div>-->
    <!-- <script>
      $(document).ready(function() {
        $("#filtroCards").on("keyup", function() {
          var value = $(this).val().toLowerCase();
          $(" ").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
        });
      });
    </script>  -->
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

    <!--===== MAIN JS =====-->
    <script src="../Assets/JS/navbar.js"></script>