<?php get_header() ?>

<?php if (have_posts()): ?>
    <div class="posts-container">
        <?php while(have_posts()) : the_post() ?>
                <?php
                    get_template_part('parts/post-custom-view', 'post')
                ?>
        <?php endwhile; ?>
    </div>
<?php else: ?>
    <h1>Le voyage n'a pas encore commencé ... Veuillez patienter.</h1>
<?php endif; ?>

<?php get_footer() ?>