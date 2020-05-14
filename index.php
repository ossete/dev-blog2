<?php
ini_set('display_errors', 1); 
error_reporting(E_ALL);

$page = isset($_GET['page']) ? $_GET['page'] : 'index'; 

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width <!--show it full screen-->, initial-scale=1.0 <--when page loads zoom ratio will be 1.0-->">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="/assets/favicons/site.webmanifest">
  <link rel="mask-icon" href="/assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="/assets/favicons/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="/assets/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/icons/icons.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script defer src="assets/js/scripts.js"></script>
  <title>Akif's Dev Blog</title>
</head>
<body class="index">
  <div class="page">
  <header>
    <nav class="external">
      <a class="l-pad" href="?page=index">AKIF'S DEV BLOG</a>      
      <a class="l-pad m-l-0-3" href="https://twitter.com/theossete"><i class="icon-twitter1"></i></a>
      <a class="l-pad m-l-0-3" href="https://github.com/ossete"><i class="icon-github1"></i></a>
      <a class="l-pad m-l-0-3" href="https://www.linkedin.com/in/mehmet-akif-s-3b51681a1/"><i class="icon-linkedin1"></i></a>
      <a class="l-pad m-l-0-3" href="https://stackexchange.com/users/18307545/ossete"><i class="icon-stackoverflow1"></i></a>
      <a class="l-pad m-l-0-3" href="mailto:mehmetakifsakarya@gmail.com"><i class="icon-mail"></i></a>
    </nav>
    <nav class="internal">
      <a href="?page=index">Blog</a>
      <a href="?page=about">About</a>
      <!-- <button id="darkTheme" onclick="darkTheme()">Dark Theme</button>
      <button id="basicTheme" onclick="basicTheme()">Basic Theme</button> -->
      <a class=menu-link onclick="darkTheme()">Dark Theme</a>
      <a class=menu-link onclick="basicTheme()">Basic Theme</a>
      <!-- to change the theme persistently, we should create session and use cookies
(have to be done with php) -->
    </nav>
    <h1 class="page-title">Akif's Dev Blog</h1>
    <p>Web development basics and code exemples</p>
  </header>
  <main>
  <?php 
    require_once("html/$page.html"); 
    ?>  
  </main>
  </div> 
  <footer class="footer">
    <section class="footer-nav">
      <a class="l-pad" href="?page=index">AKIF'S DEV BLOG</a>
      <a class="l-pad m-l-0-3" href="#"><i class="icon-keyboard_arrow_up"></i></a>
    </section>
    <section class="footer-text">
      <p>&copy; 2020 / POWERED BY <a href="https://github.com/ossete">AKIF</a></p>
      <p>GHOSTWRITER THEME BY JOLLYGOODTHEMES / PORTED TO HUGO BY JBUB</p>
    </section>
  </footer>
</body>

</html>