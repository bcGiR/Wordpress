<?php get_header()?>
<?php get_sidebar('left')?>
<div id="buffer"></div>
<div id="content">

    <?php $query = new WP_query( 'category_name=hiking' ); ?>
    <?php if($query->have_posts()) : while($query->have_posts()): $query->the_post()?>

        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
        <?php the_date('F j, Y', '<h3>', '</h3>');?>
        <?php the_content(__('Continue Reading'));?>

    <?php endwhile;?>
    <?php endif;?>

<?php get_footer()?>
