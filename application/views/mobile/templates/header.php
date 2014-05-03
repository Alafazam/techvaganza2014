<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Techvaganza</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/login_form.css" />
    <link rel="stylesheet" type="text/css" href="/css/main-mobile.css" />

<style type="text/css">
  body{
    background: black;
    color: white;
  font-size: 1.8em;
  }
.btn-default {
  padding-bottom: 10px;
  padding-top:10px ;
  color: #fff;
  background-color: #110E0E;
  border-color: black;
}
.btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open .dropdown-toggle.btn-default {
  color: #fffdfd;
  background-color: #444444;
  border-color:black;
}
.bottom_stiatic{
margin-bottom: -10px;
}


a:hover{text-decoration: none;}

</style>
    </head>
    
    <body class="max-500">
    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" <?php 						if(isset($first_name))
                                            {
                                                echo    'href="/home">Welcome '.$first_name ;
                                            }
                                            else
                                            {
                                                echo    'href="/register"> Register';
                                            }
                                            ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events <span class="caret"></span></a>
              <ul class="dropdown-menu">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Creatives <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Heat Exchange</a></li>
                      <li><a href="#">Captive Dynamics</a></li>
                      <li><a href="#">Fulcrum</a></li>
                      <li><a href="#">Witricity</a></li>
                      <li><a href="#">Optro-Acoustics</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bob the builder <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Konstructure</a></li>
                      <li><a href="#">Bridge the gap</a></li>
                      <li><a href="#">College planning</a></li>
                      <li><a href="#">Reser-where</a></li>
                      <li><a href="#">Truss-o-meniac</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Code-shode <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Android-Basics</a></li>
                      <li><a href="#">Android-Advance</a></li>
                      <li><a href="#">Go-fix-it</a></li>
                      <li><a href="#">De varded junginerio</a></li>
                      <li><a href="#">Trouble-shooting</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Fixer-Elixer <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Junkyard</a></li>
                      <li><a href="#">Transform-it</a></li>
                      <li><a href="#">Nirman</a></li>
                      <li><a href="#">The Estimator</a></li>
                      <li><a href="#">Traffixing</a></li>
                      <li><a href="#">Minimal motor</a></li>
                      <li><a href="#">Filter-the-litter</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Robonoids <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">SmackDown</a></li>
                      <li><a href="#">Rescue-bot</a></li>
                      <li><a href="#">Line-follower</a></li>
                      <li><a href="#">Mystry-Box</a></li>
                      <li><a href="#">Ember-sys</a></li>
                    </ul>
                  </li>
              </ul>
            </li>
            <li><a href="#Hospitality">Hospitality</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Workshops<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Coming soon</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div id="akt_content" >