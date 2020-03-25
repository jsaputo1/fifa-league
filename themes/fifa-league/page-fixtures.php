<?php get_header(); ?>


<section class="fixture-page">

    <div class="fixture-menu">
        <ul>
            <li class="menu-click-a" id="selectedGroup">Group A</li>
            <li class="dash">|</li>
            <li class="menu-click-b">Group B</li>
        </ul>   
    </div>
    <!-- Group A Fixtures -->
    <div class="group-a-fixtures">

        <?php $args = array( 'post_type' => 'post', 
        'order' => 'ASC',
        'cat' => '2', 
        'cat' => '7', 
        'cat' => '8',
        'cat' => '12',

        'posts_per_page' => '999'
        ); $product_posts = get_posts( $args );?>
        
        <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
        
        <!-- Variables -->

        <?php $team1 = (get_post_meta( get_the_ID(), '_fifa_team1', true )) ?>
        <?php $team2 = (get_post_meta( get_the_ID(), '_fifa_team2', true )) ?>
        <?php $team1img = (get_post_meta( get_the_ID(), '_fifa_t1img', true ));?>
        <?php $team2img = (get_post_meta( get_the_ID(), '_fifa_t2img', true ));?>
        <?php $team1Score = (get_post_meta( get_the_ID(), '_fifa_team1Score', true ))?>
        <?php $team2Score = (get_post_meta( get_the_ID(), '_fifa_team2Score', true ))?>

        <div class="matchup">
            <div class="teams">       
                <?php if 
                    ($team1Score < $team2Score) : 
                    echo "<p class='team-name1-fixtures' id='loser'><img src='$team1img; ?>'> $team1 </p>";
                    else : 
                    echo "<p class='team-name1-fixtures' id=''> <img src='$team1img; ?>'> $team1 </p>";
                endif; ?>                
                <?php if ($team2Score < $team1Score) :
                    echo "<p class='team-name1-fixtures' id='loser'><img src='$team2img; ?>'> $team2 </p>";
                    else : echo "<p class='team-name1-fixtures' id=''> <img src='$team2img; ?>'> $team2 </p>";
                endif; ?> 
            </div>
            <div class="score">
            <?php if 
                ($team1Score < $team2Score) : echo "<p id='loser'>$team1Score </p>";
                else : echo "<p id=''>$team1Score </p>";
            endif; ?>
            <?php
                if 
                ($team2Score < $team1Score) : echo "<p id='loser'>$team2Score </p>";
                else : echo "<p id=''>$team2Score </p>";
            endif; ?>
            </div>
            <div class="final">
                <p><?php echo (get_post_meta( get_the_ID(), '_fifa_final', true ))?></p>
            </div>
        </div>
        <hr>
        <?php endforeach?>      

        <?php $args = array( 'post_type' => 'post', 
                    'order' => 'ASC',
                    'cat' => '2', 
                    'cat' => '7', 
                    'cat' => '8',
                    'cat' => '13',
                    'posts_per_page' => '999'
                    ); $product_posts = get_posts( $args );?>
                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

                    

        <div class="matchup" id="pending">
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
            <div class="final">
                <p><?php echo (get_post_meta( get_the_ID(), '_fifa_final', true ))?></p>
            </div>         
        </div>
        <hr>
        <?php endforeach?>
    </div>
    <!-- Group B Fixtures -->

    <div class="group-b-fixtures">

            <?php $args = array( 'post_type' => 'post', 
                    'order' => 'ASC',
                    'cat' => '2', 
                    'cat' => '7', 
                    'cat' => '8',
                    'cat' => '10',
       
                    'posts_per_page' => '999'
                    ); $product_posts = get_posts( $args );?>
                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

                    <?php $team1 = (get_post_meta( get_the_ID(), '_fifa_team1', true )) ?>
        <?php $team2 = (get_post_meta( get_the_ID(), '_fifa_team2', true )) ?>
        <?php $team1img = (get_post_meta( get_the_ID(), '_fifa_t1img', true ));?>
        <?php $team2img = (get_post_meta( get_the_ID(), '_fifa_t2img', true ));?>
        <?php $team1Score = (get_post_meta( get_the_ID(), '_fifa_team1Score', true ))?>
        <?php $team2Score = (get_post_meta( get_the_ID(), '_fifa_team2Score', true ))?>

        <div class="matchup">
            <div class="teams">       
                <?php if 
                    ($team1Score < $team2Score) : 
                    echo "<p class='team-name1-fixtures' id='loser'><img src='$team1img; ?>'> $team1 </p>";
                    else : 
                    echo "<p class='team-name1-fixtures' id=''> <img src='$team1img; ?>'> $team1 </p>";
                endif; ?>                
                <?php if ($team2Score < $team1Score) :
                    echo "<p class='team-name1-fixtures' id='loser'><img src='$team2img; ?>'> $team2 </p>";
                    else : echo "<p class='team-name1-fixtures' id=''> <img src='$team2img; ?>'> $team2 </p>";
                endif; ?> 
            </div>
            <div class="score">
            <?php if 
                ($team1Score < $team2Score) : echo "<p id='loser'>$team1Score </p>";
                else : echo "<p id=''>$team1Score </p>";
            endif; ?>
            <?php
                if 
                ($team2Score < $team1Score) : echo "<p id='loser'>$team2Score </p>";
                else : echo "<p id=''>$team2Score </p>";
            endif; ?>
            </div>
            <div class="final">
                <p><?php echo (get_post_meta( get_the_ID(), '_fifa_final', true ))?></p>
            </div>
        </div>
        <hr>
        <?php endforeach?>      

        <?php $args = array( 'post_type' => 'post', 
                    'order' => 'ASC',
                    'cat' => '2', 
                    'cat' => '7', 
                    'cat' => '8',
                    'cat' => '11',
                    'posts_per_page' => '999'
                    ); $product_posts = get_posts( $args );?>
                    <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <div class="matchup" id="pending">
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
            
                <div class="final">
                    <p><?php echo (get_post_meta( get_the_ID(), '_fifa_final', true ))?></p>
                </div>         
            </div>
            <hr>
            <?php endforeach?>
    </div>
  
</section>
