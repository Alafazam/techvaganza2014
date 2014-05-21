<div id="content">
    <div class="col glass">
        <div class="page-header container-fluid">
            <h1 class="center">Android Anatomy</h1>
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
            <h2>Intro</h2>
            <p>Android Anatomy is a three day National Workshop cum competition under Techfest-2K14 at NIT Srinagar. Each day of the event is unique in terms of learning and competition.</p>
            <p>The Android Anatomy Event is a national event and will fetch technical brains from every nook and corner of the country. The event will serve as a good learning platform for beginners.</p>
        </div>
        
        
        <div class="e_text">
            <h2>Rules: </h2>
            <ul>
                <li>Valid College ID Card is must.</li>
                <li>A team can have of three members.</li>
                <li>Scrap of all sorts will be given.</li>
                <li>Use of articles other than provided by organizers will subsequently lead to disqualification.</li>
                <li>Call of judges will be final.</li>
            </ul>
        </div>
        <div class="e_text">
            <h2>Contact : </h2>
            <p class='bold'>Contact (between 09:00-21:00)</p>
            <p> Rupesh Kumar Jha<br/>
            Event Coordinator<br/>
            Techfest-2K14<br/>
            Email id- nitianrupesh@gmail.com<br/>
            Mobile:+919797551297
            </p>
        </div>
    </div>
</div>