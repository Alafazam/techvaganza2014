<?php 
$winners = array(200,300,500,750,1000,5000);

if(in_array($user['id'], $winners)){ ?>
        <div class="max-480 glass" style="background:#001141">
            <p class="clearfix winner center">Congrats, you are <?=$user['id']?>th User on our website.<br />
            You have won a gift voucher.<br />
            Please, contact Hospitality team to claim your Voucher<br />
            Phone: <a href="tel:07298470136">+917298470136</a></p>
        </div>
<?php } 
?>
   	<div  id="content">
    <div class="db-nav">
        	<ul class="clearfix">
            	<li class="clearfix"><a href="/home/profile"><input type="submit" value="Profile" /></a></li>                
            	<li class='current clearfix'><a href="/home"><input type="submit" value="My Events" /></a></li>   
                <?php if(isset($user['special'])){ ?>          
            	<li class="clearfix"><a href="/home/registrations"><input type="submit" value="Registrations" /></a></li>
                <?php } ?>
            </ul>
    </div>
    <div class="col glass" style="margin-top:0;">
    	<p></p>
        <div class="page-header container-fluid">
          <h1 class="center" style="margin-bottom:10px">My Events </h1>
        </div>
        <hr />
        <div id="my-events">
            <?php
                foreach( $events as $event){
            ?>                    
                <div class="me-event">
                   <!-- <span class="me-icon"><i class="icon-<?=$event['view_name']?>"></i></span>-->
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
                            <h3><?php if(isset($event['desciption'])) echo $event['description']?></h3>
                        </div>
                    </a>
					<a class="reg_button_class" href="/events/<?=$event['category']?>/<?=$event['event_id']?>/unregister?r=home"><input id="unreg_button" type="submit" name="submit" value="Unregister"></a>
            	</div>
            <?php
                }
            ?>
        
        </div>   
    </div>    
    </div>         
