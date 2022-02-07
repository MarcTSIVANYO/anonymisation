<?php
    include("connexion_bdd.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<title>Désanonymisation des navigateurs web</title> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
  	<link rel="stylesheet" href="css/component.css">
	
    <link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/vegas.min.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- Google web font  -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	
</head>
<body id="top" data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


<!-- Preloader section -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Navigation section  -->

  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
    <?php 
    echo $_SERVER['HTTP_ACCEPT'];
?>
      <div class="navbar-header">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>
        <a href="#top" class="navbar-brand smoothScroll">TP 2 PRM 2</a>
      </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="#top" class="smoothScroll"><span>Accueil</span></a></li> 
            <li><a href="#contact" class="smoothScroll"><span>Contact</span></a></li> -->
          </ul>
       </div>

    </div>
  </div>


<!-- Home section -->

<section id="home">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">

      <div class="col-md-offset-1 col-md-10 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
        <h1 class="wow fadeInUp" data-wow-delay="0.6s">Désanonymisation des navigateurs web à l’aide d’une DMP</h1>
        <p class="wow fadeInUp" data-wow-delay="0.9s"> Ici, le mot « désanonymisation » signifie « recherche de similarité entre différents navigateurs ». On ne
travaille pas sur des données personnelles. On ne lève pas l’anonymat de l’utilisateur du navigateur. On se contente de
reconnaître un navigateur web quand il revient périodiquement sur le même site web. Ce TD respecte donc à la fois l’esprit
et la lettre du R.G.P.D. </p> 
      </div>

    </div>
  </div>
</section>


<!-- About section -->

<section id="about">
  <div class="container">
    <div class="row">
  
      <!-- team carousel -->
      <div id="team-carousel" class="owl-carousel">

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img1.jpg" class="img-responsive img-circle" alt="Mary">
          </div>
          <h2 class="heading">Mary, CEO</h2>
          <p class="description">Aliquam ac justo est. Praesent feugiat cursus est.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img2.jpg" class="img-responsive img-circle" alt="Jack">
          </div>
          <h2 class="heading">Jack, Founder</h2>
          <p class="description">Maecenas sed diam eget risus varius blandit sit non.</p>
        </div>
      </div>

      <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.8s">
        <div class="team-thumb">
          <div class="image-holder">
            <img src="images/team-img3.jpg" class="img-responsive img-circle" alt="Linda">
          </div>
          <h2 class="heading">Linda, Manager</h2>
          <p class="description">Phasellus nec ante in nunc molestie tincidunt ut eu diam.</p>
        </div>
      </div> 
      </div>
      <!-- end team carousel -->

    </div>
  </div>
</section>
  
<!-- Footer section -->

<footer>
	<div class="container">
    
		<div class="row">

			<div class="col-md-12 col-sm-12">
            
                <ul class="social-icon"> 
                    <li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="0.2s"></a></li>
                    <li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="0.4s"></a></li>
                    <li><a href="#" class="fa fa-linkedin wow fadeInUp" data-wow-delay="0.6s"></a></li>
                    <li><a href="#" class="fa fa-instagram wow fadeInUp" data-wow-delay="0.8s"></a></li>
                    <li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="1.0s"></a></li>
                </ul>

				<p class="wow fadeInUp"  data-wow-delay="1s" >Copyright &copy; 2022 Marc & Amadou Studo | 
                Design: <a href="" title="PRM 2" target="_blank">M-A Studio</a></p>
                
			</div>
			
		</div>
        
	</div>
</footer>

<!-- Back top -->
<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- Javascript  -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vegas.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<script src="js/toucheffects.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>