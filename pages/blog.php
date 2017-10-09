<?php 
session_start();
include_once('lang.php');
define("TITLE", "Blog");

include('includes/head.php');

?>
   
   
   
   
   
   
   
   
   
 

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
                <li><a class="current">Blog</a></li>
                <li><a href="contact.php"><?php echo $contact; ?></a></li>
            </ul>   
        </nav>
	</header>
   
    <!-- Hero Image -->
    <section id="heroImage" style="background-image: url(../assets/headers/hero-blog.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6><?php echo $blog_hero; ?></h6>
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
                  <img src="../assets/blog/outBox-380x380.jpg" alt="placeholder"/>
                   <figcaption class="captionTop">Placeholder</figcaption>
                   <figcaption class="captionBottom">10.03.2017</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="2">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/blog/monk-380x380.jpg" alt="placeholder"/>
                   <figcaption class="captionTop">Placeholder</figcaption>
                   <figcaption class="captionBottom">10.03.2017</figcaption>
                </figure>
           </div>           
           <div class="galleryItem" name="3">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/blog/lisbon-380x380.jpg" alt="placeholder"/>
                   <figcaption class="captionTop">Placeholder</figcaption>
                   <figcaption class="captionBottom">10.03.2017</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="4">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/blog/rio-380x380.jpg" alt="placeholder"/>
                   <figcaption class="captionTop">Placeholder</figcaption>
                   <figcaption class="captionBottom">10.03.2017</figcaption>
                </figure>
           </div>
           <div class="galleryItem" name="5">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/blog/fanfarrada-380x380.jpg" alt="placeholder"/>
                   <figcaption class="captionTop">Placeholder</figcaption>
                   <figcaption class="captionBottom">10.03.2017</figcaption>
                </figure>
           </div>           
           <div class="galleryItem" name="6">
                <figure>
                 <div class="galleryItem-overlay"></div>
                  <img src="../assets/blog/hands-380x380.jpg" alt="placeholder"/>
                   <figcaption class="captionTop">Placeholder</figcaption>
                   <figcaption class="captionBottom">10.03.2017</figcaption>
                </figure>
           </div>           
           
       </section>

	</main><!-- .main-content -->


	
	
	
	
	
	
	
	

	<?php include('includes/footer.php');