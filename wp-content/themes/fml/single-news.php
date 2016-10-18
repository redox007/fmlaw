<?php get_header(); ?>
<section class="search-details">
    <div class="container">
        <div class="row">
            <article class="col-md-12 job">
                <div class="">
                    <header>
                        <h2 class="job-title font-capa text-green text-left"><?php the_title(); ?></h2>
                    </header>
                    <div class="thumbnail">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div class="content">
                        <?php while(have_posts()):the_post(); ?>
                        <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>

<?php get_footer(); 