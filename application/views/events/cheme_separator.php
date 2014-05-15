<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">Cheme-Cars</h1>
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
			<h2>Aim</h2>
			<p class='italic'>To design a ecofriendly prototype car, which can attain a maximum velocity. </p>
		</div>		
		<div class="e_text">
			<h2>Description &amp; rules-</h2>
			<ul>
				<li>Design a prototype car.</li>
				<li>Car should be powered by any chemical reaction.</li>
				<li>A team should contain at least two members.</li>
				<li>No mechanical device is allowed to accelerate the car.</li>
				<li>Treatment of industrial fluids</li>
				<li>Dewatering of sludge in wastewater treatment plants</li>
				<li>Cleaning of crankcase gases from truck and ship diesel engines </li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Aim</h2>
			<p>To eliminate oversize granules or to purify impure liquid.
			</p>
		</div>
		<div class="e_text">
			<h2>Judgement criteria: </h2>
			<ul>
				<li>Displacement and time to reach that much displacement.</li>
				<li>Plus points for model structure and look.</li>
				<li>Plus point for ecofriendly fuel.</li>
				<li>Decision of judges is final.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Arena</h2>
			<p>Drawing Hall</p>
		</div>
		<div class="e_text">
			<h2>Prize money</h2>
			<ul>
				<li>1st Prize- INR. 5,000/-</li>
				<li>2nd Prize- INR. 3,000/-</li>
				<li>3rd Prize- INR. 2,000/-</li>
				<li>Certificate of Participation for all participants.</li>
				<li>Certificate of  Excellence for all winners.</li>
			</ul>
		</div>
		
		<div class="e_text">
			<h2>Contact : </h2>
			<ul>
				<h3>Event Managers</h3>
				<li>Mukesh Kalita                     +918803635003					</li>
				<li>Sanjay Verma                      +919697276052                 </li>
				<h3>Event coordinators</h3>
				<li>Goverdhan singh                   +919697537185                 </li>
				<li>Swyam gupta                       +919086413422                 </li>
				<li>Rishab                            +918715966919					</li>
			</ul>
		</div>
	</div>
</div>
