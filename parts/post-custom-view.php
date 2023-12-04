<?php
$post = get_post();
?>
<div class="post-container">
    <h2 class="post-title">
        <?php
            echo get_the_title()
        ?>
    </h2>
    <div class="post-content">
        <?php
            echo get_the_content()
        ?>
    </div>
</div>