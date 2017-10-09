<?php 
session_start();
include_once('lang.php');

define("TITLE", "Front-end");

include('includes/head.php');

?>
   
   
   
   
   
   
   
   
   
 

    <!-- Menu -->
        <nav class="menu"> 
            <ul>
                <li><a href="about.php" ><?php echo $about; ?></a></li>
                <li href="#" class="subMenu"><a class="current">Expertise</a>
                    <ul class="touchDropDown">
                        <li><a class="subCurrent">Front-End</a></li>
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
    <section id="heroImage" style="background-image: url(../assets/headers/hero-front-end.jpg);">
        <article class="headerSection">
            <div class="headerWrap">
               <div class="main-content container-lg">
                   <h6><?php echo $frontend_hero; ?></h6>
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
       
    <h2><?php echo $frontend_h2; ?></h2>
    
    <p><?php echo $frontend_p1; ?></p>
    
    <p><?php echo $frontend_p2; ?></p>
        
        <div class="skillsWrapper">        
            <p>HTML5</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 65%;">65%</div>
            </div>

            <p>CSS3</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 60%;">60%</div>
            </div>

            <p>SCSS</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 50%;">50%</div>
            </div>

            <p>jQuery</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 30%;">30%</div>
            </div>

            <p>JavaScript</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 25%;">25%</div>
            </div>

            <p>Content Management System</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 30%;">30%</div>
            </div>

            <p>Bootstrap</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 20%;">20%</div>
            </div>

            <p>Application Programming Interface</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 9%;">5%</div>
            </div>

            <p>JSON</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 9%;">5%</div>
            </div>

            <p>Asynchronous Javascript and XML</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 9%;">5%</div>
            </div>

            <p>PHP</p>
            <div class="skillContainer">
              <div class="skills fill-skill" style="width: 9%; ">5%</div>
            </div>        
        </div>
        
        <div class="circle">
            <div class="textWrap">
                <h2 class="roundedText">
                    <span class="letter01">#</span>
                    <span class="letter02">d</span>
                    <span class="letter03">a</span>
                    <span class="letter04">i</span>
                    <span class="letter05">l</span>
                    <span class="letter06">y</span>
                    <span class="letter07">C</span>
                    <span class="letter08">S</span>
                    <span class="letter09">S</span>
                    <span class="letter10">i</span>
                    <span class="letter11">m</span>
                    <span class="letter12">a</span>
                    <span class="letter13">g</span>
                    <span class="letter14">e</span>
                    <span class="letter15">s</span>
                </h2>
            </div>

            <div class="frame" style="background-image: url(../assets/content/css-polar-bear.jpg);">&nbsp;</div>
        </div>

        <div class="clear">&nbsp;</div>
       
        <br/>
        
        <div class="noClear">&nbsp;</div>
        
        <p><?php echo $frontend_p3; ?></p>

        <div class="parallax" style="background-image:url('../assets/content/certification.jpg')"></div>

        <p><?php echo $frontend_p4; ?></p>

        <p><?php echo $frontend_p5; ?></p>
	</main><!-- .main-content -->


	
	
	
	
	
	
	
	

	<?php include('includes/footer.php');