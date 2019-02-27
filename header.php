<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>
    <div class="site-main container">
        <header class="site-header">
            <div class="site-branding">
                <?php the_custom_logo() ?>
            </div>
        </header>
        <nav class="site-navigation">
            <!-- Display main navigation menu -->
            <?php wp_nav_menu( array(
                'theme_location' => 'primary'
            ) ); ?>
        </nav>