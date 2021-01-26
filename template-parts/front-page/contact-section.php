<?php $sections = get_field('sections'); ?>
<section id="contact">
    <?php $contact = $sections['contact']; ?>
    <div class="container">
        <div class="contact">
            <div class="inline">
                <h2><?php echo $contact['title']; ?></h2>
                <button class="btn"><?php echo $contact['button']; ?></button>
            </div>  
        </div>
    </div>
</section>