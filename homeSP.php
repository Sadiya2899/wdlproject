<?php session_start();

?>
<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <link rel="stylesheet" type="text/css" href="custom.css">

    <script type="text/javascript">
      function openNav() {
        document.getElementById("myNav").style.width = "100%";
      }

      function closeNav() {
        document.getElementById("myNav").style.width = "0%";
      }
    </script>


  </head>

  <body>
    

    <div class="fixed">
      <img class="img1" src="logonew.png" />
      <div class="topright">
      
      <p>Welcome <?php echo $_SESSION['username']; ?>!!</p>
      <!--<p><a href="logout.php" >LOGOUT</a></p>
      -->
      </div>

      <div class="menu">
        <ul>

          <li class="active"><a href="logout.php"><b>LOGOUT</b></li>
          <li class="active"><a href="contact.html"><i class="fa fa-fw fa-envelope"></i><b>CONTACT US</b></li>
          <li class="active"><a onclick="openNav()"><b>ABOUT</b></li>
          <li class="active"><a href="doorstep.html"><i class="fa fa-fw fa-home"></i><b>HOME</b></li>
        </ul>
      </div>

    </div>
    
    

    <div class="content">
        <p>Like all good things, the idea of Helpr was born out of necessity. When you need help with small but important
          household chores, isn't it practically impossible to find trusted providers, who deliver consistently
          impeccable service, on time? Yes, that happened with us too. All the time. After trying dozens of other
          services which were just glorified directories, we decided to build Helpr. Helpr is the most convenient and
          hassle free way to get your household work done. With handcrafted mobile solutions, unmatched service quality,
          and background verified providers who are always willing to lend a hand, we aim to aid in solving all your
          household problems with efficiency, ease and most importantly, a personal touch.

          As our name suggests, we are here to help. We are here to build the best on-demand services company in the
          world.
</p>
    </div>
      <footer class="flex-rw">



        <ul class="footer-list-top">
          <li>
            <br>
            <br>
            <h4 class="footer-list-header">INFO</h4>
          </li>
          <li><a href='doorstep.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">HOME</a></li>
          <li><a href='about.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">ABOUT</a></li>
          <li><a href='contact.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a>
          </li>

          <li><a href='toc.html' itemprop="significantLink" class="generic-anchor footer-list-anchor">FAQ & TERMS OF
              USE</a></li>

          <li><a href='review.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">REVIEWS</a>
          </li>
        </ul>
        <ul class="footer-list-top">
          <li>
            <br>
            <br>

            <h4 class="footer-list-header">SERVICES</h4>
          </li>


          <li><a href='elec.html' class="generic-anchor footer-list-anchor">ELECTRICIANS & PLUMBERS</a></li>
          <li><a href='pest.html' class="generic-anchor footer-list-anchor">PEST CONTROL</a></li>
          <li><a href='pack.html' class="generic-anchor footer-list-anchor">RELOCATION</a></li>
          <li><a href='repair.html' class="generic-anchor footer-list-anchor">APPLIANCES REPAIR</a></li>
          <li><a href='maid.html' class="generic-anchor footer-list-anchor" target="_blank">MAIDS</a></li>
          <li><a href='tiffin.html' class="generic-anchor footer-list-anchor" target="_blank">TIFFIN SERVICES</a></li>
          <li><a href='other.html' class="generic-anchor footer-list-anchor" target="_blank">OTHERS</a></li>
        </ul>
        <ul class="footer-list-top">
          <li id='help'>
            <br>
            <br>
            <h4 class="footer-list-header">CITIES</h4>
          </li>
          <li><a href='panvel.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">PANVEL</a></li>
          <li><a href='thane.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">THANE</a></li>
          <li><a href='nerul.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">NERUL</a></li>
          <li><a href='airoli.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">AIROLI</a></li>
          <li><a href='ghansoli.html' itemprop="significantLink" class="generic-anchor footer-list-anchor">GHANSOLI</a>
          </li>
        </ul>
        <section class="footer-social-section flex-rw">
          <br>
          <br>
          <br>
          <span class="footer-social-overlap footer-social-connect">

            CONNECT <span class="footer-social-small">with</span> US
          </span>
          <span class="footer-social-overlap footer-social-icons-wrapper">
            <a href="https://www.pinterest.com/paviliongift/" class="generic-anchor" target="_blank" title="Pinterest"
              itemprop="significantLink"><i class="fab fa-pinterest"></i></a>
            <a href="https://www.facebook.com/paviliongift" class="generic-anchor" target="_blank" title="Facebook"
              itemprop="significantLink"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter"
              itemprop="significantLink"><i class="fab fa-twitter-square"></i></a>
            <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank" title="Instagram"
              itemprop="significantLink"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCYgUODvd0qXbu_LkUWpTVEg" class="generic-anchor" target="_blank"
              title="Youtube" itemprop="significantLink"><i class="fab fa-youtube"></i></a>
            <a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank"
              title="Google Plus" itemprop="significantLink"><i class="fab fa-google-plus"></i></a>
          </span>
        </section>
        <section class="footer-bottom-section flex-rw">
          <div class="footer-bottom-wrapper">
            <i class="fa fa-copyright" role="copyright">

            </i>
            <address class="footer-address" role="company address">© Doorstep 2019 - 20..</address><span
              class="footer-bottom-rights"> - All Rights Reserved - </span>
          </div>

        </section>
      </footer>
      <script src="main.js"></script>
    </body>

</html>
