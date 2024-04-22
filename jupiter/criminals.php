<?php
/*
Template Name: Criminal News
*/


get_header(); ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


<?php get_template_part('page','bannersec');  


mk_build_main_wrapper( mk_get_view('singular', 'wp-page', true) );

 ?>
<div class="container">

  <div class="row">
  	<?php $args = array(
        'post_type' => 'news',
        'order' => 'DESC',
        'posts_per_page' => -1,
    );
    $the_query = new WP_Query( $args );
    ?> 
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-md-3">
    	<div class="outer">
      <div class="out"><div class="news-image"><img class="img-responsive" src="<?php echo get_the_post_thumbnail_url(); ?>"></div></div>
      <div class="name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    </div>
</div>
    <?php endwhile; endif; ?>
    <?php wp_reset_query(); ?>
   <div id="padding-5" class="mk-padding-divider   clearfix"></div>
   <div id="padding-5" class="mk-padding-divider   clearfix"></div>
  </div>
</div>


<?php get_footer();
