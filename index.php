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
    <header x-data="{ open: false }" :class="{'open': open}">
      <a class="logo" href="/"><img src="images/logo/da_logo.png" /></a>
      <nav>
        <a href="/product">Product</a>
        <a href="/features">Features</a>
        <a href="/marketplace">Marketplace</a>
        <a href="/company">Company</a>
        <a href="/signup">Sign Up</a>
      </nav>
      <button @click="open = !open" class="hamburger">
        <svg x-show="!open" class="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M3 18h18v-2H3v2zM3 13h18v-2H3v2zM3 6v2h18V6H3z"/></svg>
        <svg x-show="open" class="close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#fff" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
      </button>
    </header>

    <? /* Banner
    ----------------------------------------*/ ?>
    <div class="banner">
    </div>

    <? /* Content 
    ----------------------------------------*/ ?>
    <div class="content">
      <? if($p==null){ ?>
        <h1>The Future of Social Media Starts Now</h1>
        <p>Digitalage is pioneering a revolutionary social media platform centered around elevating creators, protecting individual rights, and cultivating authentic communities.</p>
        <p>We are reimagining social technology to put control back into the hands of users - giving you unmatched authority over your personal data and digital footprint. Our platform is designed to provide transparency, ensure content integrity, foster meaningful connections, and enable equitable compensation.</p>
        <h2>The Digitalage Difference:</h2>
<p>User-Centric Design: Our interface and algorithms are built to serve user needs - not exploit them. We enable authentic connections without manipulating recommendations or compromising privacy.</p>
<p>Creator Economy: We offer creators unmatched opportunities to monetize content while retaining rights. Our fair compensation models empower sustainable creator careers.</p>
<p>Decentralized Architecture: Our decentralized platform powered by blockchain ensures security, transparency and gives users control over their data.</p>
<p>Content Authenticity: We leverage advanced analytics to authenticate content, counter disinformation, and promote accurate information across the platform.</p>
<h2>Join the Digitalage Community:</h2>
<p>We invite creators, consumers, partners and investors to help us reinvent social media technology for good. Sign up today to receive updates and early access.</p>
<p>Call to Action Button: Join Digitalage Now</p>
<p>By building an ethical platform focused on transparency and putting principles first, Digitalage aims to restore trust in social systems and online communities. The future starts now - join us.</p>
      <!-- Content in <p> tags -->

      
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
