    <div id="events">
        <div class="page-header container-fluid">
          <h1 class="center">Events</h1>
        </div>
            <div class="">
                <ul class="ca-menu">
                    <?php
						foreach( $events as $event){
					?>                    
                    	<li class="ca-menu li">
                            <a class="icallajax" href="/events/<?php echo $event['category']."/".$event['event_id'] ?>">
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
