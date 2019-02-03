<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <!-- First PHP command -->
            <?php bloginfo('name'); ?>
        </title>
    </head>
    <body>
        <h1>
            <!-- Notice your can use the snippets as per document WordPress Theme Snippets-->
            <?php bloginfo('name'); ?>
        </h1>
            <!-- Following 7 lines of code is used to list all the post you have defined in the admin interface -->
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </body>
</html>