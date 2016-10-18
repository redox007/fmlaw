<?php get_header(); ?>
<section class="search-details">
    <div class="container">
        <div class="row">
            <article class="col-md-12 job">
                <header>
                    <h2 class="job-title font-capa text-green"><?php the_title(); ?></h2>
                </header>
                <div class="content">
                    <?php while (have_posts()):the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
            </article>
        </div>
    </div>
</section>

<?php
get_footer();
