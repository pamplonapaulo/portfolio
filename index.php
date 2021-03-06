<?php 
session_start();
include_once('pages/lang.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107261432-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-107261432-1');
</script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
<!--    Thumbnail for Facebook   -->
    <link rel="canonical" href="http://www.paulopamplona.com/" /> 
    <meta name="title" content="Paulo Pamplona Developer" />
	<meta name="description" content="Paulo Pamplona is a Brazilian-Portuguese Front-End Web Developer. This website was coded from scratch using HTML5, CSS3, SCSS, JavaScript, jQuery, AJAX, and PHP." />
	<meta property="og:locale" content="en_US"/>
	<meta property="og:url" content="http://www.paulopamplona.com/index.html/" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Paulo Pamplona Developer" />
    <meta property="og:description" content="Paulo Pamplona is a Brazilian-Portuguese Front-End Web Developer. This website was coded from the scratch using HTML5, CSS3, SCSS, JavaScript, jQuery, AJAX, and PHP. Click here and check this out!" />
	<meta property="og:image" content="http://www.paulopamplona.com/assets/icons-logos/logo-thumb-200.png" />
    <meta property="og:image:alt" content="Paulo's Website" />	
	<meta property="og:site_name" content="PauloPamplona"/>
	<meta property="fb:admins" content="473940199653904" />
<!--
	<meta property="twitter:account_id" content="________" />
	<meta name="twitter:url" content="http://www.___________.com/">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="">
	<meta name="twitter:site" content="">
	<link rel=publisher href="https://plus.google.com/+paulopamplona" />
    <meta name="google-site-verification" content="" />    
-->

    <!-- CSS RESET -->
    <link rel="stylesheet" href="css/reset.css">
    
    <!-- CSS STYLE -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
   	
   	<!-- Modernizr -->
   	<script src="js/modernizr.js"></script>
    
    <!--[if lt IE 9]>
    <script src="scripts/html5shiv.min.js"></script>
    <script src="scripts/respond.js"></script>
    <![endif]-->
    
    <title>Paulo Pamplona</title>
    
<!--	<link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon" />-->
	<link rel="icon" href="assets/icons-logos/favicon.png" type="image/png" />

    <link href="assets/icons-logos/favicon.png" rel="icon" type="image/x-icon" />

</head> 
<body>
	<header class="header">
		<div id="logo"><a href="index.php"><img src="assets/icons-logos/logo-white.svg" class="shadow" alt="Logo" /></a></div>


    <!-- Language Flags -->
        <div class="idioms">
            <a href="?lang=en" class="flags langEN">&nbsp;</a>
            <a href="?lang=pt" class="flags langPT">&nbsp;</a>     
        </div>
        
    <!-- Hamburguer Icon -->
		<div class="nav-hamb" id="hamb-nav">
          <span></span>
          <span></span>
          <span></span>
		</div>

    <!-- Menu -->
		<nav class="menu"> 
		    <ul>
				<li><a href="pages/about.php"><?php echo $about; ?></a></li>
				<li href="#" class="subMenu"><a>Expertise</a>
				    <ul class="touchDropDown">
                        <li><a href="pages/front-end.php">Front-End</a></li>
                        <li><a href="pages/content.php"><?php echo $content; ?></a></li>
                        <li><a href="pages/branding.php">Branding</a></li>
				    </ul>
				</li>
				<li><a href="pages/portfolio.php"><?php echo $portfolio; ?></a></li>
				<li><a href="pages/blog.php">Blog</a></li>
				<li><a href="pages/contact.php"><?php echo $contact; ?></a></li>
            </ul>   
		</nav>

	</header>

   <section class="hero">    
       <ul class="hero-slider autoplay">
    <!-- Slide 1/5 ------------>
            <li class="selected">
                <div class="full-width img-container">
					<img src="assets/headers/slider-large-portfolio.jpg" alt="Portfolio">
				</div> 
                <div class="full-width">
                    <h2><?php echo $slide1; ?></h2>
                    <p></p>
                    <a href="pages/portfolio.php" class="btn"><?php echo $slide1_btn; ?></a>
                </div>  <!-- .full-width -->
            </li>
    <!-- Slide 2/5 ------ FRONT-END ------>
            <li>
				<div class="half-width">
					<h2><?php echo $slide2; ?></h2>
					<p></p>
<!--					<a href="#0" class="btn">Request For Proposal</a>-->
					<a href="pages/front-end.php" class="btn secondary"><?php echo $slide2_btn; ?></a>
				</div> <!-- .half-width -->

				<div class="half-width img-container">
					<img src="assets/headers/slider-large-jquery.jpg" alt="jQuery"><!-- 1200px x 800px medium and large screen only-->

				</div> <!-- .half-width.img-container -->
			</li>
    <!-- Slide 3/5 ------ INF ARCHITECTURE ------>
			<li>
				<div class="half-width img-container">
					<img src="assets/headers/slider-large-building.png" alt="tech 2">
					<!-- 1200px x 800px medium and large screen only-->
				</div> <!-- .half-width.img-container -->

				<div class="half-width">
					<h2><?php echo $slide3; ?></h2>
					<p></p>
<!--
					<a href="#0" class="btn">Buy now</a>
					<a href="#0" class="btn secondary">Learn More</a>
-->
				</div> <!-- .half-width -->
				
			</li>
    <!-- Slide 4/5 ------ BLOG ------>
            <li>
                <div class="full-width img-container">
					<img src="assets/headers/slider-large-blog.jpg" alt="Blog">
				</div> 
				<div class="full-width">
					<h2><?php echo $slide4; ?></h2>
					<p></p>
					<a href="pages/blog.php" class="btn"><?php echo $slide4_btn; ?></a>
<!--					<a href="#0" class="btn secondary">Learn More</a>-->
				</div> <!-- .full-width -->
			</li>
			
<!-- Slide 5/5 ------ CONTACT ------>
			<li>
			    <div class="full-width img-container">
					<img src="assets/headers/slider-large-contact.jpg" alt="Blog">
				</div> 
				<div class="full-width">
					<h2><?php echo $slide5; ?></h2>
					<p></p>
					<a href="pages/contact.php" class="btn"><?php echo $slide5_btn; ?></a>
<!--					<a href="#0" class="btn secondary">Email me</a>-->
				</div> <!-- .full-width -->
			</li>			
    
       </ul> <!-- END .hero-slider -->
       
		<div class="slider-nav">
			<nav>
				<span class="marker item-1"></span>
				
				<ul>
					<li class="selected"><a href="#0">1</a></li>
					<li><a href="#0">2</a></li>
					<li><a href="#0">3</a></li>
					<li><a href="#0">4</a></li>
					<li><a href="#0">5</a></li>
				</ul>
			</nav> 
		</div> <!-- END .slider-nav -->
  
   </section>  <!-- END .hero -->
   
   <main class="main-content container-lg">
       
        <p class="home-single-p"><?php echo $home_p1; ?></p>

       
   <div>
        <div class="circle">
            <div class="frame caricatura" style="background-image: url(../assets/content/paulo-pamplona.jpg);">&nbsp;</div>
        </div>	
   </div>
   
   <div class="clear"></div>
   
   </main><!-- .main-content -->

	<footer>
        <div class="container-lg">          
            <div id="logo-bottom"><img src="assets/icons-logos/logo-white.svg" alt="Logo" />
            </div>

            <p><en>Paulo Pamplona<br />Front-End Web Developer</en></p>
            <div class="social">
                <div class="linkedin">
            <!--    E.g.: LinkedIn Icon made by Freepik from www.flaticon.com -->
                    <a href="https://www.linkedin.com/in/paulopamplona" target="_blank" ><img src="assets/icons-logos/linkedin.svg" alt="LinkedIn" /></a>
                </div>

                <div class="github">
            <!--    E.g.: GitHub Icon made by Dave Gandy from www.flaticon.com -->
                    <a href="https://github.com/pamplonapaulo" target="_blank" ><img src="assets/icons-logos/github.svg" alt="GitHub" /></a>
                </div>

                <div class="codepen">
            <!--    E.g.: Codepen Icon made by Icons8 from https://icons8.com --> 
                    <a href="https://codepen.io/pamplonapaulo/pens/public/" target="_blank" ><img src="assets/icons-logos/CodePen.svg" alt="CodePen" /></a>
                </div>
            </div>

            <p><?php echo $copyRight; ?></p> 
        </div>
	</footer>
	    
<script src="js/jquery-3.1.1.min.js"></script> <!-- remove before publish and turn on the link right bellow. Here now just working offline -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

<script src="js/script.js"></script>
<script src="js/hero-slider.js"></script>
    
</body>
</html>