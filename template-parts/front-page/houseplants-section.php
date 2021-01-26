<?php $sections = get_field('sections'); ?>
<section id="houseplants">
    <?php $houseplants = $sections['houseplants']; ?>
    <div class="container">  
        <div class="section-wrapper grid-switch">
            <div class="card">
                <div class="card-content">
                    <h2><?php echo $houseplants['title']; ?></h2>
                    <p><?php echo $houseplants['description']; ?></p>
                    <button class="btn"><?php echo $houseplants['button']; ?></button>
                </div>
            </div>

            <?php $offers = get_offers_by_category('houseplants'); ?>
            <div class="double-images house">
                <?php foreach($offers as $offer): ?>
                <div>
                    <div class="image-wrapper">
                    <img src=<?php echo wp_get_attachment_image_src( $offer->image, 'large' )[0] ?>>
                    </div>
                    <div class="slider-nav plant-name">
                        <p><?php echo $offer->name; ?></p>
                        <p><?php echo $offer->price; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>