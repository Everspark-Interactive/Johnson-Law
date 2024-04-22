<?php if(get_the_post_thumbnail_url()){?>
 <style>.bannerimg {
    margin-bottom: -8px;
}</style>
    <?php if((is_page(array(422)) || $post->post_parent==422) && wp_is_mobile()){?>
       <style>.bannerimg{height:auto !important;}</style>
      <div class="bannerimg"><img src="https://johnsonfirmla.com/wp-content/uploads/2021/06/family-mobile-min.jpg" style="width: 100%;" alt="<?php the_title();?>" /></div>
    <?php } elseif(is_page(array(237,773,2549,2908,3042)) && wp_is_mobile()){?>
    <style>.bannerimg{height:auto !important;}</style>
      <div class="bannerimg"><img src="https://johnsonfirmla.com/wp-content/uploads/2021/06/mobile-general-min.jpg" style="width: 100%;" alt="<?php the_title();?>" /></div>
    <?php }elseif((is_page(array(105)) || $post->post_parent==105 || $post->post_parent==3149) && wp_is_mobile()){?> 
    <style>.bannerimg{height:auto !important;}</style>
      <div class="bannerimg"><img src="https://johnsonfirmla.com/wp-content/uploads/2021/06/personal-injury-mobile-1.jpg" style="width: 100%;" alt="<?php the_title();?>" /></div>
    <?php }elseif((is_page(array(419)) || $post->post_parent==419) && wp_is_mobile()){?> 
    <style>.bannerimg{height:auto !important;}</style>
      <div class="bannerimg"><img src="https://johnsonfirmla.com/wp-content/uploads/2021/06/criminal-law-mobile-min.jpg" style="width: 100%;" alt="<?php the_title();?>" /></div>
    <?php } else{?>
  <div class="bannerimg"><img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%;" alt="<?php the_title();?>" /></div>
<?php } }?>