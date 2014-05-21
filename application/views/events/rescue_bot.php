	<div id="content">
        <div class="col glass"> 
        <div class="page-header container-fluid">
          <h1 class="center">Rescue Bot </h1><a href="/pdfs/rescue_bot.pdf" target="new"> [pdf]</a>
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
				<h2>Description : </h2>
				<p>this event is based on participant's ability to make optimality decisions and tuning of their robot to perform rescue operations.
					RESCUE PEOPLE AND WIN
					NO REGISTRATION FEES.
					'THIS EVENT IS OPEN TO ALL BRANCHES.'</p>
			</div>
			
			
			<div class="e_text">
				<h2>Rules and Regulations : </h2>
				<ul>
					<li>Motor should use maximum 24 V.</li>
					<li>Maximum number of team members = 4.</li>
					<li>If a machine tumbles, or halts, or goes off the arena at any point on the track, one of the team members is allowed to lift it up and keep it back. The time shall still be running in the meantime.</li>
					<li>If any of the machines starts off before the flag is waved, they would face a penalty of 3 seconds.</li>
					<li>Team members are not permitted to touch either their machines or those of their opponents once the race begins (unless there is need to lift the machine as stated in first point). The penalty for doing so is disqualification.</li>
					<li>round there will be maximum two team members allowed from a team in the racing arena.</li>
					<li>The machines are not allowed to leave any loose parts on any part of the arena. Any machine disintegrating during the race will be disqualified.</li>
					<li>Teams are not allowed to purposefully damage the machine of the opponent's team. If found doing so on track (while racing), the concerned team will be disqualified. Execution of last three rules will be subjective and relies completely on judges' discretion.</li>
                    <li>Maximum width of bot should be less than 20cm.</li>
					<p></p>
				</ul>
				<h3>General Rules : </h3>
				<ul>
					<li>The teams may obtain a time slot for practice before first round of the game. The number of practice slots will be limited and the slots will be given on a first come first served basis. The teams will get to use the track only during the time of their practice slot. Any requests for using the track at any other time will not be entertained.</li>
					<li>Any team that is not ready at the time specified will be eliminated from the competition automatically.</li>
					<li>The teams must adhere to the spirit of healthy competition. The teams must not damage the opponent's machine in any way. Judges reserve the right to disqualify any team indulged in misbehavior.</li>
					<li>The name of your machine should be prominently displayed on the machine.</li>
					<li>Judges decision shall be treated as final and binding on all.</li>
					<li>The organizers reserve the rights to change any or all of the above rules as they deem fit. Change in rules, if any will be highlighted on the website and notified to the registered participants</li>

				</ul>
			</div>
			<div class="e_text">
        	    <p></p>
				<h2>Instructions : </h2>
				<h3>ROUND-1</h3>
				<ul>
					<li>Participants will have to reach final point in shortest time via a single rescue point on tracks with varying  obstacle difficulty levels and track lengths.
CHOOSE CAREFULLY!!!</li>
					<li>The bot has to stop in the specified rescue region around rescue point for 5 seconds. Crossing the boundary or stopping for less time would invoke penalties.</li>
					<li>This simulates a real life rescue situation in which you have to reach the rescue points navigating rough destroyed tracks, help the trapped people and deliver them to a rehabilitation camp.</li>

				</ul>
				<h3>ROUND-2:</h3>
				<ul>
					<li>Participant's  bot will have to pass through atleast three rescue points out of five points in shortest time.</li>
					<li>Same rules as round 1.</li>
					<li>This simulates a real life situation in which you are supposed to make decisions according to availability of resources an ease of access of the rescue points.</li>


				</ul>
			</div>
			<div class="e_text">
				<h2>Judging Criteria : </h2>
				<ul>
					<li>Reaching the final point following all the rules of respective rounds in shortest time.
</li>
					
				</ul>
			</div>
			<div class="e_text">
				<h2>Event Organisers :  </h2>
				<ul>
					<li>Abhishek Paliwal                500/11          6th Sem, mechanical   09086939862</li>
					<li>Prateek Gaur                       525/11          6th Sem, mechanical   09858168591</li>
					<li>Kunal Nijhawan                   198/11          6th Sem, mechanical  09596825373</li>
					
				</ul>
			</div>	
		</div>		
    </div>