<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <div class="blog-card">
            <img src="./img/test1.jpg" alt="" class="blog-thumbnail">
            <div class="cardtext-wrapper">
                <h3 class="blogtitle">
                    <?php the_title(); ?>
                </h3>
                <p class="blog-preview">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>">
                </p>

            </div>
        </div>

<?php
    endwhile;
else :
    _e('Sorry, no posts matched your criteria.', 'textdomain');
endif;

get_footer();

?>
