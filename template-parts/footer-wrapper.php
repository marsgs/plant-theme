<?php $sections = get_field('sections'); ?>
<?php $footer = $sections['footer']; ?>
    <div class="container">
        <div class="footer">
            <div class="footer-nav">
                <div>
                    <img src="<?php echo $footer['logo']['sizes']['large']; ?>">
                </div>
                <div>
                <?php
                    wp_nav_menu(
                        array(
                            "menu" => "nav-menu",
                            "container" => "",
                            "theme_location" => "nav-menu",
                            "items_wrap" => '<ul id="" class="nav-list">%3$s</ul>'
                        )
                    )
                ?>
                </div>
            </div>
        <div class="footer-links">
            <a href=""><img src="<?php echo $footer['facebook']['sizes']['large']; ?>"></a>
            <a href=""><img src="<?php echo $footer['instagram']['sizes']['large']; ?>"></a>
            <a href=""><img src="<?php echo $footer['amazon']['sizes']['large']; ?>"></a>
            <a href=""><img src="<?php echo $footer['pinterest']['sizes']['large']; ?>"></a>
        </div>
    </div>

    </div>