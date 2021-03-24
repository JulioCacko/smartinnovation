<section class="uk-section uk-article">
    <div class="uk-container uk-container-small">
        <h2 class="uk-text-bold uk-h1 uk-margin-remove-adjacent uk-margin-remove-top"><?php the_title(); ?></h2>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="uk-container uk-container-small">
                    <?php the_content(); ?>
                </div>
        <?php endwhile;
        else : endif; ?>

    </div>
</section>