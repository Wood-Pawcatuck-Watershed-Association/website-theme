<section class="section feature-cards bg-light-green pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto card-deck">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('views/components/feature-card'); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
