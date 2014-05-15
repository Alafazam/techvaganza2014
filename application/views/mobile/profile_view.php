<h1 class="center">My Profile</h1>
<?php 
$winners = array(200,300,500,750,1000,5000);

if(in_array($id, $winners)){ ?>
	<div class="max-480 glass" style="background:#001141">
    	<p class="clearfix winner center">Congrats, you are <?=$id?>th User on our website.<br />
    	You have won a gift voucher.<br />
        Please, contact Hospitality team to claim your Voucher<br />
        Phone: <a href="tel:07298470136">+917298470136</a></p>
    </div>
<?php } ?>
<div id="profile" class="max-480 glass">
	<table>
    	<tr>
        	<td>First Name</td>
            <td><?=$first_name?></td>
        </tr>
    	<tr>
        	<td>Last Name</td>
            <td><?=$last_name?></td>
        </tr>
    	<tr>
        	<td>Email</td>
            <td><?=$email?></td>
        </tr>
    	<tr>
        	<td>Phone Number</td>
            <td><?=$cell?></td>
        </tr>
    	<tr>
        	<td>Gender</td>
            <td><?=$gender?></td>
        </tr>
    	<tr>
        	<td>College</td>
            <td><?=$college?></td>
        </tr>
    	<tr>
        	<td>Branch</td>
            <td><?=$branch?></td>
        </tr>
    	<tr>
        	<td>Batch</td>
            <td><?=$batch?></td>
        </tr>
    	<tr>
        	<td>Accomodation</td>
            <td><?=$accomodation=='y'?'Yes':'No'?></td>
        </tr>
    </table>
    <a class="half right"  href="/home/profile/edit"><input type='submit' value="Edit Profile" /></a>
    <p>**User Dashboard will be available soon</p>
</div>