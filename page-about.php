<?php 
/* Template Name: about */
?>
<?php

get_header();
?>


<div class="about-page">
   

    <?php 
        $col1 = get_field('col1'); 
        $col2 = get_field('col2'); 
        $col3 = get_field('col3'); 
    ?>

    <div class="col col1"><?php echo $col1; ?></div>
    <div class="col col2"><?php echo $col2; ?></div>
    <div class="col col3"><?php echo $col3; ?></div>

<?php

get_footer();
?>