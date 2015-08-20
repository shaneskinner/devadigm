<!-- 
    Project:		  Devadigms' Main Navigation Menu
    File Name:		mainnavmenu.php
    Author:		    Devadigm | Shane Skinner
    Date Created:	05-28-2015
    Last Revised:	05-28-2015
    Note:		      This is the main Navigation Menu for www.devadigm.com
-->

<?php
   session_start();
   echo "<nav class='nav-wrap'>
            <ul class='nav'>
               <li><a href='http://www.devadigm.com' title='Home'>Home</a></li>
               <li><a href='#' title='The services Devadigm offers'>Services</a></li>
               <li><a href='#' title='View a sample of our work'>Portfolio</a></li>
               <li><a href='#' title='Check out our blog articles'>Blog</a></li>
               <li><a href='#' title='Connect with us'>Contact</a></li>
            </ul>
         </nav>";
?>