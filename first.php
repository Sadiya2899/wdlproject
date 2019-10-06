<?php
session_start();
include_once('connection.php');
include('userdatatovijay.php');
$query="select * from sp ";
$result=mysqli_query($con,$query);


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" type="text/css" href="style4.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>

    <style> 
            h1 { 
                color:black; 
            } 
            div.scroll { 
                margin-left:25px;
                padding:4px; 
                background-color: white; 
                width: 900px; 
                height: 500px;
                margin-top:150px;
                margin-bottom:30px;
                float:left; 
                overflow-x: hidden; 
                overflow-x: auto; 
                text-align:justify; 
            } 
            
        </style> 
    </head>
  <body>
   <div class="fixed">
      <img class="img1" src="logonew.png" />

      <div class="menu">
        <ul>

          
          
          <li class="active"><a href="logout.php"></i><b>LOGOUT</b></li>
        </ul>
      </div>

    </div>
    

    <center>
    
        
        <div class="scroll">
            <?php 
                while($rows=mysqli_fetch_assoc($result))
                {

            ?>
              <div class="border border-dark mt-3">
                <div class="row">
                  <div class="col-xl-2 offset-xl-1 mt-2 mb-2">
                    <img src="./testpicpng.png" alt="profilepic" style="height:130px; width:130px; float:left;"/>
                  </div>
                  <div class="col-xl-9 mt-3 mb-2">
                    <div class="row">
                      <p style="margin-left:100px; color:black;">NAME : <?php echo $rows['spname']; ?></p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">LOCATION : <?php echo $rows['location']; ?></p> 
                       <?php if($rows['status']=="A") { ?>
                            <!--<p style="margin-left:180px;"><button type="button" class="btn btn-success" name="reg_user" onclick="">BOOK NOW</button></p>-->
                            <form method="post" action="userdatatovijay.php">
                              <button type="submit" name="reg_user">SUBMIT</button>
                            </form>
                        <?php } else { ?>
                            <p style="margin-left:180px;"><button type="button" class="btn btn-secondary btn-lg" disabled>BUSY</button></p>
                        <?php }  ?>
                        
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">AVAILABILITY : <?php echo $rows['availability']; ?></p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">EMAIL : <?php echo $rows['email']; ?></p>
                    </div>
                    
                  </div>
                </div>
              </div>
              <?php
          }
          ?>
              <!--
              <div class="border border-dark mt-3">
                <div class="row">
                  <div class="col-xl-2 offset-xl-1 mt-2 mb-2">
                    <img src="./testpicpng.png" alt="profilepic" style="height:130px; width:130px; float:left;"/>
                  </div>
                  <div class="col-xl-9 mt-3 mb-2">
                    <div class="row">
                      <p style="margin-left:100px; color:black;">NAME :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">LOCATION :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">AVAILABILITY :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">EMAIL :</p>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="border border-dark mt-3">
                <div class="row">
                  <div class="col-xl-2 offset-xl-1 mt-2 mb-2">
                    <img src="./testpicpng.png" alt="profilepic" style="height:130px; width:130px; float:left;"/>
                  </div>
                  <div class="col-xl-9 mt-3 mb-2">
                    <div class="row">
                      <p style="margin-left:100px; color:black;">NAME :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">LOCATION :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">AVAILABILITY :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">EMAIL :</p>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="border border-dark mt-3">
                <div class="row">
                  <div class="col-xl-2 offset-xl-1 mt-2 mb-2">
                    <img src="./testpicpng.png" alt="profilepic" style="height:130px; width:130px; float:left;"/>
                  </div>
                  <div class="col-xl-9 mt-3 mb-2">
                    <div class="row">
                      <p style="margin-left:100px; color:black;">NAME :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">LOCATION :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">AVAILABILITY :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">EMAIL :</p>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="border border-dark mt-3">
                <div class="row">
                  <div class="col-xl-2 offset-xl-1 mt-2 mb-2">
                    <img src="./testpicpng.png" alt="profilepic" style="height:130px; width:130px; float:left;"/>
                  </div>
                  <div class="col-xl-9 mt-3 mb-2">
                    <div class="row">
                      <p style="margin-left:100px; color:black;">NAME :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">LOCATION :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">AVAILABILITY :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">EMAIL :</p>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="border border-dark mt-3">
                <div class="row">
                  <div class="col-xl-2 offset-xl-1 mt-2 mb-2">
                    <img src="./testpicpng.png" alt="profilepic" style="height:130px; width:130px; float:left;"/>
                  </div>
                  <div class="col-xl-9 mt-3 mb-2">
                    <div class="row">
                      <p style="margin-left:100px; color:black;">NAME :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">LOCATION :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">AVAILABILITY :</p>
                    </div>
                    <div class="row">
                      <p style="margin-left:100px; color:black;">EMAIL :</p>
                    </div>
                    
                  </div>
                </div>
              </div>
         
        </div> -->
        </center> 



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
  </body>
</html>