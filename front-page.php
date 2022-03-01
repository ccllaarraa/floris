<?php
get_header();
?>


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
            
            <li>
                <a  class="pan" href="#" data-big="<?php echo $image['url']; ?>" alt="<?php echo esc_attr($image['alt']); ?>" >
                     <img class="thumb-img" src="<?php echo esc_url($image['sizes']['medium']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>
              
                <p><?php the_title(); ?><?php echo esc_html($image['caption']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>





<?php endwhile; ?>
</div>



<?php
get_footer();
?>  
