<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Techvaganza</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <script src="/js/snap.svg-min.js"></script>
		<script src="/js/modernizr.custom.js"></script>
		<script src="/js/svgLoader.js"></script>
        <link rel="stylesheet" type="text/css" href="/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="/css/component.css" />
		<link rel="stylesheet" type="text/css" href="/css/icons.css" />	
		<link rel="stylesheet" type="text/css" href="/css/login_form.css" />
		<link rel="stylesheet" type="text/css" href="/css/main.css" />
		<link rel="stylesheet" type="text/css" href="/css/comingsoon.css" />

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
                                        <a class="icon icon-phone" href="#">CodeShode</a>
                                        <div class="mp-level">
                                            <h2>CodeShode</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Android Basics</a></li>
                                                <li><a class="pageload-link" href="#">Android Advance</a></li>
                                                <li><a class="pageload-link" href="#">Go fix It</a></li>
                                                <li><a class="pageload-link" href="#">De vardad juginerio</a></li>
                                                <li><a class="pageload-link" href="#">Trouble-Shootin</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-tv" href="#">Creatives</a>
                                        <div class="mp-level">
                                            <h2>Creatives</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Heat Exachange</a></li>
                                                <li><a class="pageload-link" href="#">Coptive Dynax</a></li>
                                                <li><a class="pageload-link" href="#">Cheme-sepestor</a></li>
                                                <li><a class="pageload-link" href="#">Fulcrum</a></li>
                                                <li><a class="pageload-link" href="#">Witricity</a></li>
                                                <li><a class="pageload-link" href="#">Optro-acoustics</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Bob-the-builder</a>
                                        <div class="mp-level">
                                            <h2>Bob-the-builder</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Konstructor</a></li>
                                                <li><a class="pageload-link" href="#">Bridge the gap</a></li>
                                                <li><a class="pageload-link" href="#">College Planning</a></li>
                                                <li><a class="pageload-link" href="#">Reser-where</a></li>
                                                <li><a class="pageload-link" href="#">Truss-o-meniac</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Fixer Elixer</a>
                                        <div class="mp-level">
                                            <h2>Fixer Elixer</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Junckyard</a></li>
                                                <li><a class="pageload-link" href="#">Transform_It</a></li>
                                                <li><a class="pageload-link" href="#">Sanrachna</a></li>
                                                <li><a class="pageload-link" href="#">Nirman</a></li>
                                                <li><a class="pageload-link" href="#">The Estimator</a></li>
                                                <li><a class="pageload-link" href="#">Traffixing</a></li>
                                                <li><a class="pageload-link" href="#">Minimal motor</a></li>
                                                <li><a class="pageload-link" href="#">Filter the Litter</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera" href="#">Robonoids</a>
                                        <div class="mp-level">
                                            <h2>Robonoids</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="pageload-link" href="#">Smack Down</a></li>
                                                <li><a class="pageload-link" href="#">Rescue Bot</a></li>
                                                <li><a class="pageload-link" href="#">Line Follower</a></li>
                                                <li><a class="pageload-link" href="#">Mystry Box</a></li>
                                                <li><a class="pageload-link" href="#">Embe-sys</a></li>
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
                                    <li><a class="pageload-link" href="#">CS/IT</a></li>
                                    <li><a class="pageload-link" href="#">Mechanical</a></li>
                                    <li><a class="pageload-link" href="#">Electrical</a></li>
                                    <li><a class="pageload-link" href="#">Metallurgy</a></li>
                                    <li><a class="pageload-link" href="#">Civil</a></li>
                                    <li><a class="pageload-link" href="#">Chemical</a></li>
                                    <li><a class="pageload-link" href="#">EC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="icon icon-photo pageload-link" href="#">Hospitality</a></li>
                        <li><a class="icon icon-photo pageload-link" href="#">Contacts</a></li>
                        <li><a class="icon icon-wallet pageload-link" href="#">Sponsers</a></li>
        
                    </ul>
                        
                </div>
            </nav>
            
            <div class="scroller"><!-- this is for emulating position fixed of the nav -->
                <div class="scroller-inner">
                    <div class="top_header clearfix">
                    
                                            <span class="right"><a
                                            <?php 
                                            if(isset($first_name))
                                            {
                                                echo    ' href="/home/logout"<span>Logout';
                                            }
                                            else
                                            {
                                                echo    ' href="/login"<span>Login';
                                            }
                                            ?></span></a></span>
                                            <span class="right"><a <?php 
                                            if(isset($first_name))
                                            {
                                                echo    'href="/home"><span>Welcome '.$first_name ;
                                            }
                                            else
                                            {
                                                echo    'href="/register"<span>Register';
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
                        	<div class="container" id="coming_soon_container">
								<div class="coming_soon cat_heading"><h1>Coming Soon</h1></div>	
								<div class="coming_soon">
									<p><a id="csgo"	class="coming_soon pageload-link" href="#page-1">Go back</a></p>
								</div>	
							</div>
                        </div>
                