<?php ob_start();
$tittle=Brighto Paul | Problem solving,then coding | P1bright@;
require_once('header.php');
?>

<!-- Portfolio Tab -->
    <section id="portfolio">
        <h2><span>PortFolio</span></h2>
        <p>Click on the <strong>title </strong>to go to the link of the Project or Click on the plus sign (<strong>+</strong>) to see the large image. (Sorry for the inconvenience, This tab is stil under construction.)</p>
        <!-- Portfolio Filter -->
        <ul id="portfolio-filter">
            <li><a href="#" class="current" data-filter="*">All</a></li>
            <li><a href="#" data-filter=".php">PHP/HTML</a></li>
            <li><a href="#" data-filter=".c">C#</a></li>
            <li><a href="#" data-filter=".express">Node.js & Express.js</a></li>
            <li><a href="#" data-filter=".java">Java</a></li>
            <li><a href="#" data-filter=".arduino">Arduino</a></li>
            <li><a href="#" data-filter=".video">Video-editing</a></li>
        </ul>
        <!-- End Portfolio Filter -->
        <!--Portfolio Items -->
        <ul id="portfolio-list">
            <li class="php">
                <div class="portfolio-description green">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Project2/" target="_blank">
                            <h4>Content Management System(CMS)</h4>
                            <p>This is a custom content mangement system created on PHP.</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio1-large.PNG" class="fancybox zoom-item" title="Content Management System(CMS)">View Image</a>
                </div>
                <img src="img/portfolio/portfolio1.PNG" alt="" />
            </li>
            <li class="php">
                <div class="portfolio-description green">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Project1/" target="_blank">
                            <h4>Athlete Manager </h4>
                            <p>This website manages the details of athletes created on PHP.</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio4-large.PNG" class="fancybox zoom-item" title="Athlete Manager">View Image</a>
                </div>
                <img src="img/portfolio/portfolio4.PNG" alt="" />
            </li>
            <li class="php">
                <div class="portfolio-description blue">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Sample4/" target="_blank">
                            <h4>HTML Sample-1</h4>
                            <p>This is a sample website created using CSSS and HTML (Official Website of a Typewriter company).</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio9-large.PNG" class="fancybox zoom-item" title="Royal Typewriter">View Image</a>
                </div>
                <img src="img/portfolio/portfolio9.PNG" alt="" />
            </li>	
            <li class="php">
                <div class="portfolio-description blue">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Sample3/" target="_blank">
                            <h4>HTML Sample-2</h4>
                            <p>This is a sample website created using CSSS and HTML (Website Logo of a movie).</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio8-large.PNG" class="fancybox zoom-item" title="Content Management System(CMS)">View Image</a>
                </div>
                <img src="img/portfolio/portfolio8.PNG" alt="" />
            </li>
            <li class="php">
                <div class="portfolio-description blue">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Sample2/" target="_blank">
                            <h4>HTML Sample-3</h4>
                            <p>This is a sample website created using CSSS and HTML (Drop down navigation list of a Web site).</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio11-large.PNG" class="fancybox zoom-item" title="Navigation with Lists">View Image</a>
                </div>
                <img src="img/portfolio/portfolio11.PNG" alt="" />
            </li>
            <li class="php">
                <div class="portfolio-description blue">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Sample1/" target="_blank">
                            <h4>HTML Sample-4</h4>
                            <p>This is a sample website created using CSSS and HTML (Purchase site of a Mobile company).</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio10-large.PNG" class="fancybox zoom-item" title="Content Management System(CMS)">View Image</a>
                </div>
                <img src="img/portfolio/portfolio10.PNG" alt="" />
            </li>				
            <li class="arduino">
                <div class="portfolio-description">
                    <div class="portfolio-text">
                            <h4>Arduino Project: Coffee Cool</h4>
                            <p>This a project created using an Arduino on Arduino language, which can be used to let us know when to drink the hot coffee. </p>
                    </div>
                    <a href="img/portfolio/portfolioAr2-large.jpg" class="fancybox zoom-item" title="Coffee Cool">View Image / Video</a>
                </div>
                <img src="img/portfolio/portfolioAr2.jpg" alt="" />
            </li>
            <li class="arduino">
                <div class="portfolio-description">
                    <div class="portfolio-text">
                        <a href="http://www.brighto-paul.com/Projects/Arduino/Project.ino" target="_blank">
                            <h4>Arduino Project: Coffee Cool</h4>
                            <p>Code of the Program</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolioAr1-large.jpg" class="fancybox zoom-item" title="Portfolio Item Title">View Image / Video</a>
                </div>
                <img src="img/portfolio/portfolioAr1.jpg" alt="" />
            </li>
            <li class="video">
                <div class="portfolio-description red">
                    <div class="portfolio-text">
                        <a href="https://www.youtube.com/watch?v=zL8CyjCtE_c" target="_blank">
                            <h4>Video Sample</h4>
                            <p>A sample video created using nero multimedia suite</p>
                        </a>
                    </div>
                    <a href="img/portfolio/portfolio12-large.PNG" class="fancybox zoom-item" title="Rare Butterfly in India">View Image / Video</a>
                </div>
                <img src="img/portfolio/portfolio12.PNG" alt="" />
            </li>
            <li class="java">
                <div class="portfolio-description yellow">
                    <div class="portfolio-text">
                        <h4>Palindrome searching</h4>
                        <p></p>
                    </div>
                    <a href="img/portfolio/portfolio7-large.jpg" class="fancybox zoom-item" title="Portfolio Item Title">View Image / Video</a>
                </div>
                <img src="img/portfolio/portfolio7.jpg" alt="" />
            </li>
        </ul>
        <!-- End Portfolio Items -->
        
        <!-- End Portfolio Items -->
    </section>
<!-- End Portfolio -->
<?php
require_once('footer.php');
ob_flush();
?>