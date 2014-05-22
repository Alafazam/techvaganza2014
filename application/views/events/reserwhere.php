<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">Reser-Where</h1>
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
			<h2>About : </h2>
			<p>This event is about construction of masonry reservoir whose capacity should be 120 liters. It is a team event and each team will comprise of 2 or 3 members.</p>
		</div>
		
		<div class="e_text">
			<h2>Rules and Regulations : </h2>
			<ul>
				<li>It is a two round competition.</li>
				<li>The competition is open to all branches.</li>
				<li>Rounds Specifications: First round will be a screening test comprises of MULTIPLE CHOICE questions. Second round will be construction round.</li>
				<li>In first round there will be 30 questions which have to be answered in 15 mins.</li>
				<li>2nd round will be of 3 hours and only top 5 teams clearing the screening test will be eligible.</li>
				<li>Organizers' decision will be final and binding on all.</li>
				<li>Organizers reserve rights to amend or add the rules at later stage which will be notified to the participants via website prior to the competition.</li>
				<li>The results will be declared after proper judgement, based on various criteria.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Judging Criteria :</h2>
			<p>The winners will be decided on the basis of following criteria – </p>
			<ul>
				<li>Verticality of sidewalls</li>
				<li>Sharpness of joints (if used)</li>
				<li>Water-tight (if any)</li>
				<li>Stability of structure</li>
			</ul>
		</div>
        <div class="e_text">
			<h2>Contacts :</h2>
			<ul>
            	<li>Mufti Minaam<br /> 9796364679 </li>
				<li>Sandeep Kumar<br />9469515833</li>
				<li>Abhinav Verma<br />9018608153, 7298480610</li>
				<li>Sandeep Gupta<br /> 9596167616</li>
				<li>Shubham Pathak<br /> 9086413447</li>
			</ul>
		</div>
	</div>
</div>