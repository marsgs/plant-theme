<?php $sections = get_field('sections'); ?>

<section id="about">
    <?php $about = $sections['about']; ?>
    <div class="container">
        <div class="section-wrapper">
            <div class="card">
                <div class="card-content about-width">
                    <h2><?php echo $about['title']; ?></h2>
                    <p><?php echo $about['description']; ?></p>
                    <button class="btn"><?php echo $about['button']; ?></button>
                </div>
            </div>
            <div class="image">
                <div class="image-wrapper the-point">
                    <img src="<?php echo $about['image']['sizes']['large']; ?>">
                </div>
            </div>
        </div>
    </div>
</section>