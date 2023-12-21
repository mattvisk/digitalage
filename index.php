<?php

// digitalage.com/ P / I / X / E / L
$p = isset($_GET['p']) ? $_GET['p'] : null;
$i = isset($_GET['i']) ? $_GET['i'] : null;
$x = isset($_GET['x']) ? $_GET['x'] : null;
$e = isset($_GET['e']) ? $_GET['e'] : null;
$l = isset($_GET['l']) ? $_GET['l'] : null;
?>

<html>
  <head>
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    <!-- tailwind -->
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet" />
  </head>
  <body>

    <? /* Header  
    ----------------------------------------*/ ?>
    <header>
      <img width="100" src="images/logo/DAlogoLOCKUP_R_clear_dark.png" />
      <a href="/home">Home</a>
      <a href="/contact">Contact</a>
      <a href="/faq">Faq</a>
    </header>

    <? /* Content 
    ----------------------------------------*/ ?>
    <? if($p=='home'){ ?>
      <h1>Home</h1>

    <? } else if($p=='about'){ ?>
      <h1>About</h1>

    <? } else if($p=='contact'){ ?>
      <h1>Contact</h1>

    <? } else if($p=='faq'){ ?>
      <h1>FAQ</h1>
    <? } ?> 


  </body>
</html>
