<?php get_header(); ?>


<section class="standings">
<h1 class="center-text">Fifa League - Standings</h2>

<!-- Group A -->
    <h2 class="group-name">Group A</h2>
    <div class="group-standings">
        <table id="groups" class="tablesorter">
            <thead>
                <tr>
                    <th>Team</th>
                    <th>GP</th>
                    <th>W-D-L</th>
                    <th>PTS</th>
                    <th>GD</th>
                </tr>
            </thead>
            <?php
                $args = array( 
                'post_type' => 'post', 
                'orderby'  => '_fifa_w',
                'meta_key' => '_fifa_w',
                'cat' => '4',
                'numberposts' => 12
                );
                $product_posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <tbody>
                <tr>
                    <td class="team-name"><a href="<?php the_permalink()?>"><?php the_post_thumbnail() ?><?php the_title()?></a></td>
                    <td>
                    <?php echo
                    (get_post_meta( get_the_ID(), '_fifa_w', true )+get_post_meta( get_the_ID(), '_fifa_d', true )+get_post_meta( get_the_ID(), '_fifa_l', true ));?>
                    </td>
                    <!-- GP -->
                    <td>
                        <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?></td>
                    <!-- W-D-L -->
                    <td>
                        <?php $teamPts = (get_post_meta( get_the_ID(), '_fifa_w', true )*3+get_post_meta( get_the_ID(), '_fifa_d', true )); ?>
                        <?php echo $teamPts;?>
                    </td>
                    <!-- PTS  -->
                    <td>
                        <?php echo (get_post_meta( get_the_ID(), '_fifa_gf', true )-get_post_meta(get_the_ID(), '_fifa_ga', true));?>
                    </td>
                    <!-- GD -->
                    <!-- Loop ends -->
                    <?php endforeach;?>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Group B -->
    <h2 class="group-name">Group B</h2>
    <div class="group-standings">
        <table id="groups" class="tablesorter">
            <thead>
                <tr>
                    <th>Team</th>
                    <th>GP</th>
                    <th>W-D-L</th>
                    <th>PTS</th>
                    <th>GD</th>
                </tr>
            </thead>
            <?php
                $args = array( 
                'post_type' => 'post', 
                'orderby'  => '_fifa_w',
                'meta_key' => '_fifa_w',
                'cat' => '5',
                'numberposts' => 12
                );
                $product_posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <tbody>
                <tr>
                    <td class="team-name"><a href="<?php the_permalink()?>"><?php the_post_thumbnail() ?><?php the_title()?></a></td>
                    <td>
                    <?php echo
                    (get_post_meta( get_the_ID(), '_fifa_w', true )+get_post_meta( get_the_ID(), '_fifa_d', true )+get_post_meta( get_the_ID(), '_fifa_l', true ));?>
                    </td>
                    <!-- GP -->
                    <td>
                        <?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?></td>
                    <!-- W-D-L -->
                    <td>
                        <?php $teamPts = (get_post_meta( get_the_ID(), '_fifa_w', true )*3+get_post_meta( get_the_ID(), '_fifa_d', true )); ?>
                        <?php echo $teamPts;?>
                    </td>
                    <!-- PTS  -->
                    <td>
                        <?php echo (get_post_meta( get_the_ID(), '_fifa_gf', true )-get_post_meta(get_the_ID(), '_fifa_ga', true));?>
                    </td>
                    <!-- GD -->
                    <!-- Loop ends -->
                    <?php endforeach;?>
                </tr>
            </tbody>
        </table>
    </div>

</section>

<!-- Fixtures -->

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

            <div class="matchup">
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

            <div class="matchup">
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



<?php get_footer();?>