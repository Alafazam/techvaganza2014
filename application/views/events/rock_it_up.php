<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">Rock-it Up </h1><a href="/pdfs/rockitup.pdf" target="new"> [pdf]</a>
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
			<P></P>
			<h2>DESCRIPTION</h2>
			<p>Ever wanted to become a rocket scientist, but feel like you're not quite cut out for it? Well fear not; make and fly water rockets at Rock-it Up.</p>
			<p>The purpose of this competition is to design rockets from 2-liter soda bottles and launch them to a range and hit targets to score points.</p>
		</div>
		<div class="e_text">
			<h2>EVENT FORMAT:</h2>
			<ul>
				<li>The event will consist of two Rounds. Each round having different scoring system.</li>
				<li>The Winner will be decided in the last round.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>BRIEF RULES</h2>
			<ul>
				<li>Each team should be consisting of 2-3 students</li>
				<li>Each team should make their own water rockets and launch them at the designated places.</li>
				<li>Each team should make 2 rockets, one as the main rocket and the other as a back-up.</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>CONTACT :</h2>
			<h2>Ankit Gupta</h2>
			<ul>
				<li>PHONE NUMBER: +919419887558</li>
				<li>Email ID: ankitgupta1454@gmail.com</li>
			</ul>
			<h2>Varun Kapoor</h2>
			<ul>
				<li>PHONE NUMBER: +919622212717</li>
				<li>Email ID: varun37kapoor@gmail.com</li>
			</ul>
			<h2>Vishank Razdan</h2>
			<li>PHONE NUMBER: +919596868963</li>
			<li>Email ID: razdan.vishank@gmail.com</li>
		</div>
	</div>
</div>