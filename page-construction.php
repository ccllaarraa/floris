<?php 
/* Template Name: under construction */
?>
<?php

get_header();
?>


<div>
        <?php 
            $loop = new WP_Query( array( 'post_type' => 'homepage', 'posts_per_page' => 100 ) ); 
            while ( $loop->have_posts() ) : $loop->the_post();
            ?>

        <?php
        $color = get_field('couleur_de_fond'); ?>
        <div class="background" style="background-color:<?php echo $color ?>;"></div>
        <div class="png-img">
            <?php
                $image = get_field('png'); ?>
            <img  src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
                
        </div>         
        <?php endwhile; ?>


        <header class="auri-menu" id="header" >
		
               
           
            </header>

            <span style="font-size: 30px;">*new website coming soon</span> 

</div>







<?php
get_footer();
?>  
