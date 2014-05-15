    <div class="col glass">
        <div class="page-header container-fluid">
          <h1 class="center">Events </h1>
        </div>
        <div id="my-events">
            <?php
                foreach( $events as $event){
            ?>                    
                <div class="me-event">
                    <span class="me-icon"><i class="icon-<?=$event['view_name']?>"></i></span>
                    <a class="icallajax" href="<?php 
                    
                    if (file_exists(APPPATH."views/events/".$event['view_name'].".php"))
                    {							    
                        echo "/events/".$event['category']."/".$event['event_id'];
                    } 
                    else{
                        echo "/comingsoon";
                    }
                    ?>">
                        <div class="me-content">
                            <h2><?=$event['name']?></h2>
                        </div>
                    </a>
            	</div>
            <?php
                }
            ?>
        
        </div>   
    </div>             
