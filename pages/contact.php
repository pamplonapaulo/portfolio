<?php 
session_start();
include_once('lang.php');
?>

<?php include('form_process.php'); ?>

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

    <!--[if lt IE 9]>
    <script src="scripts/html5shiv.min.js"></script>
    <script src="scripts/respond.js"></script>
    <![endif]-->
    
    <script src="../js/jquery-3.1.1.min.js"></script>
<!-- remove before publish and turn on the link right bellow. Here now just working offline -->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

    <title><?php echo $contact; ?></title>
    
    <link href="../assets/icons-logos/favicon.png" rel="icon" type="image/x-icon" />

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
                <li><a href="portfolio.php"><?php echo $portfolio; ?></a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a class="current"><?php echo $contact; ?></a></li>
            </ul>   
        </nav>
	</header>
   
    <!-- Hero Image -->
    <section id="heroImage" style="background-image: url(../assets/headers/hero-contact.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6><?php echo $contact_hero; ?></h6>
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
       
    <h2><?php echo $contact_h2_1; ?></h2>
              
    <p><?php echo $contact_p1; ?></p>
    
    <p><?php echo $contact_p2; ?></p>
    
    <!----------------   CONTACT FORM   ---------------->
    
    <div class="formWrapper">
        <h3 class="formHeader"></h3>
        <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <div class="fail">
                <?= $name_error ?>
                <br />
                <?= $email_error ?>
                <br />
                <?= $phone_error ?>
                <br />
                <?= $url_error ?>            
            </div>
            <div class="success"><?= $success ?></div>
            <fieldset>
                <input placeholder="<?php echo $contact_name; ?>" type="text" name="name" value="<?= $name ?>" tabindex="1" />
                <span class="error"><?= $name_error ?></span>

                <input placeholder="EMAIL" type="text" name="email" value="<?= $email ?>" tabindex="2" />
                <span class="error"><?= $email_error ?></span>

                <input placeholder="<?php echo $contact_phone; ?>" type="text" name="phone" value="<?= $phone ?>" tabindex="3" />
                <span class="error"><?= $phone_error ?></span>

                <input placeholder="WEBSITE" type="text" name="url" value="<?= $url ?>" tabindex="4" />
                <span class="error"><?= $url_error ?></span>
            </fieldset>

            <h4 class="formSubHeader"><?php echo $contact_request; ?></h4>
            <fieldset>
                <input type="radio" value="quotation" id="quotation" name="requestType" tabindex="5" />
                <label for="quotation"><?php echo $contact_quotation; ?></label>
                <input type="radio" value="comment" id="question" name="requestType" tabindex="6" />
                <label for="question"><?php echo $contact_question; ?></label>

                <textarea placeholder="<?php echo $contact_message; ?>" name="message" value="<?= $message ?>" tabindex="7"></textarea>

                <input type="checkbox" value="yesSubscribe" id="subscribe" name="blogSubscription" tabindex="8"/>
                <label for="subscribe"><?php echo $contact_subscribe; ?></label>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"><?php echo $contact_submit; ?></button>
            </fieldset>
      </form>
    </div>    
             
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

            <p><?php echo $copyRight; ?></p> 
        </div>
	</footer>
	   
<script src="../js/script.js" type="text/javascript"></script>

<script src="../js/jquery.lettering-0.6.1.min.js" type="text/javascript"></script>

<script src="../js/title-animation.js" type="text/javascript"></script>

<script src="../js/ajaxInstagram.js" type="text/javascript"></script>
            
                    
</body>
