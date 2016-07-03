<?php get_header(); ?>
  <div id="content">
        <div class="flex-container">
                <div class="flexslider">
                  <ul class="slides">
                        <?php
                                $slider = new WP_Query('posts_per_page=7');
                                if ( $slider->have_posts() ) : while ( $slider->have_posts() ) : $slider->the_post();
                        ?>
                        <?php
                                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
                                $url = $thumb['0'];
                        ?>
                    <li>
                     <img src="<?php echo $url; ?>">
                     <p class="flex-caption"><?php the_title(); ?></p>
                    </li>
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                  </ul>
                </div>
        </div>


      <div class="row">
        

        <div class="main-content">
            <!-- bat dau block 3-->
                
 <!-- Jumbotron -->
              <div class="jumbotron">
                <h2>DỊCH VỤ SEO</h2>
                <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
                <p><a class="btn btn-lg btn-success" href="#" role="button">BẮT ĐẦU NGAY</a></p>
              </div>

              <!-- Example row of columns -->
              <div class="row">
                <?php 
                  $query3 = new WP_Query('posts_per_page=3&cat=2');
                if($query3->have_posts()) : while($query3->have_posts()) : $query3->the_post() ; ?>
                <div class="col-lg-4">
                  <?php phongdat_entry_title(); ?>
                  <p><?php the_contentsmall('', '...', true, '140') ?></p>
                  <p><a class="btn btn-primary" href="<?php the_permalink(); ?>" role="button">Xem Chi Tiet &raquo;</a></p>
                </div>
                <?php endwhile; endif; ?>
                

              </div>

          <!--end block 3 -->


            <!--bat dau block 1-->
          <h2 class="page-header"><a href="#">DỊCH VỤ HOSTING</a></h2>

          <div class="row placeholders">

              <?php 
                $query1 = new WP_Query('cat=2&posts_per_page=8');
                if($query1->have_posts()) : while($query1->have_posts()) : $query1->the_post() ; 
              ?>
            <div class="col-xs-6 col-sm-3 placeholder">
                  <figure><a class="post-thumbnail" href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></figure> 
                  <?php phongdat_entry_title(); ?>
                  
            </div>
                <?php endwhile; endif; ?>

          </div>
          <!--end block 1-->

          <!--bat dau block 2-->
              

            <h2 class="page-header"><a href="#">THIẾT KẾ WEBSITE</a></h2>
               <div class="row">
                  <?php
                    $query2= new WP_Query('posts_per_page=4&cat=2');
                    if($query2->have_posts()) : while($query2->have_posts()) : $query2->the_post() ;

                  ?>
                   <div class="col-sm-3 col-md-3">
                   <div class="thumbnail">
                   <figure class="thumbnail-block2"><a href="<?php the_permalink(); ?>" alt="<?php bloginfo('sitename');?>"><?php the_post_thumbnail('large'); ?></a></figure>
                   <div class="caption">
                   <?php phongdat_entry_title(); ?>
                   <p><?php the_excerpt(); ?></p>
                   <p><a href="#" class="btn btn-primary" role="button">Mua ngay</a> <a href="#" class="btn btn-default" role="button">Demo</a></p>
                   </div>
                   </div> 
                   </div>
                 <?php endwhile; endif; ?>

               </div>
       



          <!--end block 2-->



        </div><!--dong .main-content-->

        

       



      </div><!--dong .row-->
    

</div><!--dong .content-->

<?php get_footer(); ?>



