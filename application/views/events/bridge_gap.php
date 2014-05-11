	<div id="content">        
        <div class="col glass">        	
            <div class="page-header container-fluid">
              <h1 class="center">BRIDGE THE GORGE</h1>
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
				<h2>Purpose:</h2>
				<p>To bring your own innovative bridge model and create a revolution in field of civil engineering.</p>
			</div>
			
			<div class="e_text">
				<h2>Theme:</h2>
				<p>Bridges are one of the most useful and magnificent structures of the modern civilization. With ever-improving designs, bridges carry loads of immense magnitude and nature and are also expected to handle incidental loads due to natural calamities.<br>
				(NO REGISTRATION FEES.)<br>
                (THIS EVENT IS OPEN TO ALL BRANCHES.)
				</p>
			</div>
			<div class="e_text">
				<h2>Rules:</h2>
				<ul>
					<li>Participants have to prepare the structure at home and bring it to the competition.</li>
					<li>A participating team would comprise of one to three members.</li>
					<li>There is no restriction on materials to be used.</li>
					<li>The choice of the type of bridge is upon the discretion of participant team.</li>
					<li>The mass of the bridge shall not be greater than 1500 grams and a clear span between supports should be at least 45 cm. Also, width must be between 8 to 10 cm.</li>
				</ul>
			</div>
			<div class="e_text">
				<h2>Arena:</h2>
				<p>Structural engineering lab, Civil Engineering Department</p>
			</div>
			<div class="e_text">
				<h2>Judging Criteria :</h2>
				<p>Creativity, structural stability and economy would be considered.</p>
			</div>
			<div class>
				<h2>Prize Money and Certification : </h2>
				<ul>
					<li>INR 4000</li>
					<li>INR 3000</li>
					<li>INR 2000</li>
				</ul>
				<p>Certificate of excellence to all the winners. Top 10 teams would receive participation certificate.</p>
			</div>	
			<div class="e_text">
			<h2>Contact : </h2>
				<ul>
					<li>Shubham Srivastav:             9086944671</li>
					<li>Azhar Rafiq       :                  9796522482</li>
					<li>Gaurav Srivastava  :             9697359176</li>
					<li>Madan Mohan Sharma  :        9086962932</li>
					<li>Abrar-ul-Hassan      :              8713982872</li>
				</ul>
        	</div>
		</div>	
    </div>