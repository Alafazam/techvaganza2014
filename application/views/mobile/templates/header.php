<?php
  $username= $this->session->userdata('logged_in');
  $username=$username['username'];
?><!DOCTYPE html>
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
          <a class="navbar-brand" <?php if(isset($username))
                                            {
                                                echo    'href="/home">Welcome '.$username ;
                                            }
                                            else
                                            {
                                                echo    'href="/register"> Register';
                                            }
                                            ?></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="/events">Events</a></li>
            <li><a href="/hospitality">Hospitality</a></li>
            <li><a href="/contacts">Contact</a></li>
            <li><a href="/comingsoon">Workshops</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div id="akt_content" >