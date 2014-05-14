<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">Smackdown</h1>
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
			<p class="italic">Crazy for fighting!!!</p>
		</div>
		<hr />
		<div class="e_text">
			<p>Experience the new kind "Clash of Bots". Design a robo having brute strength, cat like reflexe and thus be ready for the ultimate battle. This competition is to bring out your enthusiasm in the field of robotics through Smack down where you can show your creativity by designing a robot. This has ability to tackle another robot and having brute strength, cat-like reflexes combine to create the ultimate battle! <br />The purpose of this competition is to push, Throw, flip, drag or otherwise move your opponent out of a 1.6 meter diameter Circular ring within 3 minute. <br/>This competition is the most popular of the events both to watch and to participate in.</p>
			<div class="e_text">
				<h2>THE PLOT:</h2>
				<ul>
					<li>Robots will be placed inside the circular ring of specified diameter. </li>
					<li>The robots will be set down in such a way they can face each other. </li>
					<li>The bots have to force each other out of the ring.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>BRIEF RULES: </h2>
				<ul>
					<li>A team may have 1-4 contestants. Only one contestant can operate the robot for the whole match.</li>
					<li>There will be three rounds in a match each of three minute.</li>
					<li>A robot whose body hangs over the edge is not consider 'off' until it Physically tips off the edge and touches outside ring.</li>
					<li>JUDGEMENT OF THE RING OFFICER WILL BE FINAL.</li>
					<li>Intentional damage or interfering with the opponent operator is not allowed.</li>
					<li>Those electronic items are not allowed which may harm opponent robot.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Contact : </h2>
				<ul>
					<p>	Ankit Sharma.<br/>
					Phone number : +918803170074<br/>
					E mail ID : ankitsharma1944@gmail.com</p>
					<p>	Mayank Jain.<br/>
					Phone number: +919796172719<br/>
					E mail ID:mayank.lion12@gmail.com</p>
				</ul>
			</div>
		</div>
	</div>