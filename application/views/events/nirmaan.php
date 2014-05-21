	<div id="content">        
        <div class="col glass">
            <div class="page-header container-fluid">
              <h1 class="center">Nirmaan </h1>
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
            <hr />
        	<div class="e_text">				
				<p>Scraps and some new materials will be provided to the groups comes ahead qualifying the elimination round i.e. aptitude round. They will be supposed to create the unit directed to do on the spot.</p>
			<div class="e_text">
				<h2>RULES:</h2>
				<ul>
					<li>4 groups will be selected &amp; 3 persons in each group.</li>
					<li>Only new materials will be provided.</li>
					<li>Collect the scraps you need.</li>
					<li>Time duration limited(1st day aptitude will be conducted and result will be out and groups selected will work in the time duration from 1st day noon to last day noon</li>
					<li>No extra needs will be met.</li>
					<li>Can take help of our labs.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Contact : </h2>
				<ul>
					<p>	ABHIMANYU SINGH <br/>
					Phone number : +919596285859</p>
				</ul>
			</div>
		</div>
	</div>
