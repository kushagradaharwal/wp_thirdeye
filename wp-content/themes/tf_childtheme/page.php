<?php 
get_header();
?>

<div class="container">
<div class="col-sm-12">
<?php the_title();?>
<?php the_content(); ?>

<?php comments_template( '', true ); ?>

</div>
</div>
</div>
<?php
get_footer();
?>
