<?php get_header(); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"/>
<style type="text/css">
  .panel-group .panel {
    margin-bottom: 0 !important;
    border-radius: 0px !important;
    border: none !important;
    padding-top: 10px !important;
    padding-bottom: 10px !important;
}
#nm {
      font-size: 18px !important;
    color: #A13A44 !important;
    font-weight: 300 !important;
    text-transform: capitalize !important; margin-top: 30px;
}
.master-holder h4 {
    text-transform: none !important;
    color: #195775 !important;
    font-weight: 900 !important;
    font-size: 17px !important;
}
.panel-default>.panel-heading+.panel-collapse>.panel-body {
    border-top-color: #fff !important;
}
.panel {
    -webkit-box-shadow: 0 1px 0px #a13a44 !important;
}
.panel-default>.panel-heading {
    color: #333 !important;
    background-color: #fff !important;
    border-radius: 0 !important;
}
  .mk-single-employee.layout-style1 .employees-featured-image img, .mk-single-employee.layout-style3 .employees-featured-image img {
    border-radius: 0% !important;
}
.contactinfo {
    padding-top: 50px;
    padding-bottom: 25px;
}
.info-left {
    color: #195775;
    font-weight: 900;
    font-size: 17px;
    margin-right: 20px;
}
.mytitle h2, .mytitle h1{    font-size: 38px;
    color: #195775 !important;
    font-weight: 900 !important; text-transform: capitalize !important;}
.mytitle span{
    font-size: 31px;}
    .mytitle h3 {
    font-size: 24px !important;
    color: #A13A44 !important;
    font-weight: normal !important;
}
.mytitle h3 {
    font-size: 23px;
    color: #A13A44;
    font-weight: 500;
    text-transform: capitalize;
}
#thetitle { font-weight: 450 !important; }
.mytitle {
    padding: 30px 0px 20px 0px;
    border-bottom: 2px solid #dddddd;
}
.video-thumbb1:before {
    content: '';
    background: url(/wp-content/uploads/2022/05/hero-video-thumbnail-bg.jpg);
    position: absolute;
    width: 470px;
    height: 250px;
    margin-top: 27px;
    z-index: -1;
    margin-left: 15px;
    
}
.bgimg1:before {
    content: '';
    background: url(/wp-content/uploads/2022/08/bg-profile.png);
    position: absolute;
/*     width: 275px; */
	width: 100%;
    height: 275px;
    margin-top: 25px;
    z-index: -1;
    margin-left: 0px;
    
}

video.banner-video {
  
    float: left !important;
    box-shadow: rgb(0 0 0 / 25%) 0px 54px 55px, rgb(0 0 0 / 12%) 0px -12px 30px, rgb(0 0 0 / 12%) 0px 4px 6px, rgb(0 0 0 / 17%) 0px 12px 13px, rgb(0 0 0 / 9%) 0px -3px 5px;
    width: 470px;
    height: auto;
}
.txt-right:before {
    content: url(/wp-content/uploads/2022/05/quote-erin.png);
    position: relative;
}
.txt-right p {
    color: #195775;
    font-weight: 600;
    font-size: 17px;
    margin-right: 20px;
    font-style: italic;
}
.txt-right h4 {
    font-size: 18px;
    color: #A13A44;
    font-weight: 300;
    text-transform: capitalize;
}
.main-content {
    padding-top: 60px;
}
.videos {
    padding-top: 30px;
}
.displays {margin-top: 12px !important;
    display: flex;}
@media only screen and (min-width: 768px) {

  .single-employee-sidebar {position: absolute;}
  .vids-left {
    float: left;
    width: 62%;
}
.txt-right {
   float: right;
    width: 36%;
}

}
@media only screen and (max-width: 768px) {
.txt-right {
    display: block;
    margin-top: 50px;
}
.contactinfo {
   
    padding-left: 22px;
}
}
#theme-page .theme-page-wrapper .theme-content {
    padding: 0px 0px!important;
    background: url(/wp-content/uploads/2022/08/bg-pilar.jpg) no-repeat top;
        background-size: contain; z-index: 0; position: relative;
}



 .panel-heading {
  position: relative;
}
.panel-heading[data-toggle="collapse"]:after {
  font-family: 'Glyphicons Halflings';
  content: "\e258" !important; /* "play" icon */
  position: absolute;
  color: #A13A44;
  font-size: 18px;
  line-height: 22px;
  right: 20px;
  top: calc(50% - 10px);

  /* rotate "play" icon from > (right arrow) to down arrow */
  -webkit-transform: rotate(-90deg);
  -moz-transform:    rotate(-90deg);
  -ms-transform:     rotate(-90deg);
  -o-transform:      rotate(-90deg);
  transform:         rotate(-90deg);
}
.panel-heading[data-toggle="collapse"].collapsed:after {
  /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
  -webkit-transform: rotate(90deg);
  -moz-transform:    rotate(90deg);
  -ms-transform:     rotate(90deg);
  -o-transform:      rotate(90deg);
  transform:         rotate(90deg);
}

.addres {
    font-size: 18px;
    color: #353535;
    line-height: 1.66em;
}



.panel-heading {
  position: relative;
}
.panel-heading[data-toggle="collapse"]:after {
  font-family: 'Glyphicons Halflings';
  content: "\e258" !important; /* "play" icon */
  position: absolute;
  color: #A13A44 !important;
  font-size: 18px;
  line-height: 22px;
  right: 20px;
  top: calc(50% - 10px);

  /* rotate "play" icon from > (right arrow) to down arrow */
  -webkit-transform: rotate(-90deg);
  -moz-transform:    rotate(-90deg);
  -ms-transform:     rotate(-90deg);
  -o-transform:      rotate(-90deg);
  transform:         rotate(-90deg);
}
.panel-heading[data-toggle="collapse"].collapsed:after {
  /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
  -webkit-transform: rotate(90deg);
  -moz-transform:    rotate(90deg);
  -ms-transform:     rotate(90deg);
  -o-transform:      rotate(90deg);
  transform:         rotate(90deg);
}

.theme-content1 {
    margin-bottom: 82px;
    margin-top: 150px;
}

.con {
    text-transform: none !important;
    color: #195775 !important;
    font-weight: 700 !important;
    font-size: 25px !important;
    padding-bottom: 25px;
}
input#gform_submit_button_8 {
    width: 100%;
    font-weight: 700;     float: none;
}
.theme-content1 {
   
    background: url(/wp-content/uploads/2022/08/formbg.png) no-repeat top;
    background-size: initial;
    z-index: 0;
    position: relative;
}
textarea#input_8_4 {
    background-color: #fafafa;
}
.forms {
    background-color: #fff;
    padding: 25px 25px;
    -webkit-box-shadow: 0 5px 10px #c9c5c5 !important;
}
.employees-featured-image.bgimg1 img {
    width: 100%;
}
</style>
<div id="theme-page" class="master-holder  clearfix" itemscope="itemscope" itemtype="https://schema.org/Blog">
            
            <div class="master-holder-bg-holder">
                <div id="theme-page-bg" class="master-holder-bg js-el"></div>
            </div>

            <div class="mk-main-wrapper-holder">

                <div id="mk-page-id-2998" class="theme-page-wrapper mk-single-employee layout-style1 full-layout  ">
                      <div class="theme-content " itemprop="mainEntityOfPage">
                            


          <div class="mk-grid">
        <div class="single-employee-sidebar a_display-inline-block a_float-left">
          <div class="employees-featured-image bgimg1">
          <img src="<?php the_field('profile_picture'); ?>">

        </div>
        <div class="contactinfo">
          <span class="employees_meta new-meta displays">
          <span class="info-left">Contact: </span>
          <span><a href="mailto:<?php the_field('email'); ?>"><img src="/wp-content/uploads/2022/08/mails1.png"></a></span>
          <span><a href="tel:<?php the_field('mobile'); ?>"><img src="/wp-content/uploads/2022/08/calls1.png"></a></span>
        </span>
        <div class="clearboth"></div>
        <span class="employees_meta new-meta displays">
          <span class="info-left">Location: </span>
          <span class="addres"><?php the_field('address'); ?></span>
        </span>
        </div>

        <!-- Accordion START -->
      <div class="panel-group" id="accordion">
        <?php if (have_rows('accordians')) :
                    while (have_rows('accordians')) :
                      the_row(); ?>
        <div class="panel panel-default">
          <div class="panel-heading accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" data-target="#<?php the_sub_field('ids'); ?>">
            <h4 class="panel-title"><?php the_sub_field('title'); ?></h4>

          </div>
          <div id="<?php the_sub_field('ids'); ?>" class="panel-collapse collapse">
            <div class="panel-body">
              <p><?php the_sub_field('content'); ?></p>
            </div>
          </div>
        </div>
        <?php endwhile; endif;?> 
      </div>
       
      <!-- Accordion END -->

        
        
                </div>
        

        <div class="single-employee-content pillar">
          <div class="mytitle">
			  <h1><?php the_title(); ?></h1>
<!--             <h2>Jonathan <span id="thetitle">Johnson</span></h2> -->
          <h3><?php the_field('designation'); ?></h3>
          </div>
			<?php  if( get_field('video_link') ) { ?>
          <div class="videos">
            <div class="vids-left">
              <div id="text-block-10" class="mk-text-block   video-thumbb1">
              <p> <video class="banner-video" 	<?php  if( get_field('video_poster_image') ) {  ?> poster="<?php the_field('video_poster_image'); ?>" <?php } ?> controls="controls" width="300" height="150"><source src="<?php the_field('video_link'); ?>" type="video/mp4"></video></p>
              <div class="clearboth"></div>
            </div>
            </div>
            <div class="txt-right">
              <div>
				 <?php  if( get_field('quote_video_text') ) {  ?> 
				  <p><?php the_field('quote_video_text'); ?></p>
				  <?php } else { ?>
                <p>Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.</p>
				  <?php } ?>
                <h4 id="nm"><?php the_title(); ?></h4>
              </div>
            </div>
          </div>
			<?php } ?>
          <div class="clearboth"></div>
          <div class="main-content">
            <?php the_content(); ?>

          </div>
        </div>
        </div>

         <div class="theme-content1">
        <div class="mk-grid">
        <div class="single-employee-sidebar a_display-inline-block a_float-left">
          <div class="employees-featured-image">
          <img src="/wp-content/uploads/2022/05/johson-logo.png">

        </div>
        </div>
        

        <div class="single-employee-content">
          <div class="forms">
            <h2 class="con">Schedule a Consultation</h2>
            <?php echo do_shortcode('[gravityform id="8" title="false" description="false" ajax="true"]'); ?>
          </div>
        </div>
        </div>
      </div>

    
                        
                      <div class="clearboth"></div>
                                            </div>
                                <div class="clearboth"></div>
                
                </div>
            </div>


                
        </div>
<?php get_footer(); ?>