<?php 
session_start();
include_once('lang.php');

define("TITLE", $about);

include('includes/head.php');

?>
   
   
   
   
   
   
   
   
   
   
    <!-- Menu -->
        <nav class="menu"> 
            <ul>
                <li><a class="current"><?php echo $about; ?></a></li>
                <li href="#" class="subMenu"><a>Expertise</a>
                    <ul class="touchDropDown">
                        <li><a href="front-end.php">Front-End</a></li>
                        <li><a href="content.php"><?php echo $content; ?></a></li>
                        <li><a href="branding.php">Branding</a></li>
                    </ul>
                </li>
                <li><a href="portfolio.php"><?php echo $portfolio; ?></a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="contact.php"><?php echo $contact; ?></a></li>
            </ul>   
        </nav>
	</header>
   
    <!-- Hero Image -->
    <section id="heroImage" style="background-image: url(../assets/headers/hero-about.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6><?php echo $about_hero; ?></h6>
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
       
    <h2><?php echo $about_h2_1; ?></h2>
    
    <p><?php echo $about_p1; ?></p>
    
    <p><?php echo $about_p2; ?></p>
    
    <h2><?php echo $about_h2_2; ?></h2>
    
    <p><?php echo $about_p3; ?></p>
    
    <p><?php echo $about_p4; ?></p>
    
    <div class="parallax" style="background-image:url('../assets/content/front-end-school.jpg')"></div>

    <h2><?php echo $about_h2_3; ?></h2>
            
    <p><?php echo $about_p5; ?></p>
           
    <section>
                
        <article style="text-align: center;">
            <ul id="instaFeed"></ul>
        </article>
    </section>

	</main><!-- .main-content -->
	
	
	
	
	
	
	
	
	<script src="../js/ajaxInstagram.js" type="text/javascript"></script>

	

	<?php include('includes/footer.php');


