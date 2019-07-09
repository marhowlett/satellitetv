<?php
    /* Template Name: Testimonials */ 
    get_header();
?>
<section id="info" class="template-section">
    <div class="contenedor">

        <h2>TESTIMONIALS</h2>
        <p class="center"><strong>
            If you are a Maz Satellite subsriber, and you love our service, please let us know!
        </strong></p>
        
        <div class="grid">
            <div class="col">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials.jpg" alt="Logo">
            </div>
            <div class="col">
                <p>Please fill out this form</p>
                <p><i>Please note, we will only use yout initials on our testimonials page</i></p>
                <?php echo do_shortcode('[caldera_form id="CF5d115cfba55d9"]'); ?>
            </div>
        </div>
     
      
        
        



    </div>
</section>

<section id="testimonials">
    <div class="contenedor">
         <h3>What Our Current Clients Are Saying!</h3>
        <?php echo do_shortcode('[rev_slider alias="testimonial"]'); ?>
    </div>
</section>

<?php 
    get_footer();
?>
