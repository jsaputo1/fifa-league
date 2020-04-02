
<section class="knockout-stage">
    <h1 id="knockout-header">Quarter-Finals</h1>


<!-- Matchup 2 G vs Paul -->

    <div class="matchup-1-knockout">
    <h1 id="game-number">Game 2</h1>

        <div class="top-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '207' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>,
                    2nd Group A</p>
            </div>
            <h2>0</h2>
            <?php endforeach?>
        </div>

        <div class="bottom-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '48' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>, 3rd Group B</p>
            </div>
            <h2>0</h2>
        </div>
        <?php endforeach?>
    </div>

    <!-- Matchup 2 Joe vs James -->


<div class="matchup-1-knockout">
    <h1 id="game-number">Game 2</h1>

        <div class="top-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '36' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>,
                    2nd Group B</p>
            </div>
            <h2>0</h2>
            <?php endforeach?>
        </div>

        <div class="bottom-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '211' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>, 3rd Group A</p>
            </div>
            <h2>0</h2>
        </div>
        <?php endforeach?>
    </div>

    <!-- Matchup 1 G vs Paul -->
    <div class="matchup-1-knockout">
    <h1 id="game-number">Game 1</h1>

        <div class="top-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '48' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>,
                3rd Group B</p>
            </div>
            <h2>0</h2>
            <?php endforeach?>
        </div>

        <div class="bottom-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '207' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>, 2nd Group A</p>
            </div>
            <h2>0</h2>
        </div>
        <?php endforeach?>
    </div>



    <!-- Matchup 1 Joe vs James -->
    <div class="matchup-1-knockout">
    <h1 id="game-number">Game 1</h1>

        <div class="top-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '211' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>,
                3rd Group A</p>
            </div>
            <h2>0</h2>
            <?php endforeach?>
        </div>

        <div class="bottom-knockout">
            <?php $args = array( 'post_type' => 'post', 'order' => 'ASC','cat' => '3', 'include' => 
                    '36' 
                    ); $product_posts = get_posts( $args );?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post );?>
            <figure><?php the_post_thumbnail() ?></figure>
            <div class="knockout-team-text">
                <h3><?php the_title()?></h3>
                <p>
                    <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?>, 2nd Group B</p>
            </div>
            <h2>0</h2>
        </div>
        <?php endforeach?>
    </div>

   
        




</section>


