<section class="contact-form collapse" id="contact">
    <div class="container text-white">
        <div class="row">
            <div class="col-md-4 contact">
                <h1 class="get-in-touch text-uppercase text-green">Get In Touch</h1>
                <div class="contact-b">
                    <h4>Contact</h4>
                    <p><?php echo get_option('fmlaw_contact'); ?> </p>
                    <p><?php echo get_option('fmlaw_email'); ?> </p>
                </div>
                <div class="contact-b">
                    <h4>Location</h4>
                    <p><?php echo get_option('fmlaw_location'); ?> </p>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!--<label for="name">Name *</label><br>-->
                            <span class="name"><input type="text" name="name" value="" size="40" class=" form-control" id="name" aria-required="true" aria-invalid="false" placeholder="Your name *"></span>
                        </div>
                        <div class="form-group">
                            <!--<label for="email">Email*</label><br>-->
                            <span class="email"><input type="email" name="email" value="" size="40" class="form-control" id="email" aria-required="true" aria-invalid="false" placeholder="Your email *"></span>
                        </div>
                        <div class="form-group">
                            <!--<label for="phone">Phone</label><br>-->
                            <span class="phone"><input type="tel" name="phone" value="" size="40" class="form-control" id="phone" aria-invalid="false" placeholder="Your phone *"></span>
                        </div>
                        <p></p></div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!--<label for="industry">Industry</label><br>-->
                            <span class="industry">
                                <select name="industry" class="form-control" id="industry" aria-invalid="false">
                                    <option value="ICT">ICT</option>
                                    <option value="Administration/Office Support">Administration/Office Support</option><option value="Sales and Marketing">Sales and Marketing</option>
                                    <option value="Accounting">Accounting</option><option value="Human Resources">Human Resources</option><option value="Mining and Resources">Mining and Resources</option></select></span>
                        </div>
                        
                        <div class="form-group">
                            <!--<label for="exampleInputPassword1">Message *</label><br>-->
                            <span class="message"><textarea name="message" cols="40" rows="10" class="form-control" id="message" aria-required="true" aria-invalid="false" placeholder="comments or questions"></textarea></span>
                        </div>
                        <p class="text-white"><input type="checkbox">Subscribe to Newsletter</p>
                        <p>                 
                            <input type="submit" value="Submit" class="btn btn-lrn-more" id="submit"><img class="ajax-loader" src="http://www.limejobs.com.au/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>