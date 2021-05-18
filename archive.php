<?php get_header(); ?>
<main class="main">
    <section class="posts posts--js">

        <?php if (have_posts()) : while (have_posts()) :
                the_post(); ?>
            

                    <article class="post">
                        <div class="post__image-box">
                            <?php the_post_thumbnail('medium-large', array('class' => 'post__image')) ?>
                        </div>
                        <div class="post__content">
                            <p class="post__info">
                                <?php foreach ((get_the_category()) as $category) : ?>
                                    <a class="post__category" href="<?= get_category_link($category->cat_ID); ?>"><?= $category->category_nicename . ' '; ?></a>
                                <?php endforeach; ?> Mar 18, 2020
                            </p>
                            <h2 class="post__title"><a class="post__hiperlink" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
                            <div class="post__excerpt"><?php echo wp_trim_words(get_the_excerpt(), 24) ?></div>
                        </div>
                    </article>

    
            <?php endwhile; ?>
            
        <?php endif; ?>

    </section>
    <?php the_posts_pagination(array( 'screen_reader_text'=> ' ')); ?>
</main>

<?php get_footer(); ?>