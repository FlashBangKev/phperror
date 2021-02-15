<?php get_header();?>
  <main>
            <article>
                <!-- Hero Section Start -->
                <section class="hero-blog container">
                    <div class="content-wrapper">
                        <h1 class="title">Blog Articles & News</h1>
                        <p class="message">Read the latest web design & development articles</p>
    
                    </div>
                </section>
                </div>
                <!-- Hero Section End -->

                <!-- archive cards -->
                <section class="archive container-archive">
                    <div class="archive-container">
                        <?php get_template_part('includes/section','archive');?>
                    </div>
                </section>

    </article>
    </main>
    <?php get_footer();?>