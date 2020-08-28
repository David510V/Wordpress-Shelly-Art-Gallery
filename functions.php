<?php 
function delete_cookies(){
    // if(is_product()){
    //     setcookie('woocommerce_items_in_cart','',time()-312312951017,'/');
    //     setcookie('wp_woocommerce_session_c3efa2bed87a885d0f903a50b309ac38','',time()-312312951017,'/');
    //     setcookie('woocommerce_cart_hash','',time()-312312951017,'/');
    // }
    
    // if(is_page('checkout')){
    //     setcookie('robo',1231234214);
    // }
    // if(is_front_page()){
    //     setcookie('woocommerce_items_in_cart','',time()-312312951017,'/');
    //     setcookie('wp_woocommerce_session_c3efa2bed87a885d0f903a50b309ac38','',time()-312312951017,'/');
    //     setcookie('woocommerce_cart_hash','',time()-312312951017,'/');
    // }
    // else{
    //     setcookie('woocommerce_items_in_cart','',time()-312312951017,'/');
    //     setcookie('wp_woocommerce_session_c3efa2bed87a885d0f903a50b309ac38','',time()-312312951017,'/');
    //     setcookie('woocommerce_cart_hash','',time()-312312951017,'/');
    // }
}

add_action('wp','delete_cookies');

function load_stylesheet(){
    if(is_product()){
        wp_register_style('stylesheet',get_template_directory_uri().'/style.css','',1,'all');
        wp_enqueue_style('stylesheet');
        
        wp_register_style('custom',get_template_directory_uri().'/product.css','',1,'all');
        wp_enqueue_style('custom');
    }
    if(is_page('checkout')){
        wp_register_style('stylesheet',get_template_directory_uri().'/style.css','',1,'all');
        wp_enqueue_style('stylesheet');
    
        wp_register_style('custom',get_template_directory_uri().'/checkout.css','',1,'all');
        wp_enqueue_style('custom');
        
    }
    else{
        wp_register_style('stylesheet',get_template_directory_uri().'/style.css','',1,'all');
        wp_enqueue_style('stylesheet');
        wp_register_style('custom',get_template_directory_uri().'/app.css','',1,'all');
        wp_enqueue_style('custom');
    }
    
}

add_action('wp_enqueue_scripts','load_stylesheet');

function load_js(){
    if(is_page('checkout')){
        wp_register_script('custom',get_template_directory_uri().'/product.js', 'jquery',1,true);
        wp_enqueue_script('custom');
    }
    if(is_product()){
        wp_register_script('custom',get_template_directory_uri().'/product.js', 'jquery',1,true);
        wp_enqueue_script('custom');
    }
    if(is_page('home')){
        wp_register_script('custom',get_template_directory_uri().'/app.js', 'jquery',1,true);
        wp_enqueue_script('custom');
    }
    

}

add_action('wp_enqueue_scripts','load_js');

 
function add_font_awesome() {
     wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
     wp_enqueue_style('owl','//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
     wp_enqueue_style('bootstrap','//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
}



add_action( 'wp_enqueue_scripts', 'add_font_awesome' );


function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
   
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


// CREATE POST TYPE FOR IMAGES.//

function create_postType(){
    register_post_type('images',
    array(
        'labels'=>array(
            'name'=>__('images'),
            'singular_name'=>__('images')
        ),
        'public'=>true,
        'has_archive'=>false,
        'rewrite'=>array('slug'=>'program')
    )
  );

  register_post_type('about',
    array(
        'labels'=>array(
            'name'=>__('about'),
            'singular_name'=>__('about')
        ),
        'public'=>true,
        'has_archive'=>false,
        'rewrite'=>array('slug'=>'program')
    )
  );

  register_post_type('discover',
    array(
        'labels'=>array(
            'name'=>__('discover'),
            'singular_name'=>__('discover')
        ),
        'public'=>true,
        'has_archive'=>false,
        'rewrite'=>array('slug'=>'program')
    )
  );
}

add_action('init','create_postType');

function add_column_id($columns){
    $columns['post_id']='ID';
    return $columns;
}

add_filter('manage_posts_columns','add_column_id');

function add_column_content($column,$id){
    if($column==='post_id')
    echo $id;
}

add_action('manage_posts_custom_column','add_column_content',5,2);



// Woocommerce Stuff!! //
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
add_filter('woocommerce_single_variation', function() {return true;});
add_filter( 'woocommerce_cart_needs_payment','__return_false' );
add_filter( 'woocommerce_add_to_cart_validation', 'only_one_cart', 99, 2 );
add_action('woocommerce_after_checkout_form','display_image');
///////
function only_one_cart( $passed, $added_product_id ) {
   wc_empty_cart();
   return $passed;
}


function display_image(){
    foreach(WC()->cart->get_cart() as $cart_item){
        $item=$cart_item['data'];
        if(!empty($item)){
            $product=new WC_product($item->id);
            echo '<div class="product">'.$product->get_image().'</div>'; 
        }
    }
}


add_action( 'woocommerce_checkout_order_processed','after_order' ,1 ,1 );


add_filter('ai1wm_exclude_content_from_export','ignore_files');

function ignore_files($filters){
    $filters[]='themes/woocommerce-theme/node-modules';
    return $filters;
}
?>