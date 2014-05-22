<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">LINE FOLLOWER </h1><a href="/pdfs/line_follower.pdf" target="new"> [pdf]</a>
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
			<h2>EVENT</h2>
			<ul>
				<li>ROUND 1 (mine sweeper)</li>
				<li>ROUND 2 (collecto-bot)</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Mine-Sweeper</h2>
			<h4>DESCRIPTION:</h4>
			<p>This competition is just an attempt to diversify the robotic applications. You will be provided a random maze sketched on an elevated platform, white mines will be placed randomly on the maze tracks. All you have to do is to find these mines and sweep them off the platform. While doing so your robot may come out of maze, as this maze won’t cover the platform till its boundaries. So next challenge will be to get back on the maze in whatever way possible and sweep off remaining mines. Time limit will be 5 minutes for each team.</p>
			
			<h4>ARENA SPECIFICATION:-</h4>
			<p>Robot mine-sweeping will take place on an elevated platform approximately 6 feet long and 4 feet wide. Maze will cover only two-thirds of an area, so there will b an empty space between maze and the boundaries of platform. Platform will be white and the tracks of maze black.</p>
			
			<h4>THE PLAY:-</h4>
			<p>Your robot will be placed at the violet line marking the start of maze. From this your robot has to follow the lines, and cover the maximum area of the maze so as to sweep off the maximum number of mines.</p>
			
			<h4>ROBOT SPECIFICATION:-</h4>
			<ul>
				<li> Robot must be autonomous. </li>
				<li>The mines will be light weighted, so no need to go for strength development of your bot.</li>
				<li>A sort of bumper to be fitted in front of your robot which extends just a few millimetres ahead of sensor, so as to avoid the damage of sensor while pushing the mines. </li>
			<p></p>
			</ul>
			
			<h4>RULES & REGULATIONS:-</h4>
			<ul>
			<li>A team may have maximum 3 members. Only one member will operate the robot in a single match.</li>
			<li>There will be two rounds.</li>
			</ul>
			<p></p>
			<h4>POINTS DISTRIBUTION:-</h4>
			<ul>
				<li>The points will be awarded on the following basis-
					<ul>
						<li>20 points to be awarded for each mine swept off successfully. </li>
						<li>40 Bonus Points to be awarded if contestant sweeps off all mines in less than 3.5 minutes, 30 for less than 4 minutes, 20 for less than 4.5 minutes and 10 for less than 5 minutes.  </li>
					</ul>
				</li>
				<li>Five teams who accumulate most points will make it to the final where 1st, 2nd and 3rd place will be decided by round The Collecto-bot.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>The Collecto-bot</h2>
			<h4>DESCRIPTION:-</h4>
			<p>This competition is to check the extent of synchronisation of your robot with the tasks it perform. You will be provided a random branched track, where each branch leads to the Ball-tunnel. ‘Ball-tunnel’ consists of a light weighted cardboard tunnel placed on a fulcrum. Cardboard tunnel will be balanced backward, so the ball will be on the opposite end of tunnel. Your robot needs to swing this tunnel forward with the arm provided, so as to collect the ball into it its trolley (this is subjected to the availability of stepper motors, otherwise another way of swinging this trolley will be updated very soon). After collecting the ball, your robot has to move back to the main track and collect other balls.</p>
			
			<h4>ARENA SPECIFICATION:-</h4>
			<p>The tracks and ‘ball tunnels’ will cover approximately 6*4 feet area. Tracks will be black in color.</p>
			
			<h4>THE PLAY:-</h4>
			<p>Your robot will be placed at the violet line marking the start of main track. From this your robot has to follow the track, and take left or right turns wherever there are branches.  The coordinate where robot has to stop in order to collect the ball will be specified by a black line perpendicular to the track.</p>
			
			<h4>ROBOT SPECIFICATION:-</h4>
			<ul>
				<li> Robot must be autonomous.</li>
				<li>A sort of bumper to be fitted in front of your robot which extends just a few millimetres ahead of sensor, so as to avoid the damage of sensor while bumping into something. </li>
			</ul>
			<p></p>
			<h4>POINTS DISTRIBUTION:-</h4>
			<ul>
				<li>The points will be awarded on the following basis-
					<ul>
						<li>20 points to be awarded for each ball collected successfully</li>
						<li>40 Bonus Points to be awarded if contestant collects all balls in less than 3.5 minutes, 30 for less than 4 minutes, 20 for less than 4.5 minutes and 10 for less than 5 minutes.  </li>
					</ul>
				</li>
				<li> Three teams who accumulate most points will be judged as 1st, 2nd and 3rd.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Certificate Policy</h2>
			<ul>
				<li>Certificate of excellence will be awarded to the top 3 winners.	</li>
				<li>Certificate of participation will be awarded to all the teams who clear the first round without failure of the structure and also are able to score more than 40 points in the first round.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Prize Money</h2>
			<ul>
				<li>1st prize- Rs. 5000/-</li>
				<li>2nd prize- Rs. 3000/-</li>
				<li>3rd prize- Rs. 2000/-</li>
			</ul>
		</div>
		<div class="e_text">
		<h2>Contact Details</h2>
		<ul>
			<li>Tinku Bhagat  8803244039</li>
			<li>Bacit Andrabi 7298480194</li>
		</ul>
	</div>
</div>