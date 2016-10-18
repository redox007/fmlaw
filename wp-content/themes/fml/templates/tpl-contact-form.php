<section class="contact-form collapse" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 contact">
                <h1 class="get-in-touch text-uppercase text-green font-capa">Get In Touch</h1>
                <h4>Contact</h4>
                <p>T. <?php echo get_option('lime_contact'); ?> </p>
                <p>E. <?php echo get_option('lime_email'); ?> </p>
            </div>
            <div class="col-sm-8">
                <?php echo do_shortcode('[contact-form-7 id="116" title="Contact form"]'); ?>
            </div>
        </div>
    </div>
</section>