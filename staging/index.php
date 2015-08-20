<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- 
         Project:		    Devadigm.com
         File Name:		 index.php
         Author:		    Shane Skinner
         Date Created:	 04-10-2015
	      Last Revised:	 05-28-2015
         Comments:       Home page for www.devadigm.com
      -->

      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="author" content="Devadigm | Shane Skinner" />
      <meta name="description" content="x" />
      <meta name="keywords" content="x" />
      <meta name="classification" content="x" />
      <meta name="owner" content="Devadigm | Shane Skinner" />
      <meta name="reply-to" content="media@devadigm.com" />

      <title>Devadigm</title>

      <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen" />
      <link href="x" rel="stylesheet" type="text/css" media="screen" />

      <!-- Mail Chimp Small Business Newsletter Signup Form Style -->
      <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
      <style type="text/css">
         #mc_embed_signup{background:inherit; font: 14px Helvetica,Arial,sans-serif; }
         /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
            We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
      </style>
   </head>

   <body>
      <header>
         <section id="connectHeader">
            <aside class="socialMedia">
               Let's Connect! 
               <a href="https://twitter.com/devadigm" alt="https://twitter.com/devadigm" target="_blank">
                  <img src="images/twitter.jfif" />
               </a>
            </aside>

            <!-- Begin MailChimp Signup Form -->
            <aside>
               <div id="mc_embed_signup">
                  <form action="//devadigm.us10.list-manage.com/subscribe/post?u=5ce39a7b56117abbd5e45bee2&amp;id=a76af143ed" 
                     method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" 
                     target="_blank" novalidate>
                     <div id="mc_embed_signup_scroll">
                        <label for="mce-EMAIL">Sign-up for our free Small Business newsletter:</label>
                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" 
                           required>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form 
                             bot signups
                        -->
                        <div style="position: absolute; left: -5000px;">
                           <input type="text" name="b_5ce39a7b56117abbd5e45bee2_a76af143ed" tabindex="-1" value="">
                        </div>
                        <!-- <div class="clear"> -->
                           <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" 
                              class="button">
                        </div>
                     </div>
                  </form>
               </div>
               <!--End mc_embed_signup-->
            </aside>
         </section>
         <article>
            <?php include "php/coverHeader.php";?>
         </article>
         <article class="navMenu">
            <?php include "php/mainnavmenu.php";?>
         </article>
      </header>
      <section>
         <h1>Welcome to Devadigm.com!</h1>
         <h2>We help small businesses and entrepreneurs focus on growing their business and customer base by managing their 
            web projects.</h2>
      </section>
      <section>
         <article>Website Development and Design</article>
         <article>Social Media and SEO</article>
         <article>Project Management</article>
      </section>

      <footer>
         <aside>Email: <br /> Phone: <br /> Hyannis, MA, USA</aside>
         <aside>Devadigm</aside>
         <aside>Proud member of the Cape Cod Young Professionals!</aside>
      </footer>
      
<!-- JavaScript -->

   </body>
</html>