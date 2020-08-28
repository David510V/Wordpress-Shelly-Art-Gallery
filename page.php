<?php get_header(); ?>

    
<section class="exhibition" id="exhibition" data-scroll="out">
      <div class="exhWrapper">
        <div class="item">
            <div class="exhItem">
              <div class="upper">
                <div class="img">
                  <img src="<?php echo the_post_thumbnail_url() ?>" alt="">
                  <div class="shadow1"></div>
                </div>
              </div>
              <div class="title">
                <div class="head">
                  <p><?php the_title();?></p>
                </div>
                <div class="tick">
                  <div class="icon">
                    <a><i class="fas fa-ticket-alt"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="form">
          <p style="text-align: center;"><?php woocommerce_content(); ?></p>
            <form action="">
                <div class="sizeFrame">
                    <div class="size">
                        <p>Size:</p>
                        <select value="">
                            <option name="" id="">170X210</option>
                            <option name="" id="">120X150</option>
                            <option name="" id="">040X060</option>
                        </select>
                    </div>
                    <div class="frame">
                        <p>Frame:</p>
                        <select value="">
                            <option name="" id="">Frame</option>
                            <option name="" id="">Frame2</option>
                            <option name="" id="">Frame3</option>
                        </select>
                    </div>
                </div>

                <div class="details">
                    <div class="mail">
                        <p>Email:</p>
                        <input type="email">
                    </div>
                    <div class="num">
                        <p>Number:</p>
                        <input type="text">
                    </div>
                </div>

                <button class="btn">SEND</button>
            </form>
        </div>
    </section>




<?php get_footer(); ?>