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
                'cat' => '4',
                'numberposts' => 12,
                'meta_query'    => array( 
                    'relation' => 'AND',
                    '_fifa_w' => array(
                        'key'       => '_fifa_w',
                    ),
                    '_fifa_d' => array(
                        'key'       => '_fifa_d',
                    ),
                ),
                
            'orderby' => array(
                '_fifa_w'       => 'DESC',
                '_fifa_d'     => 'DESC'
                )
                );
                $product_posts = get_posts( $args ); // returns an array of posts
            ?>


            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <tbody>
                <tr>
                    <td class="team-name"><?php the_post_thumbnail() ?><?php the_title()?></a></td>
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
                'cat' => '5',
                'numberposts' => 12,
                'meta_query'    => array( 
                    'relation' => 'AND',
                    '_fifa_w' => array(
                        'key'       => '_fifa_w',
                    ),
                    '_fifa_d' => array(
                        'key'       => '_fifa_d',
                    ),
                ),
                
            'orderby' => array(
                '_fifa_w'       => 'DESC',
                '_fifa_d'     => 'DESC'
                )
            );
                $product_posts = get_posts( $args ); // returns an array of posts
            ?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

            <tbody>
                <tr>
                    <td class="team-name"><?php the_post_thumbnail() ?><?php the_title()?></a></td>
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
    <?php include ('page-fixtures.php');?>
</section>

<?php get_footer();?>