<?php ob_start();
$tittle="Brighto Paul | Problem solving,then coding | P1bright@";
require_once('header.php');
?>
<!-- Profile Tab-->
<section id="profile"> 
    <!-- Left Column-->
    <div class="onethird-column">				
        <!-- Responsive Image Slider (Flexslider)-->
        <div id="photo-slider" class="flexslider">
            <ul class="slides">
                <li><img src="img/homeslider/home-image1.jpg" alt="" /></li>
                <li><img src="img/homeslider/home-image2.jpg" alt="" />
                <li><img src="img/homeslider/home-image3.jpg" alt="" /></li><hr />
            </ul>
        </div>					
        <!-- End Slider -->
        <!-- Available Button-->
        <div class="available">
                <a href="#contactform" title="Hire Me" target="_blank" class="available-button">I am available. <strong>Hire Me!</strong></a>
        </div>
        <!-- End Available Button-->					
    </div>
    <!-- End Left Column -->
        
    <!-- Start Right Column -->
    <div class="twothird-column">					
        <h2><span>Personal Info</span></h2>
        <p>I am <a href="#" title="Brighto Paul">Brighto Paul</a> living in Barrie,ON,Canada.I am a Computer Programming Student at Georgian College. I have a great passion of
            Programming and Web development. I possess skills and knowledge in C#, C++,Express.js, Node.js,Typescript, Java, PHP,HTML/HTML5, CSS/3, SQL, basics in Angular JS, Mainframe, Troubleshooting etc.</p>
        <!-- Personal Details -->
        <ul class="details">
            <li><span>Name</span> 		<a href="#" title="Problem solving,then coding">Brighto Paul</a></li>
            <li><span>Birthday</span>May  06, 1996</li>
            <li><span>Address</span> 	253 Johnson Street Barrie, Canada</li>
            <li><span>Email</span> 		<a href="mailto:p1brighto@gmail.com" title="Get in touch">p1brighto@gmail.com</a></li>
            <li><span>Phone</span> 	+1 705-970-4096</li>
            <li><span>Nick Name</span> <a href="#" title="p1bright@">p1brighto</a></li>
        </ul>
        <!-- End Details -->
        <div class="clear"></div>
        
        <h2><span>Recent Work</span></h2>
        <p>Here are some of my recent project works.....</p>
        <!-- Responsive Recent Work Carousel -->
        <div id="carousel-slider" class="flexslider" >
            <ul class="slides">
                <li><a href="img/portfolio/portfolio1-large.PNG" class="fancybox" title="Content Manage System(CMS) Web application"><img src="img/portfolio/home-carousel1.PNG" class="grayscale" height="90" alt="" /></a></li>
                <li><a href="img/portfolio/portfolio2-large.PNG" class="fancybox" title="Content Manage System(CMS) Web application"><img src="img/portfolio/home-carousel2.PNG" class="grayscale" height="90" alt="" /></a></li>
                <li><a href="img/portfolio/portfolio3-large.PNG" class="fancybox" title="Content Manage System(CMS) Web application"><img src="img/portfolio/home-carousel3.PNG" class="grayscale" height="90" alt="" /></a></li>
                <li><a href="img/portfolio/portfolio4-large.PNG" class="fancybox" title="Athlete Web manager"><img src="img/portfolio/home-carousel4.PNG" class="grayscale" height="90" alt="" /></a></li>
                <li><a href="img/portfolio/portfolio5-large.PNG" class="fancybox" title="Athlete Web manager"><img src="img/portfolio/home-carousel5.PNG" class="grayscale" height="90" alt="" /></a></li>
                <li><a href="img/portfolio/portfolio6-large.PNG" class="fancybox" title="Content Manage System(CMS) Web application"><img src="img/portfolio/home-carousel6.PNG" class="grayscale" height="90" alt="" /></a></li>
                <li><a href="img/portfolio/portfolio7-large.PNG" class="fancybox" title="Content Manage System(CMS) Web application"><img src="img/portfolio/home-carousel7.PNG" class="grayscale" height="90" alt="" /></a></li>
            </ul>
        </div>
        <!-- End Carousel -->						
    </div>		
    <!-- End Right Column -->
</section>
<!-- End Profile Tab --> 
<?php
require_once('footer.php');
ob_flush();
?>