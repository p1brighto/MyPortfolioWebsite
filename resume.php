<?php ob_start();
$tittle="Resume";
require_once('header.php');
?>

<!-- Start Resume Tab -->
    <section id="resume">
        <!-- Left Column-->
        <div class="half-column">
        <!-- Experience-->
            <h2><span>RELATED COMPUTER EXPERIENCE</span></h2>					
            <div class="job-position">
                <h4>Technical Support</h4>
            </div>
            <div class="job-details">
                <div class="curly-brace">{</div>
                <h4> <span>(2015- present)</span></h4>
                <p>Working as a Techinical support for the cable company Cogeco at Transcom Worldwide (North America) Inc.</p>	
            </div>
            <div class="clear"></div>
            <div class="job-position">
                <h4>Computer Maintenance Support</h4>
            </div>
            <div class="job-details">
                <div class="curly-brace">{</div>
                <h4> <span>(2011- 2014)</span></h4>
                <p>Provided computer software installation, hardware installation, maintenance and support for neighbors, relatives and friends, as requested.</p>	
            </div>
            <!-- End Experience-->				
            <div class="clear"></div>	
            <!-- Sliding Quotations -->
            <h2><span>Famous Quotations </span></h2>	
            <div id="testimonials" class="flexslider">
                <ul class="slides">
                    <li>
                        <p>One of my most productive days was throwing away 1000 lines of code.</p><!-- Quotations -->
                        <span class="commentor"><strong>Ken Thompson</strong>- Computer Designer</span><!-- Quotations Author -->
                    </li>
                    <li>
                        <p>Deleted code is debugged code. </p>
                        <span class="commentor"><strong>Jeff Sickel</strong> - Computer Programmer</span>
                    </li>
                    <li>
                        <p>Controlling complexity is the essence of computer programming.</p>
                        <span class="commentor"><strong>Brian Kernighan</strong> - Computer Scientist</span>
                    </li>
                    <li>
                        <p>Move fast and break things. Unless you are breaking stuff, you are not moving fast enough.</p>
                        <span class="commentor"><strong>Mark Zuckerberg</strong> - Facebook Founder</span>
                    </li>
                </ul>
            </div>
            <!-- End Quotations -->
        </div>
        <!-- End Left Column -->
            
        <!-- Right Column -->
        <div class="half-column last">
            <!-- Education-->			
            <h2><span>Education</span></h2>
            <div class="education-details">
                <div class="curly-brace-right">}</div>
                <h4>ST Joseph's HSS Kerela, India <span>(2012 - 2014)</span></h4>
                <p>Got the basics and foundational knowledge of Computer Programming(C++,SQL).</p>	
            </div>							
            <div class="education-level">
                <h4>Higher-Secondary Education in Computer Science</h4>
            </div>
            <div class="clear"></div>
            <!-- End Education-->
            <h4>See my complete resume here: <a href="Projects/Professional_Resume.pdf" target="_blank">Resume</a></h4></br>
            <h2><span>Skill set</span></h2>
            <h7><span>Academic basis</span></h7>
            <!-- Skills Graph-->
            <table id="skill-rating" class="graphtable">
            <tr>
                <td>
                    <div class="graph"></div>   
                </td>
                <td class="values">
                    <label class="java">Java<span class="java">90</span></label>
                    <label class="c">C#<span class="c">70</span></label>
                    <label class="mean">MEAN stack<span class="mean">80</span></label>
                    <label class="php">PHP<span class="php">85</span></label>							
                    <label class="html">HTML/CSS<span class="html">80</span></label>
                    <label class="mysql">MySql<span class="mysql">95</span></label>
                </td>
            </tr>
            </table>
            <!-- End Skills Graph-->
            <div class="clear"></div>
        </div>
        <!-- End Right Column -->
    </section>
<!-- End Resume Tab --> 
<?php
require_once('footer.php');
ob_flush();
?>