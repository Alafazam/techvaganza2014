	<div id="content">
        <div class="col glass"> 
        <div class="page-header container-fluid">
          <h1 class="center">Mystery Box </h1><a href="/pdfs/mystery_box.pdf" target="new"> [pdf]</a>
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
				<p>M ystery box is an opaque box with electrical circuits inside. The terminals are provided outside the box for performing various tests.The mystery inside the box can only be revealed if the person performing the tests boasts of good experimental and analytical skills.</p>
			</div>
			
			<div class="e_text">
				<h2>Idea : </h2>
				<p>
					Simple dc and ac circuits behave specially under different conditions.By providing every possible combimation of inputs and recording the respective outputs,some basic analysis can reveal the circuit exactly.</p>
			</div>
			<div class="e_text">
				<h2>Event Format : </h2>
				<ul>
					<li>There will be two rounds in this event .</li>
					<li>There is no limit to the number of teams that can participate in the first round.There will be three members in each team.</li>
					<li>Round 1 will be MCQ quiz.The questions in this quiz will check the participants electrical engineering concepts. Only Six teams will be selected for the next round.</li>
					<li>Round 2 is the main round of this event in which the participants have to perform the tests .Winner will bedecided on the cumulative score of each team from the two rounds.</li>
					<li>In case of tie, the winner would be decided by an oral quiz.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Task : </h2>
				<ul>
					<li>There are 5 mystery boxes that the teams have to test and de-mystify.Each team would get a chance to perform tests on every box .</li>
					<li>The box may have two or four terminals.If the box has four terminals, the input and output terminals would be marked explicitly.</li>
					<li>For supply,the participants would be provided a DC source and an AC source.For checking the output, the teams will have access to multimeter and LEDs.</li>
					<li>On each Box, 4 circuits would be drawn.The teams have to select the most plausible circuits from their analysis.</li>
					<li>The maximum time alloted for testing one box is 30 Minutes.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Prize Money and Certifications : </h2>
				<ul>
					<li>Ist Prize- Rs. 5000/-</li>
					<li>2nd Prize- Rs. 3000/-</li>
					<li>3rd prize- Rs. 2000/-</li>
					<li>The teams reaching the second round will receive the certificate of participation.</li>
					
				</ul>
			</div>
			
			<div class="e_text">
				<h2>Contact : </h2>
                <h3>Teacher Coordinator</h3>
                <ul><li>Mr. Ubaid Bashir</li></ul>
                <h3>Student Coordinators</h3>
				<ul>
					<li>Umer Banday 	08803070568</li>
					<li>Anand Jha 		09796186566</li>
					<li>Rohit Bhagat 	09596726669</li>
				</ul>
			</div>
		</div>		
    </div>