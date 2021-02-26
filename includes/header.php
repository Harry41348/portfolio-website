<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Mukta:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    
    <title>Harry W</title>
    <script src="../scripts/script.js" async></script>
  </head>

  <body class="container">
    <header class="header">
      <div class="header__menu" onclick="myFunction(this)">
        <div class="header__menu--bar bar1"></div>
        <div class="header__menu--bar bar2"></div>
        <div class="header__menu--bar bar3"></div>
      </div>

      <div class="header__menu--overlay" id="menu">
        <ul>
          <li><a href="about.php">About me</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>
    </header>