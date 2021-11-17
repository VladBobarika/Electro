<?php
    $menu = [
        ['name' => 'Home', 'link' => '/'],
        ['name' => 'Hot Deals', 'link' => '/catalog'],
        ['name' => 'Categories', 'link' => '/catalog'],
        ['name' => 'Laptops', 'link' => '/catalog'],
        ['name' => 'Smartphones', 'link' => '/catalog'],
        ['name' => 'Cameras', 'link' => '/catalog'],
        ['name' => 'Accessories', 'link' => '/catalog']
    ];
?>



<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <?php foreach ($menu as $item): ?>
                    <li class="<?=$item['link']?>"><a href="#"><?=$item['name']?></a></li>
                <?php endforeach; ?>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->