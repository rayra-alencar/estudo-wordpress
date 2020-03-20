<!-- <div class="container"> -->

<div class="row col-9 flex-column">
    <?php	  
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'order' => 'ASC'					
        );

        $myQuery = new WP_Query($args);

            if($myQuery -> have_posts()) :
                while($myQuery -> have_posts()) : 
                    $myQuery -> the_post(); 
                    ?>

    <h4 class="title-post"> <?php the_title(); ?> </h2>
        <h6 class="content-post">
            <?php the_content(); ?>
        </h6>
        <h6 class="data-post text-right text-muted">
            <small> Postado em <?php the_date() ?> </small>
        </h6>
        <?php
                endwhile;
            endif;

        wp_reset_postdata();
    ?>
</div>


<!-- </div> -->