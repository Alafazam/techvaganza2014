<div id="content">
	<div class="col glass">
		<div class="page-header container-fluid">
			<h1 class="center">Optocoustics </h1><a href="/pdfs/optocoustics.pdf" target="new"> [pdf]</a>
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
			<h2>Description:</h2>
			<p>Participants in this event will be tested on their understanding of analog electronic principles and will be required to design a system using analog electronic components. The basic objective would be to transfer an audio signal from a Line Out Source to a Line In Sink separated by an optical link. Interpretation of mathematical tools as Fourier Expansions will be put to test when the participants will be asked to design an equalizer using active filters. The participants will be provided with a brief overview of the underlying principles involved in designing such systems and a review of related academic topics.</p>
		</div>
		<div class="e_text">
			<h2>Specifications:</h2>
			<p>The optical link will be an IR-Photodiode pair separated by some distance. Input will be through an audio source such as a phone through a 3.5 mm Jack. Although the basic requirement is to route the output through another 3.5 mm Jack – which will be connected to a multimedia speaker (not a part of the design), designs wherein a speaker and the required audio and power amplifications are included are also allowed. The Op-Amps used will be provided with a single power supply of 5V – preferably through a USB port or a 9V through a 9V battery. The output should have a DC level of approx. 2V with an audio waveform on top of it.</p>
		</div>
		<div class="e_text">
			<h2>Competition:</h2>
			<p>The design of the communication channel will be covered in the overview. The participants will be required to add an equalizer phase to the channel – at least two band equalization should be implemented i.e. for bass and treble. The choice of cutoff frequencies is left with the participants. Since the output is stereo, in order to minimize cost and effort, only one channel (Either L or R) will be used.</p>
		<div class="e_text">
			<h2>Rules and regulations:</h2>
			<ul>
				<li>At least 2 band equalization to be implemented</li>
				<li>Only one channel to be used</li>
				<li>The output DC level should be around 2V</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Judging:</h2>
			<P>	Judging will be based on the following factors:</P>
			<ul>
				<li>Good layout ( layouts on PCBs will be preferred over breadboard layouts)</li>
				<li>Equalization range and quality</li>
				<li>Noise rejection</li>
				<li>Added features beyond the minimum specs
					**Participants are free to incorporate as many features as they like to the basic structure.
					Requirements:
					1.	A multimedia speaker
					2.	2 AUX cables
					3.	1 DC power supply
					For each student:
					1.	2x LM324 OP-AMPS
					2.	2x 3.5mm jacks
					3.	1x IR-Photodiode pair
					4.	Connecting Wires + USB jack/9V battery socket
					5.	Some resistors and capacitors</li>
			</ul>
		</div>
		<div class="e_text">
			<h2>Certificates:</h2>
			<ul>
				<li>Merit Certificates to 3 toppers</li>
				<li>Participation Certificates to everyone else</li>
			</ul>
			<h2>Prize money:</h2>
			<ul>
				<li>1st prize: 	Rs. 2000</li>
				<li>2nd prize: 	Rs. 1000</li>
				<li>3rd prize:	Rs. 500</li>
			</ul>
		</div>
		<div class="e_text">
		<h2>Contact:</h2>
		<ul>
			<li>Ahtisham-ul-haq 9797265551 ahtishamishap@gmail.com</li>
			<li>Rishabh Bhargav 9796374282 dravidrishabh@gmail.com</li>
		</ul>
		</div>
	</div>
</div>