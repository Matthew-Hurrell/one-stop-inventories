<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>

<header class="bg-grey-50 w-full px-10 py-3 shadow-md">
    <div class="flex justify-between items-center">
        <a href="<?php echo site_url(); ?>" aria-label="Homepage">
            <img class="h-12" src="<?php echo get_theme_file_uri('/assets/images/one-stop-inventories-logo-cropped.png') ?>" alt="One Stop Inventories Logo">
        </a>
        <?php wp_nav_menu('Main Site Navigation'); ?>
    </div>
</header>