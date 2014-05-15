<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">CAPTiVE  DYNAX</h1>
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
			<h2>Event Description</h2>
			<p>Who is not aware about the miserable condition of Kashmir in winters?
			</p>
			<ul>
				<li>No electricity!
				</li>
				<li>Snowfall all the time, it becomes hard to distinguish between day and night. 
				</li>
				<li>'Life' ceases to exist as we sit sit huddled in a corner near the fireplace 
				</li>
			</ul>
			<p>Even in the home with no light and increasing cold, the house loses energy in many forms.
			The only solution is to preserve or capture this escaping energy rather than looking for more energy resources. Thus the questions this engineering problem leaves us with are:</p>
			<ul>
				<li>How to improve overall thermal performance of a room, </li>
				<li>Making it more comfortable in terms of heat resisting with respect to economical available resources and consequently less energy dependent.</li>
			</ul>
		</div>
		
		<div class="e_text">
			<h2>Eligibility:</h2>
			<p>None; all are welcome.
			</p>
		</div>
		<div class="e_text">
			<h2>Judgement criteria: </h2>
			<p>The judges will evaluate the model/project based on the following criteria :
			</p>
			<ul>
				<li>Background Study</li>
				<li>Originality of Work </li>
				<li>Amount of work carried out
				</li>
				<li>Novelty in thinking
				</li>
				<li>Proper functioning of the model
				</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Rules & Regulations:
			</h2>
			
			
			
			<ul>
				<li>Only team entries are eligible. A team shall consist of maximum two members.
				</li>
				<li>Teams are not allowed to communicate between themselves.
				</li>
				<li>Replacement of any participant of a team is not allowed after registration.
					
				</li>
				<li>The decision of quiz master will be final and binding.
				</li>
				<li>This event comprises of two rounds.
				</li>
			</ul>
		</div>
		
		<div class="e_text">
			<h2>Contact : </h2>
			<ul>
				<li>Event Manager-Shazil Akhtar   +91 95 96 16 7661
				</li>
				
			</ul>
		</div>
	</div>
</div>