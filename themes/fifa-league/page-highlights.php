<?php get_header(); ?>
<section class="highlights-page">

    <!-- <div class="fixture-menu">
        <ul>
            <li class="menu-click-a" id="selectedGroup">Group A</li>
            <li class="dash">|</li>
            <li class="menu-click-b">Group B</li>
        </ul>   
    </div> -->
 

            <?php $args = array( 'post_type' => 'post', 
                    'order' => 'ASC',
                    'cat' => '2', 
                    'cat' => '7',     
                    'posts_per_page' => '999'
                    ); $product_posts = get_posts( $args );?>
                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <div class="highlight">
                <div class="content">
                <?php the_content() ?>
                </div>
                <div class="teams">
                <p class="team-name1-fixtures">
                <img src="
                <?php echo (get_post_meta( get_the_ID(), '_fifa_t1img', true ));?>
                ">
                <?php echo (get_post_meta( get_the_ID(), '_fifa_team1', true ))?></p>
                <p class="team-name1-fixtures">
                <img src="<?php echo (get_post_meta( get_the_ID(), '_fifa_t2img', true ));?>">
                <?php echo (get_post_meta( get_the_ID(), '_fifa_team2', true ))?></p>
                </div>
                <div class="score">

                <p><?php echo (get_post_meta( get_the_ID(), '_fifa_team1Score', true ))?></p>
                <p><?php echo (get_post_meta( get_the_ID(), '_fifa_team2Score', true ))?></p>
                </div>   
            </div>
            <hr>
        <?php endforeach?> 

<?php get_footer(); ?>


