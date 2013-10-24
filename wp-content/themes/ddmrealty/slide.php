<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slide/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/slide/nivo-slider.css" type="text/css" media="screen" />

<div id="wrapper">
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" data-thumb="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" data-thumb="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" data-thumb="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="" data-transition="slideInLeft" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" data-thumb="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/5.jpg" data-thumb="<?php echo get_template_directory_uri(); ?>/img/5.jpg" alt="" data-transition="slideInRight" />
        </div>
    </div>

</div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slide/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider();
});
</script>