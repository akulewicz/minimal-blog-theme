<?php get_header(); ?>
<main class="main">
    <section class="posts posts--js">

        <?php if (have_posts()) : $postCount = 0; while (have_posts()) : $postCount++; the_post(); ?>
            <?php if ($postCount == 1): ?>
                <article class="post--first">
                    <div class="post__image-box">
                        <?php the_post_thumbnail('medium-large', array( 'class' => 'post__image' )) ?>
                    </div>
                    <div class="post__content--first">
                        <p class="post__info"><a class="post__category--first" href="#">Kategoria</a> Mar 18, 2020</p>
                        <h2 class="post__title--first"><?php the_title() ?></h2>
                        <div class="post__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30) ?></div>
                    </div>
                </article>

            <?php else: ?>

                <article class="post">
                    <div class="post__image-box">
                        <?php the_post_thumbnail('medium-large', array( 'class' => 'post__image' )) ?>
                    </div>
                    <div class="post__content">
                        <p class="post__info"><a class="post__category" href="#">Kategoria</a> Mar 18, 2020</p>
                        <h2 class="post__title"><?php the_title() ?></h2>
                        <div class="post__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 30) ?></div>
                    </div>
                </article>

            <?php endif; ?>    
            <?php endwhile; ?>
        <?php endif; ?>

    </section>
</main>

<?php get_footer(); ?>