	<div id="content">
        
        <div class="col glass"> 
            <div class="page-header container-fluid">
              <h1 class="center">Junkyard</h1>
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
        	  <p class="italic">Cash your trash</p>  
            </div>
            <hr />
        	<div class="e_text">				
				<p>Are you ready to unleash your creative side?.  Ever heard of Best out of waste?</p>
                <p>Ever thought about designing something useful from scrap? Well, here's your chance to create something innovative and useful from junk. </p>
				<p>The event Junkyard is a fun engineering challenge where you need to summon your designing abilities and create a working model from the junk materials provided to you.</p>
                <p>Here is a challenge that provides the perfect platform to test your creative and material management.</p>
				<p>So, come on guys....What are you waiting for? Do you have what it takes to compete with the best?</p>
				<p>Feeling excited.....Proceed to the registration link. </p>	
			<div class="e_text">
				<h2>EVENT FORMAT:</h2>
                <ul>
                	<li>The event will consist of 3 stages (or rounds).Each round will have a specific format.</li> 
					<li>The Winner will be decided in the last round.</li>
            	</ul>
            </div>
            <div class="e_text">
				<h2>BREIF RULES:</h2>
                <ul>
                	<li>A team can have a maximum of five members.</li> 
					<li>Scrap of all sorts will be given*</li>
                    <li>Use of articles other than those provided by organizers will lead to disqualification.</li>
                    <li>The model will have to be completed in the stipulated time. No extra time will be given. Time duration will be given on the spot.</li>
            	</ul>
            </div>
            <div class="e_text">
				<h2>Problem statement:</h2>
                <p>	The problem statement of each round will be provided at the time of the event.</p>
			</div>
            
			<div class="e_text">
				<h2>Contact : </h2>
                <p>	Abhinandan Khajuria.<br />
                    PHONE NUMBER: +919419142057<br />
                    Email ID: abhikhajuria93@gmail.com
                </p>
                <p>Harjyot Singh.<br />
				   PHONE NUMBER: +919697208367<br />
				   Email ID: harjyotsingh17@gmail.com
                </p>
			</div>
            <div><p>FOR MORE INFORMATION , REFER TO THE EVENT <a href='/pdfs/junkyard.pdf' target="new"> [pdf]</a></p></div>
		</div>		
    </div>