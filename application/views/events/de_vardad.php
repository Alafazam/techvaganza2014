<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">De-vardad ingeniero</h1>
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
			<h2>Introduction</h2>
			<p>This event combines the idea of Electrical Engg., Electronics &amp; Communication Engg., Computer Science Engg. and Information Technology . It is mainly focus on practicability of a participant. It has three rounds.
			</p>
		</div>
		
		
		<div class="e_text">
			<h2>Design the Circuit</h2>
			<p> This round is time based. In this round each participant or each group of participants will be provided with some wire, circuit board, clock and all necessary equipment. With the help of provided equipment they will have to make a circuit with the following characteristics:
			</p>
			<ul>
				<li>Clock is running according to the circuit.
				</li>
				<li>Clock shows time which shows how long that circuit works.</li>
				<li>From this round, five teams are select for further rounds.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Assemble the CPU</h2>
			<p> This round is also time-based. Each team will have to assemble a CPU as fast as they can. Three teams will qualify for the final round.
			</p>
			
		</div>
		<div class="e_text">
			<h2>Friends become your enemy</h2>
			<p>  As the name suggest, you have to compete with your team-mate for winning. Participant will have to complete with other participant to win. In this round, programming knowledge of each participant is tested.
			</p>
			
		</div>
		<div class="e_text">
			<h2>Rules</h2>
			<ul>
				<li>Each team must contain maximum of two members.</li>
				<li>In case of tie (for round 2), scores of previous round will be used for ranking.</li>
				<li>You have to use items that are provided by us. You cannot use any item of your own.</li>
				<li>Involving in any illegal activity automatically disqualifies you.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Prize Money</h2>
			<ul>
				<li>INR 5000</li>
				<li>INR 3000</li>
				<li>INR 2000</li>
			</ul>
			
		</div>
		<div class="e_text">
			<h2>Contact : </h2>
			<ul>
            	<li>Yogesh Kumar<br/>
                	9086944668</li>
            	<li>Priya Ranjan<br/>
                	9796534393</li>
			</ul>
		</div>
	</div>
</div>