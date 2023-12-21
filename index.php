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
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />   
  </head>
  <body>
    <div class="wrapper">
      <div class="inner-wrapper">

    <? /* Header  
    ----------------------------------------*/ ?>
    <header>
      <a class="logo" href="/"><img src="images/logo/da_logo.png" /></a>
      <nav>
        <a href="/product">Product</a>
        <a href="/features">Features</a>
        <a href="/marketplace">Marketplace</a>
        <a href="/company">Company</a>
        <a href="/signup">Sign Up</a>
      </nav>
    </header>

    <? /* Banner
    ----------------------------------------*/ ?>
    <div class="banner">
    </div>

    <? /* Content 
    ----------------------------------------*/ ?>
    <div class="content">
      <? if($p==null){ ?>
        <h1>Home</h1>
      
      <? } else if($p=='product'){ ?>
        <h1>Product</h1>

      <? } else if($p=='features'){ ?>
        <h1>Features</h1>

      <? } else if($p=='marketplace'){ ?>
        <h1>Marketplace</h1>

      <? } else if($p=='company'){ ?>
        <h1>Company</h1>

      <? } else if($p=='signup'){ ?>
        <h1>Sign Up</h1>
      <? } ?> 

    </div>

    </div>
  </div>

  <? /* Footer 
  ----------------------------------------*/ ?>
  <div class="footer">
    <div class="inner">
      <div class="footer-left">
        <a href="/product">Product</a>
        <a href="/features">Features</a>
        <a href="/marketplace">Marketplace</a>
        <a href="/company">Company</a>
        <a href="/signup">Sign Up</a>
      </div>
      <div class="footer-right">
        <a href="/privacy">Privacy</a>
        <a href="/terms">Terms</a>
        <a href="/contact">Contact</a>
      </div>
    </div>
  </div>
</body>
</html>
