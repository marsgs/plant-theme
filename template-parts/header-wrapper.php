<?php $sections = get_field('sections'); ?>
<section class="header-wrapper">
    <?php $header = $sections['header']; ?>
    <div class="container">
        <div class="header-image" style="background: #f8f4ed url(<?php echo $header['image']['url']; ?>) no-repeat  bottom right;">
            <div class="header-card">
                <div class="header-content">
                    <h1><?php echo $header['title']; ?></h1>
                    <p><?php echo $header['description']; ?></p>
                    <button class="btn"><?php echo $header['button']; ?></button>
                </div>
            </div>
        </div>
    </div>
</section>


