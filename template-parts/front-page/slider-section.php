<?php $sections = get_field('sections'); ?>
<section id="slideshow">
<?php $slider = $sections['slider']; ?>
    <div class="container">
        <div class="slick">
            <div><img src="<?php echo $slider['image1']['sizes']['large']; ?>"></div>
            <div><img src="<?php echo $slider['image2']['sizes']['large']; ?>"></div>
            <div><img src="<?php echo $slider['image3']['sizes']['large']; ?>"></div>
        </div>
        <div class="slider-nav">
            <div class="left-arrow arrow"><img src="<?php echo $slider['arrow-left']['sizes']['large']; ?>"></div>
            <div class="new-dot"></div>
            <div class="right-arrow arrow"><img src="<?php echo $slider['arrow-right']['sizes']['large']; ?>"></div>
        </div>
    </div>
</section>