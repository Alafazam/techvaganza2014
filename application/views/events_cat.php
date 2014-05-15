    <div id="events">
        <div class="page-header container-fluid">
          <h1 class="center">Events </h1>
        </div>
            <div class="">
                <ul class="ca-menu">
                    <?php
						foreach( $events as $event){
					?>                    
                    	<li class="ca-menu li">
                        	<span class="ca-icon" ><i class="icon-<?=$event['view_name']?>"></i></span>
                            <a class="icallajax" href="<?php 
							
							if (file_exists(APPPATH."views/events/".$event['view_name'].".php"))
							{							    
								echo "/events/".$event['category']."/".$event['event_id'];
							} 
							else{
								echo "/comingsoon";
							}
							?>">
                                <div class="ca-content">
                                    <h2 class="ca-main"><?=$event['name']?></h2>
                                </div>
                            </a>
                        </li>
                	<?php
						}
					?>
                </ul>
            </div>
    </div>                
