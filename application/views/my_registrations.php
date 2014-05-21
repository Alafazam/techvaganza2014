 			 <div class="db-nav">
                <ul class="clearfix">
                    <li class="clearfix"><a href="/home/profile"><input type="submit" value="Profile" /></a></li>                
                    <li class='clearfix'><a href="/home"><input type="submit" value="My Events" /></a></li>   
                    <?php if(isset($user['special'])||isset($special)){ ?>          
                    <li class="current clearfix"><a href="/home/registrations"><input type="submit" value="Registrations" /></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div id="registrations" class="glass" style="margin-top:0;">
            <p></p>
            <h1 class="center">Registrations</h1>
            <hr/>
            <table>
            	<thead>
                	<tr>
                        <th>Name </th>
                        <th>e-mail</th>
                        <th>Phone</th>
                        <th>Gender</th>
                        <th>College</th>
                        <th>Batch and Branch</th>
                    </tr>
                </thead>
                <tbody>
			<?php
                foreach( $users as $user){
            ?>
                    <tr>
                        <td><?=($user['first_name']." ".$user['last_name'])?> </td>
                        <td><?=$user['email']?></td>
                        <td><?=$user['cell']?></td>
                        <td><?=$user['gender']?></td>
                        <td><?=$user['college']?></td>
                        <td><?=($user['batch'].", ".$user['branch'])?> </td>
                    </tr>
            <?php } ?>
            	</tbody>
            </table>
            
            </div>