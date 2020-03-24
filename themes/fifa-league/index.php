<?php get_header(); ?>


<h1 class="center-text">Fifa League - Standings</h2>
<section class="standings">
  
      <h2 class="group-name">Group A</p>
      <div class="group-standings">
        
        <!-- Group A -->
       
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
            'order' => 'ASC',
           
            'cat' => '10',
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
                <td><?php echo get_post_meta( get_the_ID(), '_fifa_w', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_d', true );?>-<?php echo get_post_meta( get_the_ID(), '_fifa_l', true );?></td>
                <!-- W-D-L -->
                <td>

                <?php $teamPts = 
 
(get_post_meta( get_the_ID(), '_fifa_w', true )*3+get_post_meta( get_the_ID(), '_fifa_d', true )); ?>
                  
                
                <?php echo 
                $teamPts;?>

              </td>
                <!-- PTS  -->
                <td><?php echo 
                (get_post_meta( get_the_ID(), '_fifa_gf', true )-get_post_meta(get_the_ID(), '_fifa_ga', true));?></td>
                <!-- GD -->

               


      
   

    <!-- Loop ends -->
          <?php endforeach;?>
    
    </tr>
          </tbody>
        </table>
      </div>
      </section>

      



    
<?php get_footer();?>