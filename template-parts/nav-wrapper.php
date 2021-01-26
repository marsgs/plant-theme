<?php $sections = get_field('sections'); ?>
<nav>
    <?php $nav = $sections['nav']; ?>
    <div class="container">
        <div class="nav-wrapper">
            <div>
                <img src="<?php echo $nav['logo']['sizes']['large']; ?>">
            </div>
            <div>
                <?php
                    wp_nav_menu(
                        array(
                            "menu" => "nav-menu",
                            "theme_location" => "nav-menu",
                            "items_wrap" => '<ul id="" class="nav-list">%3$s</ul>'
                        )
                    )
                ?>
            </div>
        </div>
    </div>
</nav>