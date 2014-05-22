	<div id="content">
        <div class="col glass"> 
        <div class="page-header container-fluid">
          <h1 class="center">Embesys</h1>
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
				<h2>Introduction : </h2>
				<p>Participants in this event will be tested on their understanding of basic embedded systems and programming skill. The basic objective would be to generate an audio signal of desired frequency from the microcontroller board interfaced with external audio speaker.</p>
			</div>
			<div class="e_text">
				<h2>Format: </h2>
				<p>Participants in this event will be tested on their understanding of basic embedded systems and programming skill. The basic objective would be to generate an audio signal of desired frequency from the microcontroller board interfaced with external audio speaker.</p>
                <h4>Event will consist of three rounds.</h4>
                <ul>
                    <li><b class="bold">Round 0</b>: This round will be an eliminator round. This round will be MCQ based.</li>
                    <li><b class="bold">Round 1</b>: This round will be simulator based and will test the designing skill of participants. This round is also an eliminator round.</li>
                    <li><b class="bold">Round 2</b>: Details of this event will be revealed on-spot.</li>
                </ul>
                    <p>Further details will be revealed on the spot</p>
			</div>
			<div class="e_text">
				<h2>Rules and Regulations : </h2>
				<ul>
					<li>Each teams consists at most 2 players.</li>
					<li>Any unfair practices will be dealt with disqualification.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Judging Criteria : </h2>
				<ul>
					<li>Team that produce max. tones in given time will be declared winner.</li>
					<li>In case of a tie, the better design in terms of operation and component placement will be given priority.
					</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Prize Money and Certifications : </h2>
				<ul>
					<li>Ist Prize- Rs. 5000/-</li>
					<li>2nd Prize- Rs. 3000/-</li>
					<li>3rd prize- Rs. 2000/-</li>
					<li>Certificate of excellence to all winners.</li>
					<li>Certificate of participation to all team members which will qualify Ist round. </li>
				</ul>
			</div>
            <div class="e_text">
				<h2>Contacts : </h2>
				<ul>
					<li>Ravi Bhat<br />9906779768</li>
					<li>Gourav Prateek Sharma<br />9906081718</li>
					<li>Kaiten Thakur<br />9086133991</li>
				</ul>
			</div>
		</div>		
    </div>