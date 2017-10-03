<?php 
session_start();
include_once('lang.php');
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
	<meta name="description" content="Paulo Pamplona is a Brazilian-Portuguese Front-End Web Developer. This website was coded from the scratch using HTML5, CSS3, SCSS, JavaScript, jQuery, AJAX, and PHP." />
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
   
    <!-- CSS reset -->
	<link rel="stylesheet" href="../css/reset.css">
      
    <!-- Main CSS style -->
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    
    <!-- Modernizr Script -->
   	<script src="../js/modernizr.js"></script>
   	<!-- I should study Modernizr and remove it's own SHIV content, so I could move it's embeded script to the bottom of my page, since I already have my own SHIV here coming next -->
   	
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="scripts/html5shiv.min.js"></script>
    <script src="scripts/respond.js"></script>
    <![endif]-->
    
    <script src="../js/jquery-3.1.1.min.js"></script>
<!-- remove before publish and turn on the link right bellow. Here now just working offline -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

    <title>Portifolio</title>
    
    <link href="../assets/icons-logos/favicon.png" rel="icon" type="image/x-icon" />

</head> 
<body>
	<header class="header">
        <div id="logo">
            <a href="../index.php">
                <img src="../assets/icons-logos/logo-white.svg" class="shadow" alt="Logo" />
            </a>
        </div>

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
                <li><a href="about.php" ><?php echo $about; ?></a></li>
                <li href="#" class="subMenu"><a>Expertise</a>
                    <ul class="touchDropDown">
                        <li><a href="front-end.php">Front-End</a></li>
                        <li><a href="content.php"><?php echo $content; ?></a></li>
                        <li><a href="branding.php">Branding</a></li>
                    </ul>
                </li>
                <li><a class="current"><?php echo $portfolio; ?></a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php"><?php echo $contact; ?></a></li>
            </ul>   
        </nav>
	</header>
   
    <!-- Hero Image -->
    <section id="heroImage" style="background-image: url(../assets/headers/m_portfolio.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6>Portfolio</h6>
               </div>
            </div>
        </article>
    </section>
   
   <main id="first" class="main-content container-lg">
      
    <!-- Scroll down arrow icon -->
       <a href="#first">
        <div class="arrow-wrapper">
           <span class="arrow top left"></span>
           <span class="arrow top right"></span>
           <span class="arrow middle left"></span>
           <span class="arrow middle right"></span>
           <span class="arrow bottom left"></span>
           <span class="arrow bottom right"></span>
        </div>
       </a>
              
    
        <section class="gallery">
        
        <!-------------- Images must be 380x380px------------->
        <div id="overlay"></div>
           <div class="galleryItem" name="1">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/ppWebsite-380x380.jpg" alt="paulopamplona.com"/>
                   <figcaption class="captionTop">PauloPamplona.com</figcaption>
                   <figcaption class="captionBottom">[ Sep. /2017 ]</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="2">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/plumage-380x380.png" alt="Apple Watch"/>
                  <figcaption class="captionTop">Plumage CSS</figcaption>
                   <figcaption class="captionBottom">[ Jun. / 2017 ]</figcaption>
                </figure>
           </div>           
           <div class="galleryItem" name="3">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/theBlend-380x380.png" alt="Apple Watch"/>
                   <figcaption class="captionTop">The Blend</figcaption>
                   <figcaption class="captionBottom">[ Jan. / 2017 ]</figcaption>
                </figure>
           </div>
           
           
           
           
<!--           <div class="galleryItem" name="4">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/appleWatch-640x640.jpg" alt="Apple Watch"/>
                   <figcaption class="captionTop">Caption Top 4</figcaption>
                   <figcaption class="captionBottom">Caption Bottom 4</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="5">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/appleWatch-640x640.jpg" alt="Apple Watch"/>
                   <figcaption class="captionTop">Caption Top 5</figcaption>
                   <figcaption class="captionBottom">Caption Bottom 5</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="6">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/appleWatch-640x640.jpg" alt="Apple Watch"/>
                   <figcaption class="captionTop">Caption Top 6</figcaption>
                   <figcaption class="captionBottom">Caption Bottom 6</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="7">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/appleWatch-640x640.jpg" alt="Apple Watch"/>
                   <figcaption class="captionTop">Caption Top 7</figcaption>
                   <figcaption class="captionBottom">Caption Bottom 7</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="8">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/appleWatch-640x640.jpg" alt="Apple Watch"/>
                   <figcaption class="captionTop">Caption Top 8</figcaption>
                   <figcaption class="captionBottom">Caption Bottom 8</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="9">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/portfolio/appleWatch-640x640.jpg" alt="Apple Watch"/>
                   <figcaption class="captionTop">Caption Top 9</figcaption>
                   <figcaption class="captionBottom">Caption Bottom 9</figcaption>
                </figure>
           </div>
           -->
  
        </section>

        <article id="galleryItemContent1">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/ppWebsite-print.jpg" alt="EMPITY 2" />
                <figcaption>PauloPamplona.com</figcaption>
            </figure>
            <p>My portifolio's website is the first built after my certification program. It was totally coded from scratch with HTML5, CSS3, SCSS, javascript, jQuery, AJAX, and PHP. Most of the features here were presented to me during the course in San Diego. So this job was a great way to review some of this and try to make it better.</p>
            
            <p>I'll probably keep improving it while I keep learning more cool stuff. My next step is to replicate it's content to Portuguese, which will be done by some PHP code.</p>
<!--            <a href="http" target="_blank">Visit</a>-->
        </article>
        
        <article id="galleryItemContent2">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/plumage-print.png" alt="Plumage Website" />
                <figcaption>Plumage CSS Framework</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Program from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http://plumagecss.com/" target="_blank">Visit</a>
        </article>        
        <article id="galleryItemContent3">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/theBlend-print.jpg" alt="The Blend Website" />
                <figcaption>The Blend Superfood</figcaption>
            </figure>
            <p>It's the final project of the 1st semester at my certification program. Built with two classmates (Jane La Motte and Sam Lee), using HTML5, CSS3, and jQuery. Our code was shared among us during the development by Cloud9. It's a review of the original website from a real company.</p>
            
            <p>We started by the diagnosis, reviewing the content and rethinking the information architecture using the "card sorting" method. We also build some prototypes using Axure and Adobe Photoshop.</p>
            
            <a href="https://pamplonapaulo.github.io/TheBlend/" target="_blank">Visit</a>
        </article>
        
        <!--
        <article id="galleryItemContent4">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/appleWatch-print.jpg" alt="EMPITY" />
                <figcaption>EMPITY 4</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Programm from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http" target="_blank">Visit</a>
        </article>        
        <article id="galleryItemContent5">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/appleWatch-print.jpg" alt="EMPITY" />
                <figcaption>EMPITY 5</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Programm from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http" target="_blank">Visit</a>
        </article>
        <article id="galleryItemContent6">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/appleWatch-print.jpg" alt="EMPITY" />
                <figcaption>EMPITY 6</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Programm from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http" target="_blank">Visit</a>
        </article>
        <article id="galleryItemContent7">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/appleWatch-print.jpg" alt="EMPITY" />
                <figcaption>EMPITY 7</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Programm from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http" target="_blank">Visit</a>
        </article>
        <article id="galleryItemContent8">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/appleWatch-print.jpg" alt="EMPITY" />
                <figcaption>EMPITY 8</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Programm from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http" target="_blank">Visit</a>
        </article>        
        <article id="galleryItemContent9">
            <a class="close" id="close">x</a>
            <figure>
                <img src="../assets/portfolio/appleWatch-print.jpg" alt="EMPITY" />
                <figcaption>EMPITY 9</figcaption>
            </figure>
            <p>Plumage is a CSS framework built by me and three classmates as our final project at the Front-End Web Development Certification Programm from San Diego Continuing Education, in California. The project took about three weeks and we got 279 points in a total of 300.</p>
            
            <p>My special thanks to Alex Garcia, Natalia Lipovskaia, and Tracey Olson, a lovable and very professional team who taught me that we can do beuatiful things if we have passion and discipline together.</p>
            <a href="http" target="_blank">Visit</a>
        </article>
        -->        

	</main><!-- .main-content -->

	<footer>
        <div class="container-lg">          
            <div id="logo-bottom"><img src="../assets/icons-logos/logo-white.svg" alt="Logo" />
            </div>

            <p><en>Paulo Pamplona<br />Front-End Web Developer</en></p>
            <div class="social">
                <div class="linkedin">
            <!--    E.g.: LinkedIn Icon made by Freepik from www.flaticon.com -->
                    <a href="https://www.linkedin.com/in/paulopamplona" target="_blank" ><img src="../assets/icons-logos/linkedin.svg" alt="LinkedIn" /></a>
                </div>

                <div class="github">
            <!--    E.g.: GitHub Icon made by Dave Gandy from www.flaticon.com -->
                    <a href="https://github.com/pamplonapaulo" target="_blank" ><img src="../assets/icons-logos/github.svg" alt="GitHub" /></a>
                </div>

                <div class="codepen">
            <!--    E.g.: Codepen Icon made by Icons8 from https://icons8.com --> 
                    <a href="https://codepen.io/pamplonapaulo/pens/public/" target="_blank" ><img src="../assets/icons-logos/CodePen.svg" alt="CodePen" /></a>
                </div>
            </div>

            <p>&copy; 2017. All rights reserved.</p> 
        </div>
	</footer>
	   
<script src="../js/script.js" type="text/javascript"></script>

<script src="../js/jquery.lettering-0.6.1.min.js" type="text/javascript"></script>

<script src="../js/title-animation.js" type="text/javascript"></script>       
                    
</body>
</html>