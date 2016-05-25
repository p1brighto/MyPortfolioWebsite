<?php ob_start();
$tittle="Contact";
require_once('header.php');
?>

<!-- Contact -->
    <section id="contact">
        <h2><span>Get in touch</span></h2>
        <!-- Google Map -->
        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2850.1206446713395!2d-79.65609238506642!3d44.41017001117085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882aa37cc27d2589%3A0xa6e2ea7151843dec!2s253+Johnson+St%2C+Barrie%2C+ON+L4M+6S1%2C+Canada!5e0!3m2!1sen!2sbe!4v1455159661430" width="920" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <!-- End Google Map -->
        
        <!-- Contact Left Column -->
        <div class="onethird-column ">
            <h4><span>Contact details</span></h4>
            <!-- Social Icons -->
            <div class="social-bookmarks">
                <ul>
                    <li><a href="https://github.com/p1brighto" title="GitHub" target="_blank"><i class="fa fa-github fa-2x"></i></a></li>                         
                    <li><a href="https://ca.linkedin.com/pub/brighto-paul/b7/70/350" title="LinkedIn" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    <li><a href="https://www.facebook.com/p1brighto" title="Find me on Facebook" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="https://twitter.com/p1brighto" title="Follow me on Twitter" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
                    <li><a href="https://plus.google.com/+brightopaul" title="Googleplus" target="_blank"><i class="fa fa-google-plus fa-2x"></i></a></li>
                </ul>
            </div>
            <!-- End Social Icons-->
            <!-- Contact Details -->
            <ul class="contact-details">
                <li><span>Address</span>253 Johnson Street Barrie,Canada</li>
                <li><span>Email</span> 		<a href="mailto:p1brighto@gmail.com" title="Drop us an email">p1brighto@gmail.com</a></li>
                <li><span>Phone</span> 	+1 705-970-4096</li>
                <li><span>Website</span> <a href="http://www.brighto-paul.com/" title="Visit again">www.brighto-paul.com</a></li>
            </ul>
            <!--End Contact Details -->
        </div>
        <!-- End Left Column -->
        
        <!-- Right Column -->
        <div class="twothird-column">
            <h4><span>Send a message</span></h4>
            <p>For any query or additional information,please use the form below to get in touch with me.</p>
            <!-- Contact Form -->
            <form method="post" action="mail.php" name="contactform" id="contactform">

                <input type="hidden" name="contact_form" value="1" />
                <!-- Column Left -->
                <div class="column">
                    <input type="text" id="name" name="name" class="input" placeholder="Your Name"/>
                </div>
                <!-- End Column -->
                <!-- Column Right -->
                <div class="column last">
                    <input type="text" id="email" name="email" class="input" placeholder="Your Email"/>
                </div>
                <!-- End Column Right -->
                <textarea id="message" name="message" rows="6" class="textarea" placeholder="Your Message"></textarea>					
                <div class="clear"></div>
                <div class="contact_ajax_message"></div>
                <input type="submit" name="submit" value="Send your message" class="submit-button" />
            </form>
            <!-- /Contact Form -->
            </div>
        <!-- End Right Column -->
    </section>				
<!-- End Contact Tab -->

<script type="text/javascript">
    $(function() {


        // Contact Form Submission
        $("form#contactform").on('submit', function(e) {

            // stop form from submitting
            e.preventDefault();
            
            var $this = $(this);

            var $message_box = $(".contact_ajax_message");

            var form_data = $this.serialize();

            $message_box.html("Sending...");

            $.post("mail.php", form_data, function(data) {

                var r_data = JSON.parse(data);

                console.log(r_data)

                $.each(r_data, function(i, v) {

                    if(v.status == true) {

                        $message_box.html("<p class='success'>" + v.message + "</p>");

                    } else {

                        $message_box.html("<p class='error'>" + v.message + '</p>');

                    }

                });

            });

        });
        // EO ontact form submission
    });
</script>

<?php
require_once('footer.php');
ob_flush();
?>