<?php get_header(); ?>

         <div class="big">
             <span class="half">
               <span class="spanTitle">THINK ART</span>
             </span>
             <span class="half">
               <span class="spanTitle">THINK ART</span>
             </span>
         </div>
         
     
         
         <div class="buyTickets">
            <button>THINK SIMPLE</button>
         </div>
    </section>

    <section class="exhibition" id="exhibition" data-scroll="out">
      <div class="allExh">
        <button>ALL THE WORKS</button>
      </div>

      
      <div class="exhWrapper">
        <div id="second" class="owl-carousel owl-theme">

          <?php 

              $product=array(
                'post_type'=> 'product',
                
              );
              $loop = new WP_Query( $product );

              while($loop->have_posts()): $loop->the_post();
          ?>
       <div class="item">
            <div class="exhItem">
              <div class="upper">
                <a href="<?php echo get_permalink( $loop->post->ID ); ?>"><div class="img">
                  <img src="<?php echo get_the_post_thumbnail_url($loop->post->ID); ?>" alt="">
                  <div class="shadow1"></div>
                </div></a>
              </div>
              <div class="title">
                <div class="head">
                  <p><?php the_title(); ?></p>
                </div>
                <div class="tick">
                  <div class="icon">
                    <i class="fas fa-ticket-alt"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>


            <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </section>


    <?php 
    $image1=get_post(16);
    $image2=get_post(18);
    ?>
    <section class="details">
      <div class="images beforeEnter" >
        <div class="img1 showImg">
          <div class="img" >
           <?php echo $image1->post_content; ?>
          </div>
          
        </div>
        <div class="img2">
          <div class="img">
            <?php echo $image2->post_content; ?>
          </div>
        </div>
      </div>

      <div class="content" >

        <div class="discover" id="discover"> 
          <div class="bigH">
            <span class="half">
              <span class="spanTitle">ABOUT</span>
            </span>
            <span class="half">
              <span class="spanTitle">ABOUT</span>
            </span>
          </div>
          <?php 
          $about1=get_post(27);
          $about2=get_post(30);
          ?>
          <div class="mus">
           
            
            <?php echo $about1->post_content;?>
            
            <?php echo $about2->post_content;?>
            
          </div>
          <div class="txt">
            <p class="h">Shelly Feterman</p>
            <p class="l">My name is Shelly Feterman, I was born in 1999, Haifa Israel. 
              I graduated "Vizo" high school of fine arts.
              My main goal in my works is to convey the satisfaction of my form of aesthetics, 
              to create comfort and pleasantness to the viewer,
              in an attempt to form some kind of euphoric surrounding.</p>
          </div>
        </div>

        <div class="new" id="new">
          <div class="bigH">
            <span class="half">
              <span class="spanTitle">DISCOVER</span>
            </span>
            <span class="half">
              <span class="spanTitle">DISCOVER</span>
            </span>
          </div>
          <div class="underH">
            <i class="far fa-newspaper" ></i><p class="p">Find more on Instegram feed</p><div class="line"></div>
          </div>

          <?php 
          $discover1=get_post(34);
          $discover2=get_post(36);
          ?>
          <div class="innerNew">

           <?php 
           echo $discover1->post_content;
           echo $discover2->post_content;
           ?>

          </div>
        </div>

      </div>
    </section>

<?php get_footer(); ?>