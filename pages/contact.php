<?php include('form_process.php'); ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
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

    <title>Contact</title>
    
    <link href="../assets/favicon.png" rel="icon" type="image/x-icon" />

<body>
	<header class="header">
        <div id="logo"><a href="../index.html"><img src="../assets/logo-white.svg" class="shadow" alt="Logo" /></a></div>

    <!-- Hamburguer Icon -->
        <div class="nav-hamb" id="hamb-nav">
          <span></span>
          <span></span>
          <span></span>
        </div>

    <!-- Menu -->
        <nav class="menu"> 
            <ul>
                <li><a href="about.html">About me</a></li>
                <li href="#" class="subMenu"><a>Know-how</a>
                    <ul class="touchDropDown">
                        <li><a href="front-end.html">Front-End</a></li>
                        <li><a href="journalism.html">Journalism</a></li>
                        <li><a href="branding.html">Branding</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.html">Portfolio</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="#" class="current">Contact</a></li>
            </ul>   
        </nav>
	</header>
   
    <!-- Hero Image -->
    <section id="heroImage" style="background-image: url(../assets/hero-contact.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6>What is your need?</h6>
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
       
    <h2>I'm not busy yet. Let's talk about your business?</h2>
    
    <p>You may decide email me the details of your project. But also I don't mind if you don't have too much information yet and just want to have a coffee and talk with me in person.</p>
          
    <p>Please email me at <a href="mailto:paulo@paulopamplona.com">paulo@paulopamplona.com</a> or just fill the form bellow and let me know more about you and your business, ok?</p>
    
    <p>I’m looking forward to hearing from you!</p>
    
    <!----------------   CONTACT FORM   ---------------->
    
    <div class="formWrapper">
        <h3 class="formHeader">CONTACT PAULO</h3>
        <form id="contact" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <fieldset>
                <input placeholder="NAME" type="text" name="name" value="<?= $name ?>" tabindex="1" />
                <span class="error"><?= $name_error ?></span>

                <input placeholder="EMAIL" type="text" name="email" value="<?= $email ?>" tabindex="2" />
                <span class="error"><?= $email_error ?></span>

                <input placeholder="PHONE" type="text" name="phone" value="<?= $phone ?>" tabindex="3" />
                <span class="error"><?= $phone_error ?></span>

                <input placeholder="WEBSITE" type="text" name="url" value="<?= $url ?>" tabindex="4" />
            <span class="error"><?= $url_error ?></span>
            </fieldset>

            <h4 class="formSubHeader">REQUEST TYPE</h4>
            <fieldset>
                <input type="radio" value="quotation" id="quotation" name="requestType" tabindex="5" />
                <label for="quotation">Website quotation</label>
                <input type="radio" value="comment" id="question" name="requestType" tabindex="6" />
                <label for="question">Just a question</label>

                <textarea placeholder="MESSAGE" name="message" value="<?= $message ?>" tabindex="7"></textarea>

                <input type="checkbox" value="yesSubscribe" id="subscribe" name="blogSubscription" tabindex="8"/>
                <label for="subscribe">Subscribe to my blog</label>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Send</button>
            </fieldset>
            <div class="success"><?= $success ?></div>
      </form>
    </div>    
             
	</main><!-- .main-content -->

	<footer>
        <div class="container-lg">          
            <div id="logo-bottom"><img src="../assets/logo-white.svg" alt="Logo" />
            </div>

            <p><en>Paulo Pamplona<br />Front-End Web Developer</en></p>
            <div class="social">
                <div class="linkedin">
            <!--    E.g.: LinkedIn Icon made by Freepik from www.flaticon.com -->
                    <a href="https://www.linkedin.com/in/paulopamplona" target="_blank" ><img src="../assets/linkedin.svg" alt="LinkedIn" /></a>
                </div>

                <div class="github">
            <!--    E.g.: GitHub Icon made by Dave Gandy from www.flaticon.com -->
                    <a href="https://github.com/pamplonapaulo" target="_blank" ><img src="../assets/github.svg" alt="GitHub" /></a>
                </div>

                <div class="codepen">
            <!--    E.g.: Codepen Icon made by Icons8 from https://icons8.com --> 
                    <a href="https://codepen.io/pamplonapaulo/pens/public/" target="_blank" ><img src="../assets/CodePen.svg" alt="CodePen" /></a>
                </div>
            </div>

            <p>&copy; 2017. All rights reserved.</p> 
        </div>
	</footer>
	   
<script src="../js/script.js" type="text/javascript"></script>

<script src="../js/jquery.lettering-0.6.1.min.js" type="text/javascript"></script>

<script src="../js/title-animation.js" type="text/javascript"></script>

<script src="../js/ajaxInstagram.js" type="text/javascript"></script>
            
                    
</body>