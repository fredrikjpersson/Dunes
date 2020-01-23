<!DOCTYPE html>
<html lang="en">



<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://kit.fontawesome.com/034536f173.js" crossorigin="anonymous"></script>

<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      document.getElementById("navbar").style.top = "0";
    } else {
      document.getElementById("navbar").style.top = "-50px";
    }
    prevScrollpos = currentScrollPos;
  }
  </script>
</head>



<body data-spy="scroll" data-target=".navbar"  class="bg-dark">


  <!-- NavBar -->



  <!--MainRoadStart-->
  <a href="#">
  <div id="logoBack" class="container logoBack col-md-12 col-sm-12" style="height: 100vh !important;">
  </div>
</a>
  <div class="container bob" style="border-top-left-radius: 25px; border-top-right-radius: 25px;">
  <!-- navbar start -->
    <nav id="#" class="navbar headFootShadow bob navbar-expand-lg navve sticky-top navbar-dark bg-dark" style=" background-color: dimgrey;">
    
      <button class="navbar-toggler p-2" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse pb-3" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#logoBack">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#trailer" >Trailer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myTeam1">Team</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item download"href="DunesPictures.rar">Presskit Download</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
        <a class="navbar-brand dunesBrand" href="#">Dunes Of Demise!!</a>
      </div>
    </nav>
    
  <!--navbar end-  -->
    <div class="row" style="background-image: url(pic/single-road.png); background-repeat: round;">
    
      <div class="col-lg-6 col-md-12 col-sm-12 columnItem">
      <div id="trailer" class=" bg-transparent" style="height: 20vh;"></div>
        <div id="trailer" class="container boxShad" style="background-color:black;height: 40vh; width: 87%; border: 15px blured black; border-radius: 15px;"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/4cf6DTOnzSQ?controls=1&autoplay=1&mute=1"
          allow="accelerometer;" frameborder="0" allowfullscreen></iframe>
        </div>
      
        <div id="#" class="container boxShad rndc bg-dark my-5" style="width: 87%; border: 15px  black; border-radius: 1em;">
         <div style="color: white;"><?php require 'journey.html' ?></div>
          </div>
          <div class="container boxShad bg-dark boxShad p-2 my-5" style="width: 87%; border: 15px  black; border-radius: 15px;">
          <div id="news1" class="container boxShad bg-dark my-5 "  style="width: 87%; border: 15px black; border-radius: 15px;">
            <?php require 'new1.html' ?>
          </div>
          <div id="news1" class="container boxShad bg-dark my-5" style="width: 87%; border: 15px blured black; border-radius: 15px;">
            <?php require 'new2.html' ?>
          </div>
          <div id="news1" class="container boxShad bg-dark my-5" style="width: 87%; border: 15px blured black; border-radius: 15px;">
            <?php require 'new3.html' ?>
          </div>
          </div>
      </div>
      <!--MidLane-->
     
      <!-- right lane-->
       <div class="col-lg-6 col-md-12 col-sm-12 columnItem">
        <div id="#" class="container boxShad bg-dark my-5" style="width: 87%; border: 15px blured black; border-radius: 15px;">
         <div style="color: white;"><?php require 'raincoat.html' ?></div>
         <div class="container boxShad rndc bg-dark m-auto" style="width: 100%; border: 15px  black; border-radius: 15px;"><?php require 'about.html' ?></div>
          </div>
          <div class="container boxShad bg-dark my-2" style="width: 87%; border-radius: 15px;">
          <div class="container boxShad" style="width: 100%; border-radius: 25px !important;">
            <?php require 'twitterFeed.html' ?>
          </div>
          <div class="container rndc boxShad my-5" style=" height: 40vh; background-image: url(Resources/Screen01.jpg); background-repeat: round;">
            
          </div>
          <div class="container rndc boxShan my-5" style="width: 100%; border: 15px blured black;">
          <div id="" class="combats columnItem" style="border: black sollid 3px; height: 30vh; border-radius: 10px !important;"></div>
          </div>
          </div>
      </div>
<!-- 
      <div class="col-lg-6 col-md-12 col-sm-12 columnItem">
        <div id=" " class="about bg-tr" style="border: black sollid 3px; height: 30vh; border-radius: 10px;">
          <div class="  aboutText m-auto" style="height: auto; width: 95%;"><h2 style="color: rgb(255, 255, 255);"><h1 style="color:cornsilk;">About The Game!</h1><br\></h2><h2 style="text-align: left;  color: rgb(255, 255, 255);">A single player post apocalyptic road trip adventure with party and resource management.
            Dunes of Demise will force the player to make difficult moral choices throughout the game.
            The game features a turn based vehicular combat system where the player is in control of each car & passenger in their caravan.
            Dunes of Demise will be short in game time, but high in replayability.
            </h2></div>
        </div>
        <div id="" class="combats columnItem" style="border: black sollid 3px; height: 30vh; border-radius: 10px !important;"></div>
        <div class="bg-transparent" style="width: auto; height: 50vh;" ></div>
        <div id="" class="twitters columnItem " style="border: black sollid 3px; border-radius: 10px !important;">
          <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/RaincoatDev?ref_src=twsrc%5Etfw">Tweets by RaincoatDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
        <div class="bg-transparent" style="width: auto; height: 50vh;" ></div>

      </div> -->

        </div>
      </div>
      <div class="outRoad outRoad-right  ">
      </div>
    </div>
  </div>

  <div class="modal fade" id="videoModal">
  <div><?php require 'new1.html' ?></div>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        
      </div>
    </div>
  </div>
    <!-- Team Cards-->

  
<!-- Fotter  -->
<footer class="page-footer headFootShadow footer pt-2 bg-dark car-background">

<!-- Footer Links -->
<div class="container text-center">

    <!-- Grid row -->
    <div class="row">
      <div class="col-sm-4  mb-md-0 mb-3 p-3">

        <h5 class="text-uppercase footer-text-style">Links</h5>

        <ul class="list-unstyled ">
            <li>
              <a href="https://www.youtube.com/channel/UCGyybXeVNfWgMVVv7I__9jg" target="_blank"><i class="fab fa-youtube-square footer-text-style" "></i></a>
            </li>



        </ul>
      </div>
        <div class="col-sm-4">
            <h5 class="text-uppercase footer-text-style">Content</h5>
            <ul class="list-unstyled">
              <li>
                <a href class="footer-text-style-2">About</a>
              </li>
              <li>
                <a href class="footer-text-style-2">Portfolio</a>
              </li>
              <li>
                <a href="mailto:mrlindfors@gmail.com?" class="footer-text-style-2">Contact</a>
              </li>

              </li>
            </ul>
        </div>

        <div class="col-sm-4  mb-md-0 mb-3 p-3">
            <h5 class="text-uppercase footer-text-style">Links</h5>

            <ul class="list-unstyled">
                <li>
                  <a href="https://twitter.com/RaincoatDev" target="_blank"><i class="fab fa-twitter-square footer-text-style" "></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
</footer>

</body>

</html>
