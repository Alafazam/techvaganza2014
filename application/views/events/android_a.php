	<div id="content">
        <div class="col glass">
        <div class="page-header container-fluid">
          <h1 class="center">Android Advance</h1>
        </div>
        <div  style="float:right;max-width:100px">
            <?php
                if($username){
                    if(!$isRegistered){
            ?>
                <a href="/events/<?=$event['category']?>/<?=$event['event_id']?>/register"><input id="reg_button" type="submit" name="submit" value="Register"></a>
            <?php
                    }else{
            ?>
                <a href="/events/<?=$event['category']?>/<?=$event['event_id']?>/unregister"><input id="unreg_button" type="submit" name="submit" value="Unregister"></a>
            <?php
                    }
                }else{
            ?>
                <a href="/login"><input type="submit" value="Register"></a>
            <?php
                }
            ?>
                
                
            
            </div>
        	<div class="e_text">
                <p>This is an Android Development Event being organized by Google Students Club under Google Students Ambassador Program. This Event will consist of both workshop and competition, with a chance to win cash and Google Goodies. The worskshop will be taken by a member of Google Developer Groups. There is a lot of experience to capture. Limited seats available. The winners of Android basic will get a direct entry to Android Advance.</p>
				
			</div>
            <div class="e_text">
				<h2>Problem Statement</h2>	
                <p>The world of cell phones has been hugely transformed by the ascend of Android OS. We all have got a lot of stuff to remember these days. Remembering all of that stuff is not so easy. The aim of this competition is to create an android app that can manage your Notes. The application is supposed to let you create, edit and save your Notes. Any additional feature is a plus</p> 
            </div>
			
			<div class="e_text">
				<h2>Event Format</h2>	
                <ul>
                    <li>Pre-fest days: Workshop on Android Development on 23rd May, 2014 at 6:00 PM by a member of Google Developer Groups</li>
                    <li>Fest Day-1: Android application Development Competition (3-4 hours).</li>
				</ul>
            </div>
            <div class="e_text">
				<h2>Event Format</h2>	
                <ul>
                    <li>The Teams may consist of a maximum of 3 members.</li>
					<li>Any team that is found to use prefabricated app will be disqualified, though they can use any libraries or code-snippets.</li>
					<li>The Teams may be judged upon several criterias:</li>
                    <ul>
						<li>Performance and Memory consumption of the Application. ( 20 Points )</li>
						<li>Version Support. ( 10 Points )</li>
						<li>Efficient Distribution of load among Activities. ( 10 Points )</li>
						<li>Navigations and Menus. ( 10 Points )</li>
						<li>UI/UX, User Interface and Usability. ( 20 Points )</li>
						<li>Plus points for audio and Picture notes. ( +20 Points )</li>
						<li>Plus points for Customization options. ( +20 Points )</li>
                        <li>Overall ties will be resolved on the basis of creativity and good coding practices.</li>
                    </ul>
				</ul>
            </div>
			<div class="e_text">
				<h2>Contact : </h2>
				<p class='bold'>Contact between 10:00-21:00</p>
                    <p>	Ankit<br/>
                        Email id- ankit@techvaganza.org<br/>
                        Mobile:+919858577847
                    </p>
			</div>
		</div>		
    </div>