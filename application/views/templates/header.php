<?php
    $username= $this->session->userdata('logged_in');
    $username=$username['username'];
?><!DOCTYPE html>
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
                        <li><a class="icon icon-shop icallajax" href="/aboutus">About Us</a></li>                        
                        <li><a class="icon icon-display" <?php 
                                            if(isset($username))
                                            {
                                                echo    ' href="/home/logout">Logout';
                                            }
                                            else
                                            {
                                                echo    ' href="/login">Login';
                                            }
                                            ?></a></li>
                        <li class="icon icon-arrow-left">
                            <a class="icon icon-display" href="#">Events</a>
                            <div class="mp-level">
                                <h2 class="icon icon-display">Events</h2>
                                <a class="mp-back" href="#">back</a>
                                <ul>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-phone " href="#events/codeshode">CodeShode</a>
                                        <div class="mp-level">
                                            <h2>CodeShode</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="icallajax" href="/comingsoon">Android Anatomy</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Android Advance</a></li>
                                                <li><a class="icallajax" href="/events/codeshode/gofixit">Go fix It</a></li>
                                                <li><a class="icallajax" href="/events/codeshode/devardad">De vardad Ingeniero</a></li>
                                                <li><a class="icallajax" href="/events/codeshode/codomania">CodoMania</a></li>

                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-tv " href="#events/creatives">Creatives</a>
                                        <div class="mp-level">
                                            <h2>Creatives</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="icallajax" href="/comingsoon">Heat Exachange</a></li>
<<<<<<< HEAD
                                                <li><a class="icallajax" href="/events/creatives/coptivedynax">Captive Dynax</a></li>
=======
                                                <li><a class="icallajax" href="/events/creatives/captivedynax">Captive Dynax</a></li>
>>>>>>> cccbb8c0c2b4f47a3052e1de69f3ee6c6a324067
                                                <li><a class="icallajax" href="/events/creatives/chemeseparator">Cheme-separator</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Fulcrum</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Witricity</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Optro-acoustics</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera " href="#events/builder">Builder</a>
                                        <div class="mp-level">
                                            <h2>Builder</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="icallajax" href="/events/builder/konstructor">Konstructor</a></li>
<<<<<<< HEAD
                                                <li><a class="icallajax" href="/events/builder/bridgethegap">Bridge the gorge</a></li>
=======
                                                <li><a class="icallajax" href="/events/builder/bridgegap">Bridge the gorge</a></li>
>>>>>>> cccbb8c0c2b4f47a3052e1de69f3ee6c6a324067
                                                <li><a class="icallajax" href="/events/builder/collegeplanning">College Planning</a></li>
                                                <li><a class="icallajax" href="/events/builder/reserwhere">Reser-where</a></li>
                                                <li><a class="icallajax" href="/events/builder/trussomaniac">Truss-o-maniac</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera " href="#events/fixerelixer">Fixer Elixir</a>
                                        <div class="mp-level">
                                            <h2>Fixer Elixir</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="icallajax" href="/comingsoon">Junkyard</a></li>
<<<<<<< HEAD
                                                <li><a class="icallajax" href="/comingsoon">Transform_It</a></li>
=======
                                                <li><a class="icallajax" href="/comingsoon">Transform It</a></li>
>>>>>>> cccbb8c0c2b4f47a3052e1de69f3ee6c6a324067
                                                <li><a class="icallajax" href="/comingsoon">Sanrachna</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Nirman</a></li>
                                                <li><a class="icallajax" href="/events/fixerelixir/theestimator">The Estimator</a></li>
                                                <li><a class="icallajax" href="/events/fixerelixir/traffixing">Traffixing</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Minimal motor</a></li>
                                                <li><a class="icallajax" href="/events/fixerelixir/filterthelitre">Filter the Litre</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icon icon-arrow-left">
                                        <a class="icon icon-camera " href="#events/robonoids">Robonoid</a>
                                        <div class="mp-level">
                                            <h2>Robonoid</h2>
                                            <a class="mp-back" href="#">back</a>
                                            <ul>
                                                <li><a class="icallajax" href="/comingsoon">Smack Down</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Rescue Bot</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Line Follower</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Mystry Box</a></li>
                                                <li><a class="icallajax" href="/comingsoon">Embe-sys</a></li>
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
                                    <li><a class="icallajax" href="/comingsoon">CS/IT</a></li>
                                    <li><a class="icallajax" href="/comingsoon">Mechanical</a></li>
                                    <li><a class="icallajax" href="/comingsoon">Electrical</a></li>
                                    <li><a class="icallajax" href="/comingsoon">Metallurgy</a></li>
                                    <li><a class="icallajax" href="/comingsoon">Civil</a></li>
                                    <li><a class="icallajax" href="/comingsoon">Chemical</a></li>
                                    <li><a class="icallajax" href="/comingsoon">EC</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="icon icon-photo icallajax" href="/hospitality">Hospitality</a></li>
                        <li><a class="icon icon-photo icallajax" href="/contacts">Contacts</a></li>
                        <li><a class="icon icon-wallet icallajax" href="/comingsoon">Sponsors</a></li>
        
                    </ul>
                        
                </div>
            </nav>
            
            <div class="scroller"><!-- this is for emulating position fixed of the nav -->
                <div class="scroller-inner">
                    <div class="top_header clearfix">
                    
                                            <span class="right"><a
                                            <?php 
                                            if(isset($username))
                                            {
                                                echo    ' href="/home/logout"<span>Logout';
                                            }
                                            else
                                            {
                                                echo    ' href="/login"<span>Login';
                                            }
                                            ?></span></a></span>
                                            <span class="right"><a <?php 
                                            if(isset($username))
                                            {
                                                echo    'href="/home"><span>Welcome '.$username ;
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
                        <div id="viewport" class="winded">
                                        <svg version="1.1" id="star" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="100%" height="100%" viewBox=" 0 0 600 600"  xml:space="preserve">
                                            <g id="logo_conatainer" style="display:none">
                                                <g id="l0" class="main_logo">
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.697,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.186-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#000"d="M528.539,253.739c0,1.256-1.461,2.275-3.266,2.275h-35.6c-1.803,0-3.266-1.019-3.266-2.275v-8.759
                                                        c0-1.256,1.463-2.275,3.266-2.275h35.6c1.805,0,3.266,1.019,3.266,2.275V253.739z"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="1.304" stroke-miterlimit="10" d="M528.539,253.739
                                                        c0,1.256-1.461,2.275-3.266,2.275h-35.6c-1.803,0-3.266-1.019-3.266-2.275v-8.759c0-1.256,1.463-2.275,3.266-2.275h35.6
                                                        c1.805,0,3.266,1.019,3.266,2.275V253.739z"/>
                                                    <path d="M498.834,244.134c0,1.691-1.371,3.062-3.063,3.062c-1.69,0-3.061-1.371-3.061-3.062v-2.45c0-1.691,1.37-3.062,3.061-3.062
                                                        c1.691,0,3.063,1.371,3.063,3.062V244.134z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="1.304" stroke-miterlimit="10" d="M498.834,244.134
                                                        c0,1.691-1.371,3.062-3.063,3.062c-1.69,0-3.061-1.371-3.061-3.062v-2.45c0-1.691,1.37-3.062,3.061-3.062
                                                        c1.691,0,3.063,1.371,3.063,3.062V244.134z"/>
                                                    <path fill="#fff" d="M528.539,278.996c0,1.234-0.914,2.235-2.043,2.235h-38.045c-1.128,0-2.043-1.001-2.043-2.235v-16.761
                                                        c0-1.234,0.915-2.235,2.043-2.235h38.045c1.129,0,2.043,1,2.043,2.235V278.996z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.4247" stroke-miterlimit="10" d="M528.539,278.996
                                                        c0,1.234-0.914,2.235-2.043,2.235h-38.045c-1.128,0-2.043-1.001-2.043-2.235v-16.761c0-1.234,0.915-2.235,2.043-2.235h38.045
                                                        c1.129,0,2.043,1,2.043,2.235V278.996z"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" x1="486.408" y1="274.371" x2="528.539" y2="274.371"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" x1="486.408" y1="267.186" x2="528.539" y2="267.186"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" x1="511.775" y1="260" x2="511.775" y2="281.23"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" x1="503.174" y1="260" x2="503.174" y2="281.23"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" x1="494.572" y1="260" x2="494.572" y2="281.23"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" x1="520.375" y1="260" x2="520.375" y2="281.23"/>
                                                    <path fill="#fff" stroke="#FFFFFF" stroke-width="1.1657" stroke-miterlimit="10" d="M500.043,244.552
                                                        c0,2.269-1.912,4.108-4.271,4.108c-2.358,0-4.271-1.839-4.271-4.108v-3.287c0-2.269,1.913-4.108,4.271-4.108
                                                        c2.359,0,4.271,1.839,4.271,4.108V244.552z"/>
                                                    <path d="M522.188,244.134c0,1.691-1.371,3.062-3.063,3.062s-3.061-1.371-3.061-3.062v-2.45c0-1.691,1.369-3.062,3.061-3.062
                                                        s3.063,1.371,3.063,3.062V244.134z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="1.304" stroke-miterlimit="10" d="M522.188,244.134
                                                        c0,1.691-1.371,3.062-3.063,3.062s-3.061-1.371-3.061-3.062v-2.45c0-1.691,1.369-3.062,3.061-3.062s3.063,1.371,3.063,3.062
                                                        V244.134z"/>
                                                    <path fill="#fff" stroke="#FFFFFF" stroke-width="1.1657" stroke-miterlimit="10" d="M523.396,244.552
                                                        c0,2.269-1.912,4.108-4.271,4.108s-4.271-1.839-4.271-4.108v-3.287c0-2.269,1.912-4.108,4.271-4.108s4.271,1.839,4.271,4.108
                                                        V244.552z"/>
                                                    <path fill="none" d="M523.396,273.559c0,1.842-1.494,3.336-3.336,3.336h-7.971c-1.842,0-3.336-1.494-3.336-3.336v-5.561
                                                        c0-1.843,1.494-3.336,3.336-3.336h7.971c1.842,0,3.336,1.494,3.336,3.336V273.559z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="2.2243" stroke-miterlimit="10" d="M523.396,273.559
                                                        c0,1.842-1.494,3.336-3.336,3.336h-7.971c-1.842,0-3.336-1.494-3.336-3.336v-5.561c0-1.843,1.494-3.336,3.336-3.336h7.971
                                                        c1.842,0,3.336,1.494,3.336,3.336V273.559z"/>
                                                </g>
                                                <g id="l1" class="main_logo">
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.8007" stroke-miterlimit="10" d="M490.267,238.86
                                                        c0-0.029-0.003-0.058-0.004-0.087h8.902c0,0.005,0,0.011,0,0.017c0.01,4.323,3.898,7.813,8.698,7.806
                                                        c4.798-0.007,8.688-3.519,8.687-7.823h9.033c-0.095,0.89,0.036,1.81,0.434,2.688c0.579,1.284,1.579,2.236,2.927,2.925
                                                        c-0.446,1.418-1.083,2.74-1.843,4.019c-0.174,0.292-0.348,0.379-0.73,0.296c-1.578-0.341-3.081-0.104-4.485,0.613
                                                        c-2.4,1.228-3.623,3.717-3.043,6.155c0.058,0.239,0.175,0.476-0.199,0.616c-1.544,0.582-3.082,1.176-4.625,1.762
                                                        c-0.246,0.093-0.407,0.036-0.576-0.187c-2.684-3.528-8.057-3.496-10.646,0.064c-0.184,0.252-0.341,0.343-0.651,0.23
                                                        c-1.634-0.598-3.271-1.189-4.908-1.782c-0.299-0.109-0.362-0.26-0.285-0.571c0.417-1.695,0.137-3.297-1.047-4.687
                                                        c-1.684-1.977-3.906-2.712-6.627-2.19c-0.163,0.031-0.458-0.032-0.528-0.139c-0.927-1.407-1.603-2.911-2.089-4.503
                                                        C488.978,242.952,490.286,241.231,490.267,238.86z"/>

                                                    
                                                    <path fill="#000" stroke="#000000" stroke-width="1.7115" stroke-miterlimit="10" d="M497.81,281.439
                                                        c-0.847-2.417-1.203-4.893-0.163-7.376c0.98-2.341,3.139-3.405,5.67-3.981c0.233-0.053,0.581,0.112,0.81,0.259
                                                        c2.676,1.716,5.411,1.704,8.064-0.025c0.234-0.153,0.632-0.263,0.896-0.198c4.145,1.016,6.454,3.348,6.063,8.034
                                                        c-0.081,0.962-0.347,1.917-0.6,2.859c-0.056,0.209-0.418,0.501-0.641,0.502c-6.646,0.017-13.291,0.001-19.937-0.011
                                                        C497.944,281.5,497.916,281.48,497.81,281.439z"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="1.7115" stroke-miterlimit="10" d="M497.81,281.439
                                                        c-0.847-2.417-1.203-4.893-0.163-7.376c0.98-2.341,3.139-3.405,5.67-3.981c0.233-0.053,0.581,0.112,0.81,0.259
                                                        c2.676,1.716,5.411,1.704,8.064-0.025c0.234-0.153,0.632-0.263,0.896-0.198c4.145,1.016,6.454,3.348,6.063,8.034
                                                        c-0.081,0.962-0.347,1.917-0.6,2.859c-0.056,0.209-0.418,0.501-0.641,0.502c-6.646,0.017-13.291,0.001-19.937-0.011
                                                        C497.944,281.5,497.916,281.48,497.81,281.439z"/>
                                                    <path fill="#000"d="M513.376,262.884c-0.096,2.376-0.74,3.89-2.236,5.047c-1.889,1.461-4.389,1.39-6.202-0.155
                                                        c-2.386-2.033-2.678-5.641-0.646-7.971c2.213-2.536,6.062-2.413,7.918,0.349C512.873,261.139,513.149,262.333,513.376,262.884"/>
                                                    <path fill="#000"d="M513.376,262.884c-0.096,2.376-0.74,3.89-2.236,5.047c-1.889,1.461-4.389,1.39-6.202-0.155
                                                        c-2.386-2.033-2.678-5.641-0.646-7.971c2.213-2.536,6.062-2.413,7.918,0.349C512.873,261.139,513.149,262.333,513.376,262.884"/>
                                                </g>    
                                                <g id="l2" class="main_logo">
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.476,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.235c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.235
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.476,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.235c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.235
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path  fill="#fff" d="M489.729,280.79v-4.346c0-0.333,0.135-0.603,0.302-0.603h-1.177c-0.269,0-0.485,0.27-0.485,0.603v4.346
                                                        c0,0.333,0.217,0.604,0.485,0.604h1.177C489.863,281.394,489.729,281.124,489.729,280.79"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="0.8471" stroke-miterlimit="10" d="M489.729,280.79v-4.346
                                                        c0-0.333,0.135-0.603,0.302-0.603h-1.177c-0.269,0-0.485,0.27-0.485,0.603v4.346c0,0.333,0.217,0.604,0.485,0.604h1.177
                                                        C489.863,281.394,489.729,281.124,489.729,280.79z"/>
                                                    <path fill="#fff" d="M524.895,280.79v-4.346c0-0.333,0.143-0.603,0.318-0.603h-1.068c-0.269,0-0.486,0.27-0.486,0.603v4.346
                                                        c0,0.333,0.218,0.604,0.486,0.604h1.068C525.037,281.394,524.895,281.124,524.895,280.79"/>
                                                    <path fill="none" stroke="#000000" stroke-width="0.8471" stroke-miterlimit="10" d="M524.895,280.79v-4.346
                                                        c0-0.333,0.143-0.603,0.318-0.603h-1.068c-0.269,0-0.486,0.27-0.486,0.603v4.346c0,0.333,0.218,0.604,0.486,0.604h1.068
                                                        C525.037,281.394,524.895,281.124,524.895,280.79z"/>
                                                    
                                                    <path fill="none" stroke="#000000" stroke-width="1.4698" stroke-miterlimit="10" d="M488.041,272.949v-1.402
                                                        c0-1.296,0.836-2.388,1.978-2.727c-0.25-0.072-0.514-0.111-0.787-0.111c-1.566,0-2.837,1.271-2.837,2.837v1.402
                                                        c0,1.559,1.257,2.823,2.813,2.836c0.149,0.035,0.304,0.056,0.464,0.056h1.517c-0.152,0-0.302-0.021-0.445-0.056
                                                        C489.248,275.772,488.041,274.508,488.041,272.949z"/>
                                                    <text transform="matrix(1 0 0 1 502.4121 242.0361)" font-family="'BerlinSansFBDemi-Bold'" font-size="7.8389">s</text>
                                                    <text transform="matrix(1 0 0 1 507.4766 242.0361)" font-family="'BerlinSansFBDemi-Bold'" font-size="7.8389">s</text>
                                                    <text transform="matrix(1 0 0 1 512.2109 242.0361)" font-family="'BerlinSansFBDemi-Bold'" font-size="7.8389">s</text>
                                                    <text transform="matrix(1 0 0 1 516.6172 242.3652)" font-family="'BerlinSansFBDemi-Bold'" font-size="7.8389">s</text>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.9597" stroke-miterlimit="10" d="M498.865,246.246
                                                        c-1.132-1.08-2.664-1.746-4.353-1.746c-3.484,0-6.309,2.825-6.309,6.309v2.473c0,3.484,2.824,6.309,6.309,6.309
                                                        c0.899,0,1.754-0.191,2.527-0.53C496.867,254.703,497.476,250.431,498.865,246.246z"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.2784" stroke-miterlimit="10" x1="494.737" y1="244.092" x2="499.637" y2="244.092"/>
                                                    
                                                        <line fill="none" stroke="#000000" stroke-width="1.2784" stroke-miterlimit="10" x1="494.737" y1="248.405" x2="494.737" y2="244.092"/>
                                                    <path fill="#000"d="M499.745,262.708v-13.717c0-0.271,0.02-0.538,0.055-0.798v-4.102h-0.163c-2.706,0-4.899,2.194-4.899,4.899v13.717
                                                        c0,2.706,2.193,4.899,4.899,4.899h4.225C501.588,267.608,499.745,265.415,499.745,262.708"/>
                                                    <path fill="none" stroke="#000000" stroke-width="1.3945" stroke-miterlimit="10" d="M499.745,262.708v-13.717
                                                        c0-0.271,0.02-0.538,0.055-0.798v-4.102h-0.163c-2.706,0-4.899,2.194-4.899,4.899v13.717c0,2.706,2.193,4.899,4.899,4.899h4.225
                                                        C501.588,267.608,499.745,265.415,499.745,262.708z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="1.2784" stroke-miterlimit="10" d="M521.975,244.092h-14.337h-3.776H499.8v4.102
                                                        c-0.035,0.26-0.055,0.526-0.055,0.798v13.717c0,2.706,1.843,4.899,4.116,4.899h18.113c2.273,0,4.116-2.193,4.116-4.899v-13.717
                                                        C526.091,246.286,524.248,244.092,521.975,244.092z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="1.2784" stroke-miterlimit="10" d="M521.975,244.092h-14.337h-3.776H499.8v4.102
                                                        c-0.035,0.26-0.055,0.526-0.055,0.798v13.717c0,2.706,1.843,4.899,4.116,4.899h18.113c2.273,0,4.116-2.193,4.116-4.899v-13.717
                                                        C526.091,246.286,524.248,244.092,521.975,244.092z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="1.4404" stroke-miterlimit="10" d="M526.017,271.269h-32.538
                                                        c-0.135-1.437-1.298-2.559-2.712-2.559c-1.506,0-2.726,1.271-2.726,2.837v1.402c0,1.559,1.207,2.823,2.701,2.836
                                                        c0.144,0.035,0.293,0.056,0.445,0.056h34.829c1.133,0,2.049-1.024,2.049-2.287S527.149,271.269,526.017,271.269z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="0.6678" stroke-miterlimit="10" d="M491.961,280.954
                                                        c0,0.333-0.135,0.604-0.302,0.604h-1.629c-0.167,0-0.302-0.271-0.302-0.604v-4.346c0-0.333,0.135-0.604,0.302-0.604h1.629
                                                        c0.167,0,0.302,0.27,0.302,0.604V280.954z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="0.6678" stroke-miterlimit="10" d="M491.961,280.954
                                                        c0,0.333-0.135,0.604-0.302,0.604h-1.629c-0.167,0-0.302-0.271-0.302-0.604v-4.346c0-0.333,0.135-0.604,0.302-0.604h1.629
                                                        c0.167,0,0.302,0.27,0.302,0.604V280.954z"/>
                                                    <path fill="none" stroke="#000000" stroke-width="0.6862" stroke-miterlimit="10" d="M527.253,280.954
                                                        c0,0.333-0.143,0.604-0.32,0.604h-1.72c-0.176,0-0.318-0.271-0.318-0.604v-4.346c0-0.333,0.143-0.604,0.318-0.604h1.72
                                                        c0.178,0,0.32,0.27,0.32,0.604V280.954z"/>
                                                </g>
                                                <g id="l3" class="main_logo" >
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#000"stroke-width="1.3065" d="M491.143,275.509c1.247,0,2.384,0.003,3.521-0.001c2.316-0.01,4.189-1.794,4.258-4.051c0.073-2.387-1.638-4.286-4.02-4.394
                                                        c-1.219-0.056-2.441-0.01-3.716-0.01v-3.055c0.33,0,0.664,0.002,0.997,0c0.967-0.006,1.94,0.059,2.899-0.034
                                                        c2.35-0.227,3.918-2.115,3.83-4.516c-0.078-2.133-1.896-3.874-4.166-3.946c-1.175-0.038-2.352-0.007-3.57-0.007v-3.047
                                                        c1.126,0,2.236-0.012,3.345,0.003c0.885,0.013,1.697-0.195,2.449-0.663c1.521-0.948,2.289-2.862,1.833-4.589
                                                        c-0.495-1.873-2.023-3.154-3.883-3.204c-1.222-0.033-2.443-0.006-3.729-0.006c0-1.158-0.057-2.267,0.023-3.366
                                                        c0.043-0.604,0.669-0.986,1.398-0.993c1.956-0.017,3.911-0.014,5.867-0.014c9.241,0.001,18.482,0.005,27.724,0.005
                                                        c1.395,0,1.849,0.444,1.849,1.842c0,12.379,0,24.758,0,37.137c0,1.439-0.443,1.882-1.881,1.882
                                                        c-10.918,0.001-21.836,0.004-32.753,0.006c-0.279,0-0.561,0.008-0.839-0.011c-0.909-0.065-1.419-0.581-1.433-1.489
                                                        C491.13,277.855,491.143,276.721,491.143,275.509 M502.768,277.601h22.423v-35.123h-22.423V277.601z"/>
                                                    <path fill="#000"stroke-width="1.3065" d="M491.143,275.509c1.247,0,2.384,0.003,3.521-0.001c2.316-0.01,4.189-1.794,4.258-4.051c0.073-2.387-1.638-4.286-4.02-4.394
                                                        c-1.219-0.056-2.441-0.01-3.716-0.01v-3.055c0.33,0,0.664,0.002,0.997,0c0.967-0.006,1.94,0.059,2.899-0.034
                                                        c2.35-0.227,3.918-2.115,3.83-4.516c-0.078-2.133-1.896-3.874-4.166-3.946c-1.175-0.038-2.352-0.007-3.57-0.007v-3.047
                                                        c1.126,0,2.236-0.012,3.345,0.003c0.885,0.013,1.697-0.195,2.449-0.663c1.521-0.948,2.289-2.862,1.833-4.589
                                                        c-0.495-1.873-2.023-3.154-3.883-3.204c-1.222-0.033-2.443-0.006-3.729-0.006c0-1.158-0.057-2.267,0.023-3.366
                                                        c0.043-0.604,0.669-0.986,1.398-0.993c1.956-0.017,3.911-0.014,5.867-0.014c9.241,0.001,18.482,0.005,27.724,0.005
                                                        c1.395,0,1.849,0.444,1.849,1.842c0,12.379,0,24.758,0,37.137c0,1.439-0.443,1.882-1.881,1.882
                                                        c-10.918,0.001-21.836,0.004-32.753,0.006c-0.279,0-0.561,0.008-0.839-0.011c-0.909-0.065-1.419-0.581-1.433-1.489
                                                        C491.13,277.855,491.143,276.721,491.143,275.509 M502.768,277.601h22.423v-35.123h-22.423V277.601z"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" d="M491.44,250.192
                                                        c-1.053,0-2.105,0.007-3.158-0.001c-1.141-0.01-2.001-0.819-2.029-1.895c-0.031-1.127,0.782-2.039,1.936-2.057
                                                        c2.169-0.034,4.339-0.036,6.508-0.002c1.171,0.019,2.012,0.931,1.981,2.03c-0.029,1.101-0.903,1.912-2.08,1.925
                                                        c-0.537,0.006-1.074,0.005-1.61,0.005c-0.516,0-1.031,0-1.547,0C491.44,250.196,491.44,250.195,491.44,250.192z"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" d="M491.434,273.26
                                                        c-1.031,0-2.062,0.007-3.093-0.001c-1.214-0.01-2.085-0.838-2.09-1.973c-0.005-1.15,0.841-1.97,2.074-1.977
                                                        c2.083-0.012,4.166-0.016,6.249-0.005c1.224,0.006,2.1,0.843,2.104,1.967c0.004,1.122-0.88,1.973-2.089,1.987
                                                        C493.538,273.27,492.485,273.26,491.434,273.26z"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" d="M491.409,261.701
                                                        c-1.052,0-2.104,0.011-3.156-0.002c-1.185-0.016-1.999-0.825-2.006-1.968c-0.006-1.076,0.822-1.936,1.971-1.95
                                                        c2.124-0.028,4.249-0.027,6.374,0c1.25,0.016,2.102,0.858,2.087,1.977c-0.015,1.13-0.868,1.926-2.114,1.944
                                                        c-1.052,0.015-2.104,0.003-3.155,0.003C491.409,261.703,491.409,261.702,491.409,261.701z"/>
                                                    <path fill="#000" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" d="M516.946,265.658h-2.061v0.005
                                                        c-0.984-0.029-1.185-1.136-1.413-3.387c-0.15-1.51-0.199-3.373,0-5.232c0.143-1.301,0.381-2.572,1.443-2.575l2.024,0.006
                                                        l0.006-0.006c0.475,0,0.807-0.382,0.807-0.811h0.007c0,0-0.007-5.828-0.007-5.834c0-0.45-0.363-0.801-0.807-0.801h-2.061v0.003
                                                        c-1.258,0.158-5.626,2.235-5.756,12.605c-0.137,10.896,4.466,13.275,5.756,13.302v0.01c0,0,2.055,0.006,2.055,0h0.006
                                                        c0.475,0,0.807-0.382,0.807-0.811l0.007-0.006c0,0-0.007-5.664-0.007-5.67C517.753,266.009,517.39,265.658,516.946,265.658z"/>
                                                </g>
                                                <g id="l4" class="main_logo">
                                                    <path  d="M528.542,271.409c0,4.883-3.446,8.841-7.697,8.841h-27.066c-4.251,0-7.697-3.958-7.697-8.841v-22.251
                                                        c0-4.883,3.446-8.842,7.697-8.842h27.066c4.251,0,7.697,3.958,7.697,8.842V271.409z"/>

                                                    <path fill="#fff" stroke="#000000" stroke-width="1.3065" stroke-miterlimit="10" d="M528.542,271.409
                                                        c0,4.883-3.446,8.841-7.697,8.841h-27.066c-4.251,0-7.697-3.958-7.697-8.841v-22.251c0-4.883,3.446-8.842,7.697-8.842h27.066
                                                        c4.251,0,7.697,3.958,7.697,8.842V271.409z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>

                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#000" d="M520.977,261.54c1.46-1.291,2.104-2.868,1.823-4.751c-0.179-1.193-0.759-2.189-1.689-2.981
                                                        c-1.968-1.674-4.855-1.633-6.78,0.099c-2.146,1.931-2.168,4.494-0.141,7.324c-1.039,0.906-2.061,1.809-3.1,2.688
                                                        c-0.1,0.085-0.314,0.039-0.523-0.021c1.379-1.355,2.115-2.905,1.839-4.802c-0.185-1.265-0.813-2.304-1.817-3.129
                                                        c-1.869-1.536-4.702-1.462-6.559,0.195c-1.124,1.004-1.663,2.276-1.651,3.759c0.011,1.458,0.641,2.67,1.752,3.723
                                                        c-0.515,0.329-0.961,0.615-1.349,0.863c-0.961-0.849-1.885-1.664-2.813-2.483c2.274-2.913,2.319-5.595,0.077-7.604
                                                        c-1.937-1.735-5.003-1.708-6.889,0.061c-2.143,2.01-2.15,4.824-0.079,7.309c-1.232,1.049-2.462,2.095-3.654,3.109
                                                        c-0.965,1.495-2.392,2.739-3.506,4.054v4.119c0,3.784,3.115,6.853,6.959,6.853h28.706c3.843,0,6.959-3.068,6.959-6.853v-1.425
                                                        c-1.668-1.838-3.34-3.697-3.802-6.099C523.852,263.866,522.688,262.506,520.977,261.54 M496.521,267.488
                                                        c-1.016-1.776-1.963-3.435-2.911-5.094c1.942,1.043,3.841,1.035,5.876,0.18C498.526,264.164,497.567,265.752,496.521,267.488
                                                         M507.316,269.3c-1.05-1.841-2.011-3.525-2.972-5.209c0.045-0.062,0.089-0.123,0.134-0.185c1.908,1.214,3.847,1.158,5.807,0.147
                                                        c0.032,0.051,0.065,0.103,0.098,0.154C509.399,265.841,508.416,267.475,507.316,269.3 M517.659,266.944
                                                        c-1.022-1.798-1.965-3.454-2.906-5.109c1.955,1.047,3.85,1.055,5.78,0.047c0.029,0.049,0.059,0.098,0.087,0.146L517.659,266.944z"
                                                        />
                                                    <path fill="#000" d="M520.977,261.54c1.46-1.291,2.104-2.868,1.823-4.751c-0.179-1.193-0.759-2.189-1.689-2.981
                                                        c-1.968-1.674-4.855-1.633-6.78,0.099c-2.146,1.931-2.168,4.494-0.141,7.324c-1.039,0.906-2.061,1.809-3.1,2.688
                                                        c-0.1,0.085-0.314,0.039-0.523-0.021c1.379-1.355,2.115-2.905,1.839-4.802c-0.185-1.265-0.813-2.304-1.817-3.129
                                                        c-1.869-1.536-4.702-1.462-6.559,0.195c-1.124,1.004-1.663,2.276-1.651,3.759c0.011,1.458,0.641,2.67,1.752,3.723
                                                        c-0.515,0.329-0.961,0.615-1.349,0.863c-0.961-0.849-1.885-1.664-2.813-2.483c2.274-2.913,2.319-5.595,0.077-7.604
                                                        c-1.937-1.735-5.003-1.708-6.889,0.061c-2.143,2.01-2.15,4.824-0.079,7.309c-1.232,1.049-2.462,2.095-3.654,3.109
                                                        c-0.965,1.495-2.392,2.739-3.506,4.054v4.119c0,3.784,3.115,6.853,6.959,6.853h28.706c3.843,0,6.959-3.068,6.959-6.853v-1.425
                                                        c-1.668-1.838-3.34-3.697-3.802-6.099C523.852,263.866,522.688,262.506,520.977,261.54 M496.521,267.488
                                                        c-1.016-1.776-1.963-3.435-2.911-5.094c1.942,1.043,3.841,1.035,5.876,0.18C498.526,264.164,497.567,265.752,496.521,267.488
                                                         M507.316,269.3c-1.05-1.841-2.011-3.525-2.972-5.209c0.045-0.062,0.089-0.123,0.134-0.185c1.908,1.214,3.847,1.158,5.807,0.147
                                                        c0.032,0.051,0.065,0.103,0.098,0.154C509.399,265.841,508.416,267.475,507.316,269.3 M517.659,266.944
                                                        c-1.022-1.798-1.965-3.454-2.906-5.109c1.955,1.047,3.85,1.055,5.78,0.047c0.029,0.049,0.059,0.098,0.087,0.146L517.659,266.944z"
                                                        />
                                                    <path fill="#000" d="M520.977,261.54c1.46-1.291,2.104-2.868,1.823-4.751c-0.179-1.193-0.759-2.189-1.689-2.981
                                                        c-1.968-1.674-4.855-1.633-6.78,0.099c-2.146,1.931-2.168,4.494-0.141,7.324c-1.039,0.906-2.061,1.809-3.1,2.688
                                                        c-0.1,0.085-0.314,0.039-0.523-0.021c1.379-1.355,2.115-2.905,1.839-4.802c-0.185-1.265-0.813-2.304-1.817-3.129
                                                        c-1.869-1.536-4.702-1.462-6.559,0.195c-1.124,1.004-1.663,2.276-1.651,3.759c0.011,1.458,0.641,2.67,1.752,3.723
                                                        c-0.515,0.329-0.961,0.615-1.349,0.863c-0.961-0.849-1.885-1.664-2.813-2.483c2.274-2.913,2.319-5.595,0.077-7.604
                                                        c-1.937-1.735-5.003-1.708-6.889,0.061c-2.143,2.01-2.15,4.824-0.079,7.309c-1.232,1.049-2.462,2.095-3.654,3.109
                                                        c-0.965,1.495-2.392,2.739-3.506,4.054v4.119c0,3.784,3.115,6.853,6.959,6.853h28.706c3.843,0,6.959-3.068,6.959-6.853v-1.425
                                                        c-1.668-1.838-3.34-3.697-3.802-6.099C523.852,263.866,522.688,262.506,520.977,261.54 M496.521,267.488
                                                        c-1.016-1.776-1.963-3.435-2.911-5.094c1.942,1.043,3.841,1.035,5.876,0.18C498.526,264.164,497.567,265.752,496.521,267.488
                                                         M507.316,269.3c-1.05-1.841-2.011-3.525-2.972-5.209c0.045-0.062,0.089-0.123,0.134-0.185c1.908,1.214,3.847,1.158,5.807,0.147
                                                        c0.032,0.051,0.065,0.103,0.098,0.154C509.399,265.841,508.416,267.475,507.316,269.3 M517.659,266.944
                                                        c-1.022-1.798-1.965-3.454-2.906-5.109c1.955,1.047,3.85,1.055,5.78,0.047c0.029,0.049,0.059,0.098,0.087,0.146L517.659,266.944z"
                                                        />
                                                    <polygon fill="#000000"points="528.297,272.085 524.74,272.085 524.74,265.548 526.519,265.548 528.297,265.548    "/>
                                                    <rect fill="#000" x="486.363" y="265.548" width="3.556" height="6.537"/>
                                                </g>
                                                <g id="l5" class="main_logo" fill="000">
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.696,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.187-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path fill="#fff" stroke="#000000" stroke-width="1.5626" stroke-miterlimit="10" d="M532.475,280.117
                                                        c0,2.697-2.186,4.883-4.883,4.883h-40.234c-2.697,0-4.883-2.186-4.883-4.883v-40.234c0-2.697,2.186-4.883,4.883-4.883h40.234
                                                        c2.697,0,4.883,2.186,4.883,4.883V280.117z"/>
                                                    <path  d="M521.137,239.869h-27.163c-3.751,0-6.79,2.817-6.79,6.293v5.78c0-3.706,3.039-6.709,6.79-6.709h27.163
                                                        c3.752,0,6.791,3.004,6.791,6.709v-5.78C527.928,242.687,524.889,239.869,521.137,239.869"/>
                                                    <path fill="#000"  stroke="#000000" stroke-width="1.6342" stroke-miterlimit="10" d="M521.137,239.869h-27.163
                                                        c-3.751,0-6.79,2.817-6.79,6.293v5.78c0-3.706,3.039-6.709,6.79-6.709h27.163c3.752,0,6.791,3.004,6.791,6.709v-5.78
                                                        C527.928,242.687,524.889,239.869,521.137,239.869z"/>

                                                    <path fill="#fff" stroke="#000000" stroke-width="1.6875" stroke-miterlimit="10" d="M527.928,273.748
                                                        c0,3.706-3.039,6.709-6.791,6.709h-27.163c-3.751,0-6.79-3.004-6.79-6.709v-21.806c0-3.706,3.039-6.709,6.79-6.709h27.163
                                                        c3.752,0,6.791,3.004,6.791,6.709V273.748z"/>

                                                    <path fill="#000"d="M489.578,279.647c0.573-2.431,1.967-4.084,4.166-5.051c2.681-1.179,5.516-1.307,8.326-0.81
                                                        c1.515,0.267,2.295-0.059,3.084-1.404c1.814-3.091,3.85-6.053,5.795-9.067c0.152-0.234,0.316-0.461,0.541-0.791
                                                        c1.043,1.485,2.029,2.891,3.018,4.296c0.979,1.39,1.957,2.778,3.012,4.275c1.063-1.469,2.074-2.872,3.174-4.393
                                                        c1.479,4.383,2.91,8.627,4.367,12.944H489.578z"/>
                                                    <path fill="#000"d="M489.578,279.647c0.573-2.431,1.967-4.084,4.166-5.051c2.681-1.179,5.516-1.307,8.326-0.81
                                                        c1.515,0.267,2.295-0.059,3.084-1.404c1.814-3.091,3.85-6.053,5.795-9.067c0.152-0.234,0.316-0.461,0.541-0.791
                                                        c1.043,1.485,2.029,2.891,3.018,4.296c0.979,1.39,1.957,2.778,3.012,4.275c1.063-1.469,2.074-2.872,3.174-4.393
                                                        c1.479,4.383,2.91,8.627,4.367,12.944H489.578z"/>

                                                    <path fill="#000"d="M497.267,259.371c2.159-0.007,3.96,1.771,3.981,3.931c0.021,2.189-1.781,4.008-3.979,4.016
                                                        c-2.158,0.007-3.967-1.778-3.982-3.932C493.271,261.186,495.063,259.378,497.267,259.371"/>
                                                    <path fill="#000"d="M497.267,259.371c2.159-0.007,3.96,1.771,3.981,3.931c0.021,2.189-1.781,4.008-3.979,4.016
                                                        c-2.158,0.007-3.967-1.778-3.982-3.932C493.271,261.186,495.063,259.378,497.267,259.371"/>
                                                </g>
                                            </g>
                                            <g id="g0" class="fin" fill="none">
                                                <g id="path_wrapper" class="path_wrapper">
                                                    <path  id="snap1"  stroke-miterlimit="10" d="M585.37,300.47
                                                    c-95.252-0.668-187.51,0.195-284.854,0c-3.688-20.181,2.021-39.725,10.129-56.556c29.271-60.723,99.66-87.756,162.314-61.248
                                                    c51.932,21.971,86.576,62.748,111.801,112.643C585.405,296.589,585.144,298.343,585.37,300.47z"/>
                                                </g>
                                            </g>
                                        </svg>
                        </div>
                        <div id="dynamic">
                        
