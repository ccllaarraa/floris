<?php 
/* Template Name: about */
?>
<?php

get_header();
?>

<div class="about-page">
    <a class="about about-back"  onclick="history.back()">back</a>

    <?php 
        $bio = get_field('bio'); 
    ?>
    <div class='about-desc'><?php echo $bio; ?></div>
    <div class="about-liens">
    <?php if( have_rows('liens') ): ?>
         <?php while ( have_rows('liens') ) : the_row(); ?>
           <?php $link= get_sub_field('about_lien'); ?>
                <?php if( $link ) :
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                 ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif ?>
         <?php endwhile; ?>
    <?php endif; ?>
    </div>
    <div class="friends-liens">
        <span>Visit my friends websites</span>
        <div class="friends-list"> 
        <?php if( have_rows('friends_lien') ): ?>
            <?php while ( have_rows('friends_lien') ) : the_row(); ?>
            <?php $link= get_sub_field('lien_friend'); ?>
                    <?php if( $link ) :
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif ?>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>



</div>


<?php

get_footer();
?>