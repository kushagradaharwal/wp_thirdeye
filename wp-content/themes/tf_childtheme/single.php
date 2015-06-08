<?php 
get_header();
?>

<div class="container">
<div class="col-sm-12">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


<?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id(the_Id()) );
?>
<img src="<?php  echo  $feat_image ?>" />
<?php the_content(); ?>

<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>


<?php endwhile; ?> 
</div>
</div>
</div>
<?php
get_footer();
?>
