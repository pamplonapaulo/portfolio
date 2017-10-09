<?php 
session_start();
include_once('lang.php');
include('form_process.php');
define("TITLE", $contact);

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


	
	
	
	
	
	
	
	

	<?php include('includes/footer.php');