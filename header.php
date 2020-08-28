<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png"  href="http://shelly.test/wp-content/uploads/2020/08/Brown.png">
    <title>Shelly's Art Gallery</title>

    <?php wp_head(); ?>
    
</head>
<body>
    

<div class="nav" id="nav">
        <ul class="innerNav">
        <li><a class="calen"><i class="fab fa-facebook-f"></i>
        <div class="point1">facebook</div>
        </a></li>
        <li><a class="inst"><i class="fab fa-instagram"></i>
        <div class="point">instagram</div>
        </a></li>
        <li><a href="/"><div id="circle" class="circle">
          <div class="line"></div>
        </div></a></li>
        <li><a  class="search"><i id="search" class="fas fa-search"></i>
        <div class="point2"><?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?></div>
        </a></li>
        <li><a class="map"><i class="fas fa-map-marker-alt"></i>
        <div class="point3">map</div>
      </a></li>
        </ul>
    </div>
    

    <section class="open">
        <div class="head"> 
            <div class="title">
             <a href="/">
             <p class="a">SHELLY'S ART</p>
             <p class="b">GALLERY</p>
             
             </a>
            </div>
            <div class="play">
             <p></p>
            </div>
         </div>