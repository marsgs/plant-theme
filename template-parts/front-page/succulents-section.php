<?php $sections = get_field('sections'); ?>
<?php 
    function get_offers_by_category($category)
    {
        $args = array(
            'post_type' => 'offers',
            'category_name' => $category
        );

        $query = new WP_Query($args);

        return array_reverse($query->posts);
    }
?>

<section id="succulents">
    <?php $succulents = $sections['succulents']; ?>
    <div class="container">  
        <div class="section-wrapper reverse">
        
            <?php $offers = get_offers_by_category('succulents'); ?>
            <div class="double-images">
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

            <div class="card light-green">
                <div class="card-content ">
                    <h2><?php echo $succulents['title']; ?></h2>
                    <p><?php echo $succulents['description']; ?></p>
                    <button class="btn"><?php echo $succulents['button']; ?></button>
                </div>
            </div>
        </div>
    </div>
</section>