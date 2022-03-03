<?php
get_header();
?>

<div class="front-desktop" >
     <div class="projects">
    <?php 

    $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 100 ) ); 
    while ( $loop->have_posts() ) : $loop->the_post();

    ?>


    <?php 
    $images = get_field('gallery');
    if( $images ): ?>
        <ul class="project">
            <?php foreach( $images as $image ): ?>
                
                <li >
                    <a  class="pan" href="#" data-big="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                        <img class="thumb-img child " src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                
                    <p class="caption"><?php the_title(); ?> 
                    <?php  if($image['caption']) : ?>
                        ~
                    <?php echo esc_html($image['caption']); ?>
                    <?php endif; ?> </p>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>





    <?php endwhile; ?>
    </div>

</div>

<!-- mobile template -->
 


<div class="front-mobile" >
    <a href="./about"><img class="about" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/about.svg" alt="about"></a>
        <div class="projects">
        <?php 

        $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 100 ) ); 
        while ( $loop->have_posts() ) : $loop->the_post();

        ?>


        <?php 
        $images = get_field('gallery');
        if( $images ): ?>
            <ul class="project">
                <?php foreach( $images as $image ): ?>
                    
                    <li >
                      
                            <img class="thumb-img  " src="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                      
                    
                        <p class="caption"><?php the_title(); ?> 
                        <?php  if($image['caption']) : ?>
                            —
                        <?php echo esc_html($image['caption']); ?>
                        <?php endif; ?> </p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>





    <?php endwhile; ?>
    </div>



</div>



<?php
get_footer();
?>  
