<?php get_header(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="row">
                        <div class="col">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid img-thumbnail', 'title' => get_the_title()]); ?>
                            <br>
                            <br>
                            <?php the_title('<h1 class="title">', '</h1>'); ?>
                            <br>
                            <?php the_content(); ?>
                            <?php comments_template(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('sidebar'); ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>