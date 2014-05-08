 <style type="text/css">
#events h2,p{
  font-size:100%;
  font-weight:normal;
}
#events ul,li{
  list-style:none;
}
#events ul{
  overflow:hidden;
  padding:3em;
}
#events ul li a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:10em;
  width:10em;
  padding:1em;
}
#events ul li{
  margin:1em;
  float:left;
}
#events ul li h2{
  font-size:140%;
  font-weight:bold;
  padding-bottom:10px;
}
#events ul li p{
  font-family:"Reenie Beanie",arial,sans-serif;
  font-size:180%;
}
#events ul li a{
  text-decoration:none;
  color:#000;
  background:#ffc;
  display:block;
  height:10em;
  width:10em;
  padding:1em;
  -moz-box-shadow:2px 3px 5px rgba(33,33,33,1);
  -webkit-box-shadow: 2px 3px 5px rgba(33,33,33,.7);
  box-shadow: 2px 3px 5px rgba(33,33,33,.7);
  -moz-transition:-moz-transform .15s linear;
  -o-transition:-o-transform .15s linear;
  -webkit-transition:-webkit-transform .15s linear;
}



#events ul li:nth-child(5n) a{
  -o-transform:rotate(5deg);
  -webkit-transform:rotate(5deg);
  -moz-transform:rotate(5deg);
  position:relative;
  top:-10px;
}
#events ul li:nth-child(even) a{
  -o-transform:rotate(4deg);
  -webkit-transform:rotate(4deg);
  -moz-transform:rotate(4deg);
  position:relative;
  top:5px;
  background:#cfc;
}
#events ul li:nth-child(3n) a{
  -o-transform:rotate(-3deg);
  -webkit-transform:rotate(-3deg);
  -moz-transform:rotate(-3deg);
  position:relative;
  top:-5px;
  background:#ccf;
}

#events ul li a:hover,#events  ul li a:focus{
  -moz-box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-box-shadow: 10px 10px 7px rgba(0,0,0,.7);
  box-shadow:10px 10px 7px rgba(0,0,0,.7);
  -webkit-transform: scale(1.25);
  -moz-transform: scale(1.25);
  -o-transform: scale(1.25);
  position:relative;
  z-index:5;
}



</style>
    <div id="events">
        <div class="page-header container-fluid">
          <h1 class="center">Events </h1>
        </div>
            <div class="">
                <ul class="">
                    <?php
						foreach( $events as $event){
					?>                    
                    	<li class="">
                            <a class="icallajax" href="<?php 
							
							if (file_exists(APPPATH."views/events/".$event['view_name'].".php"))
							{							    
								echo "/events/".$event['category']."/".$event['event_id'];
							} 
							else{
								echo "/comingsoon";
							}
							?>">
                                <div class="">
                                    <h2 class=""><?=$event['name']?></h2>
                                </div>
                            </a>
                        </li>
                	<?php
						}
					?>
                </ul>
            </div>
    </div>                
