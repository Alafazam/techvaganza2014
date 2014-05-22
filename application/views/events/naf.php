<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">NAF</h1>
			<?php
			if($username){
			if(!$isRegistered){
			?>
			<a class="reg_button_class" href="/events/<?=$event['category']?>/<?=$event['event_id']?>/register"><input id="reg_button" type="submit" name="submit" value="Register"></a>
			<?php
			}else{
			?>
			<a class="reg_button_class" href="/events/<?=$event['category']?>/<?=$event['event_id']?>/unregister"><input id="unreg_button" type="submit" name="submit" value="Unregister"></a>
			<?php
			}
			}else{
			?>
			<a class="reg_button_class" href="/login"><input type="submit" value="Register"></a>
			<?php
			}
			?>
		</div>
		<div class="e_text">
			<p></p>
			<h2>Adventure sports @ NIT Srinagar</h2>
			<p></p>
			<p>
			National Institute of Technology, Srinagar, in association with National Adventure Foundation (NAF) is organising various adventurous sports in the campus.</p>
			<p>This is  the first time any engineering college in North India is organising any such activity.</p>
			<p>The activities include Rappelling, Jamuring, rope bridge crossing, Rock Climbing and a special presentation on rescue operations & life saving knots.</p>
			<p>These activities aim at exposing the youth to adventure sports and inculcating the sprit of accepting new challenges.</p>
			<p>National Adventure Foundation (NAF) is a non commercial, socially oriented, philanthropic, non governmental organisation (NGO), committed to the promotion of adventure activities and sports among the youth of the country.</p>
			<p>Mr. Umar Rafiq, Director, NAF(Kashmir Chapter) will be mentoring the event. </p>	
            <h2>Only 150 entries. Hurry!!!</h2>
		</div>
        <div class="e_text">
        	<h2>Instructions</h2>
        	<ul>
            	<li>Students are requested to carry their ID cards to the Venue.</li>
				<li>Participants are advised to wear something comfortable.</li>
            </ul>
        </div>
	<div class="e_text">
		<h2>Contact:</h2>
		<p>Saransh Gupta +919419208952</p>
	</div>
</div>