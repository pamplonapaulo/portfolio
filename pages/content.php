<?php 
session_start();
include_once('lang.php');

define("TITLE", $content);

include('includes/head.php');

?>
   
   
   
   
   
   
   
   
   
 

    <!-- Menu -->
        <nav class="menu"> 
            <ul>
                <li><a href="about.php" ><?php echo $about; ?></a></li>
                <li href="#" class="subMenu"><a class="current">Expertise</a>
                    <ul class="touchDropDown">
                        <li><a href="front-end.php">Front-End</a></li>
                        <li><a class="subCurrent"><?php echo $content; ?></a></li>
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
    <section id="heroImage" style="background-image: url(../assets/headers/hero-journalism.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6>My journalistic hat</h6>
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
       
    <h2>Moving foward doesn't mean quitting knowledge!</h2>
    
    <p>Despite being anxious to become a master in programming languages, I couldn't say that I regret my Journalism college at all. The impact of its lessons will always reverberate in my personality and work.</p>
    
    <p>With this background, I can provide some extra advices to small business that are starting their digital presence and can't afford expensive agencies. And you cannot forget that your website is going to be your main public media, the public hub of all information under your control. Be aware about what you should or shouldn't include there.</p>    
           
	</main><!-- .main-content -->


	
	
	
	
	
	
	
	

	<?php include('includes/footer.php');