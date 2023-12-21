<?php

// digitalage.com/ P / I / X / E / L
$p = isset($_GET['p']) ? $_GET['p'] : null;
$i = isset($_GET['i']) ? $_GET['i'] : null;
$x = isset($_GET['x']) ? $_GET['x'] : null;
$e = isset($_GET['e']) ? $_GET['e'] : null;
$l = isset($_GET['l']) ? $_GET['l'] : null;


$url = '/digitalage';

?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@3.0.0/dist/tailwind.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css" />   
    <script>
      window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        header.classList.toggle('sticky', window.scrollY > 30);
      });
    </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="inner-wrapper">

    <? /* Header  
    ----------------------------------------*/ ?>
    <header x-data="{ open: false }">
      <div class="inner">
        <a class="logo" href="<?=$url?>/"><img src="images/logo/da_logo.png" /></a>
        <!-- Nav but add clas when php $p is equal to url -->
        <nav :class="{'open': open}">
          <? include 'links.php' ?>
        </nav>
        <button @click="open = !open" class="hamburger">
          <svg x-show="!open" class="open" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#888" d="M3 18h18v-2H3v2zM3 13h18v-2H3v2zM3 6v2h18V6H3z"/></svg>
          <svg x-show="open" class="close" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#444" d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
        </button>
      </div>
    </header>
    <div class="content-spacer"></div>





    <? /* Banner
    ----------------------------------------*/ ?>
    <? if($p==null){ ?>
    <div class="banner">
      <h1>The Future of Social Media Starts Now</h1>
      <!-- add button -->
      <div class="btns">
        <button class="btn primary">
          Join waitlist
        </button>
        <button class="btn secondary">
          Learn More &raquo;
        </button>   
      </div>     
    </div>
    <? } ?>

      <? /* Content 
      ----------------------------------------*/ ?>
      <div class="content">
        <div class="inner">
          <? if($p==null){ ?>
            <h1>The Future of Social Media Starts Now</h1>
            <img alt="Digital painting of a group of young professionals" src="images/ai/digital_painting_a_group_of_young_professionals_dive_ad1e12a5-8c45-47d6-b665-560e376fb41f.png" />
            <p>Digitalage is pioneering a revolutionary social media platform centered around elevating creators, protecting individual rights, and cultivating authentic communities.</p>
            <p>We are reimagining social technology to put control back into the hands of users - giving you unmatched authority over your personal data and digital footprint. Our platform is designed to provide transparency, ensure content integrity, foster meaningful connections, and enable equitable compensation.</p>
            
            <h2 class="headline-border-top">The Digitalage Difference</h2>
            <img alt="Digital painting of a group of young professionals" src="images/ai/illustration_creators_conceptualizing_ideas_on_devic_76ac6f73-b25e-4826-9441-6660f8f54d06.png" />
            <p><b>User-Centric Design:</b> Our interface and algorithms are built to serve user needs - not exploit them. We enable authentic connections without manipulating recommendations or compromising privacy.</p>
            <p><b>Creator Economy:</b> We offer creators unmatched opportunities to monetize content while retaining rights. Our fair compensation models empower sustainable creator careers.</p>
            <p><b>Decentralized Architecture:</b> Our decentralized platform powered by blockchain ensures security, transparency and gives users control over their data.</p>
            <p><b>Content Authenticity:</b> We leverage advanced analytics to authenticate content, counter disinformation, and promote accurate information across the platform.</p>

            <h2 class="headline-border-top">Join the Digitalage Community</h2>
            <img alt="Digital painting of a group of young professionals" src="images/ai/network_interconnected_pieces_authentic_verified_con_ac462519-f3f7-4d2a-b3db-db60ed4fb060.png" />
            <p>We invite creators, consumers, partners and investors to help us reinvent social media technology for good. Sign up today to receive updates and early access.</p>
            <p>Call to Action Button: Join Digitalage Now</p>
            <p>By building an ethical platform focused on transparency and putting principles first, Digitalage aims to restore trust in social systems and online communities. The future starts now - join us.</p>      
          <? } else if($p=='about'){ ?>
            <?php include ('about.php'); ?>

          <? } else if($p=='contact'){ ?>
            <?php include ('contact.php'); ?>

          <? } else if($p=='jobs'){ ?>
            <?php include ('jobs.php'); ?>

          <? } else if($p=='investors'){ ?>
            <?php include ('investors.php'); ?>

          <? } else if($p=='signup'){ ?>
            <h1>Sign Up</h1>
          <? } ?> 
        </div>
      </div>


    </div><!-- end inner-wrapper -->
    </div><!-- end wrapper -->

    <? /* Footer (Ride bottom)
    ----------------------------------------*/ ?>    
    <div class="footer">
      <div class="inner">
        <div class="footer-left">
          <nav>
            <?php include 'links.php' ?>
            <a class="border-left" href="/privacy">Privacy</a>
            <a href="/terms">Terms</a>
          </nav>
        </div>
        <ul class="social-icons">
          <li><a href="https://www.facebook.com/DigitalageInc" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://www.instagram.com/godigitalage/" target="_blank"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://twitter.com/go_digitalage" target="_blank"><i class="fab fa-twitter"></i></a></li>
          <li><a href="https://www.tiktok.com/@digitalageinc" target="_blank"><i class="fab fa-tiktok"></i></a></li>
          <li><a href="https://linktr.ee/digitalageinc" target="_blank"><i class="fas fa-link"></i></a></li>
        </ul>
        <p>&copy;<?php echo date("Y"); ?> Digitalage</p>
      </div>
    </div>
  </body>
</html>
