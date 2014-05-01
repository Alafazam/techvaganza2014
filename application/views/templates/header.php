<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script src="/js/snap.svg-min.js"></script>
		<script src="/js/modernizr.custom.js"></script>
		<script src="/js/svgLoader.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
		<link rel="stylesheet" type="text/css" href="/css/icons.css" />	
		<link rel="stylesheet" type="text/css" href="/css/login_form.css" />
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
        <?php
			if(isset($home)){
				echo "<link rel='stylesheet' href='/css/hexaflip.css' />";
			}
		?>	
    </head>
    
<body>
    <div id="pagewrap" class="pagewrap">
        <div class="container show"  >
        <!-- Push Wrapper -->
        <div class="mp-pusher" id="mp-pusher">
			<!-- mp-menu -->
            <nav id="mp-menu" class="mp-menu">
                <div class="mp-level">
                    <h2 class="icon icon-world">All Categories</h2>
                    <a class="mp-back" href="#">back</a>
                    <ul>
                        <li><a class="icon icon-shop" href="/">Home</a></li>
                        <li><a class="icon icon-display" href="/login">Login</a></li>
                        <li class="icon icon-arrow-left">
                            <a class="icon icon-display" href="#">Events</a>
                            <div class="mp-level">
                                <h2 class="icon icon-display">Events</h2>
                                <a class="mp-back" href="#">back</a>
                                <ul>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-phone" href="#">CS/IT</a>
                                        <div class="mp-level">
                                            <h2>CS/IT</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">CoderMania</a></li>
                                                <li><a class="pageload-link" href="#">Google CodeJam</a></li>
                                                <li><a class="pageload-link" href="#">Performance Crusher</a></li>
                                                <li><a class="pageload-link" href="#">Futuristic Experience</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-tv" href="#">Civil</a>
                                        <div class="mp-level">
                                            <h2>Civil</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Flat Superscreen</a></li>
                                                <li><a class="pageload-link" href="#">Gigantic LED</a></li>
                                                <li><a class="pageload-link" href="#">Power Eater</a></li>
                                                <li><a class="pageload-link" href="#">3D Experience</a></li>
                                                <li><a class="pageload-link" href="#">Classic Comfort</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Electrical</a>
                                        <div class="mp-level">
                                            <h2>Electrical</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Smart Shot</a></li>
                                                <li><a class="pageload-link" href="#">Power Shooter</a></li>
                                                <li><a class="pageload-link" href="#">Easy Photo Maker</a></li>
                                                <li><a class="pageload-link" href="#">Super Pixel</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Electronics</a>
                                        <div class="mp-level">
                                            <h2>Electronics</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Smart Shot</a></li>
                                                <li><a class="pageload-link" href="#">Power Shooter</a></li>
                                                <li><a class="pageload-link" href="#">Easy Photo Maker</a></li>
                                                <li><a class="pageload-link" href="#">Super Pixel</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Metallugy</a>
                                        <div class="mp-level">
                                            <h2>Metallugy</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Smart Shot</a></li>
                                                <li><a class="pageload-link" href="#">Power Shooter</a></li>
                                                <li><a class="pageload-link" href="#">Easy Photo Maker</a></li>
                                                <li><a class="pageload-link" href="#">Super Pixel</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Mechanical</a>
                                        <div class="mp-level">
                                            <h2>Mechanical</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Smart Shot</a></li>
                                                <li><a class="pageload-link" href="#">Power Shooter</a></li>
                                                <li><a class="pageload-link" href="#">Easy Photo Maker</a></li>
                                                <li><a class="pageload-link" href="#">Super Pixel</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="icon icon-arrow-left">
                            <a class="icon icon-news" href="#">Workshops</a>
                            <div class="mp-level">
                                <h2 class="icon icon-news">Workshops</h2>
                                <a class="mp-back" href="#">back</a>
                                <ul>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Mechanical</a>
                                        <div class="mp-level">
                                            <h2>Mechanical</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Smart Shot</a></li>
                                                <li><a class="pageload-link" href="#">Power Shooter</a></li>
                                                <li><a class="pageload-link" href="#">Easy Photo Maker</a></li>
                                                <li><a class="pageload-link" href="#">Super Pixel</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><a class="pageload-link" href="#">National Geographic</a></li>
                                    <li><a class="pageload-link" href="#">Scientific American</a></li>
                                    <li><a class="pageload-link" href="#">The Spectator</a></li>
                                    <li><a class="pageload-link" href="#">The Rambler</a></li>
                                    <li><a class="pageload-link" href="#">Physics World</a></li>
                                    <li><a class="pageload-link" href="#">The New Scientist</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="icon icon-arrow-left">
                            <a class="icon icon-shop" href="#">Hospitality</a>
                            <div class="mp-level">
                                <h2 class="icon icon-shop">Hospitality</h2>
                                <a class="mp-back" href="#">back</a>
                                <ul>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-t-shirt" href="#">Clothes</a>
                                        <div class="mp-level">
                                            <h2 class="icon icon-t-shirt">Clothes</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li class="icon icon-arrow-left">
                                                    <a class="icon icon-female" href="#">Women's Clothing</a>
                                                    <div class="mp-level">
                                                        <h2 class="icon icon-female">Women's Clothing</h2>
                                                        <a class="mp-back" href="#">back</a>
                                                        <ul>
                                                            <li><a class="pageload-link" href="#">Naked</a></li>
                                                            <li><a class="pageload-link" href="#">Tops</a></li>
                                                            <li><a class="pageload-link" href="#">Dresses</a></li>
                                                            <li><a class="pageload-link" href="#">Trousers</a></li>
                                                            <li><a class="pageload-link" href="#">Shoes</a></li>
                                                            <li><a class="pageload-link" href="#">Sale</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="icon icon-arrow-left">
                                                    <a class="icon icon-male" href="#">Men's Clothing</a>
                                                    <div class="mp-level">
                                                        <h2 class="icon icon-male">Men's Clothing</h2>
                                                        <a class="mp-back" href="#">back</a>
                                                        <ul>
                                                            <li><a class="pageload-link" href="#">Shirts</a></li>
                                                            <li><a class="pageload-link" href="#">Trousers</a></li>
                                                            <li><a class="pageload-link" href="#">Shoes</a></li>
                                                            <li><a class="pageload-link" href="#">Sale</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="pageload-link" class="icon icon-diamond" href="#">Jewelry</a>
                                    </li>
                                    <li>
                                        <a class="pageload-link" class="icon icon-music" href="#">Music</a>
                                    </li>
                                    <li>
                                        <a class="pageload-link" class="icon icon-food" href="#">Grocery</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="icon icon-photo pageload-link" href="#">Contacts</a></li>
                        <li><a class="icon icon-wallet pageload-link" href="#">Sponsers</a></li>
        
                    </ul>
                        
                </div>
            </nav>
            
            <div class="scroller"><!-- this is for emulating position fixed of the nav -->
                <div class="scroller-inner">
                    <div class="top_header clearfix">
                    
                                            <span class="right"><a<?php 
                                            if(isset($first_name))
                                            {
                                                echo    ' href="'.base_url().'home/logout"<span>Logout';
                                            }
                                            else
                                            {
                                                echo    ' href="'.base_url().'login"<span>Login';
                                            }
                                            ?></span></a></span>
                                            <span class="right"><a <?php 
                                            if(isset($first_name))
                                            {
                                                echo    'href="#"><span>Welcome '.$first_name ;
                                            }
                                            else
                                            {
                                                echo    'href="'.base_url().'register"<span>Register';
                                            }
                                            ?>
                                            </span></a></span>
                    </div>
                    <div class="block">
                        <a href="#" id="trigger" class="bt-menu-trigger"><span>Menu</span></a>
                        <!-- <p><a href="#"  class="menu-trigger">Open/Close Menu</a></p> -->
                    </div>
                    <div id='akt_content'>
                        <div id="contain">
                                        <div class="container" id="page-0">
                                            <div class="cat_heading"><h1>Events</h1></div>  
                                            <ul class="ca-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">F</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Exceptional Service</h2>
                                                            <h3 class="ca-sub">Personalized to your needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">H</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Creative Storytelling</h2>
                                                            <h3 class="ca-sub">Advanced use of technology</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">N</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Infographical Education</h2>
                                                            <h3 class="ca-sub">Understanding visually</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">K</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Sophisticated Team</h2>
                                                            <h3 class="ca-sub">Professionals in action</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">L</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Unconditional Support</h2>
                                                            <h3 class="ca-sub">24/7 for you needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="container" id="page-1">
                                            <div class="cat_heading"><h1>WorkShops</h1></div>   
                                            <ul class="ca-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">F</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Exceptional Service</h2>
                                                            <h3 class="ca-sub">Personalized to your needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">H</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Creative Storytelling</h2>
                                                            <h3 class="ca-sub">Advanced use of technology</h3>
                                                        </div>
                                                    </a>
                                                </li>  
                                            </ul>
                                        </div>
                                        <div class="container" id="page-1">
                                            <div class="cat_heading"><h1>Hospitality</h1></div> 
                                            <ul class="ca-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">F</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Exceptional Service</h2>
                                                            <h3 class="ca-sub">Personalized to your needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">H</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Creative Storytelling</h2>
                                                            <h3 class="ca-sub">Advanced use of technology</h3>
                                                        </div>
                                                    </a>
                                                </li>  
                                            </ul>
                                        </div>
                                        <div class="container" id="page-1">
                                            <div class="cat_heading"><h1>Contacts</h1></div>    
                                            <ul class="ca-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">F</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Exceptional Service</h2>
                                                            <h3 class="ca-sub">Personalized to your needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">H</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Creative Storytelling</h2>
                                                            <h3 class="ca-sub">Advanced use of technology</h3>
                                                        </div>
                                                    </a>
                                                </li>  
                                            </ul>
                                        </div>
                                        <div class="container" id="page-1">
                                            <div class="cat_heading"><h1>Sponsors</h1></div>    
                                            <ul class="ca-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">F</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Exceptional Service</h2>
                                                            <h3 class="ca-sub">Personalized to your needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">H</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Creative Storytelling</h2>
                                                            <h3 class="ca-sub">Advanced use of technology</h3>
                                                        </div>
                                                    </a>
                                                </li>  
                                            </ul>
                                        </div>
                                        <div class="container" id="page-1">
                                            <div class="cat_heading"><h1>Gallary</h1></div> 
                                            <ul class="ca-menu">
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">F</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Exceptional Service</h2>
                                                            <h3 class="ca-sub">Personalized to your needs</h3>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="ca-icon">H</span>
                                                        <div class="ca-content">
                                                            <h2 class="ca-main">Creative Storytelling</h2>
                                                            <h3 class="ca-sub">Advanced use of technology</h3>
                                                        </div>
                                                    </a>
                                                </li>  
                                            </ul>
                                        </div>  
                                    </div>
                