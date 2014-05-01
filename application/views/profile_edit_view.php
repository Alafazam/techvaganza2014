<h1 class="center">Edit Profile</h1>
<div id="form_register">
<form action="/home/profile/save" method="post" accept-charset="utf-8" class="glass"> 
    <p class='clearfix'>
		<label for='first_name'>First Name</label>
		<input type='text' id='first_name' name='first_name' value="<?php echo isset($first_name)?$first_name:set_value('first_name'); ?>" />
		<?php echo form_error('first_name'); ?>
    </p>
    <p class='clearfix'>
      <label for='last_name'>Last Name</label>
    <input type='text' id='last_name' name='last_name' value="<?php echo isset($last_name)?$last_name:set_value('last_name'); ?>" />
    <?php echo form_error('last_name'); ?>
      </p>
    <p class='clearfix'>
      <label for='email'>Email</label>
      <input type='email' id='email' name='email' value="<?php echo isset($email)?$email:set_value('email'); ?>" />
      <?php echo form_error('email'); ?>
      </p>
    <p class='clearfix'>
      <label for='cell'>Phone</label>
      <input type='tel' id='cell' name='cell' value="<?php echo isset($cell)?$cell:set_value('cell'); ?>" />
      <?php echo form_error('cell'); ?>
      </p>
    <p class='clearfix'>
		<label for='gender'>Gender</label>
      	<input type="radio" name='gender' id='female' value='Female' <?php echo isset($gender)&&$gender==='Female'?"checked":set_radio('gender','Female') ?> />
      	<span class='form_gender'>Female</span>
      	<input type="radio" name='gender' id='gender' value='Male' <?php echo isset($gender)&&$gender==='Male'?"checked":set_radio('gender','Male') ?>  />
    	<span class='form_gender'>Male</span>
	<?php echo form_error('gender'); ?>
      </p>
    <p class='clearfix'>
    <label for='college'>College Name</label>
    <input type='text' id='college' name='college'  value="<?php echo isset($college)?$college:set_value('college'); ?>"/>
    <?php echo form_error('college'); ?>
      </p>
    <p class='clearfix'>
    <label for='batch'>Batch</label>
    <input type='text' id='batch' name='batch' value="<?php echo isset($batch)?$batch:set_value('batch'); ?>" />
    <?php echo form_error('batch'); ?>
    </p>
    <p class='clearfix'>
    <label for='branch'>Branch</label>
    <input type='text' id='branch' name='branch' value="<?php echo isset($branch)?$branch:set_value('branch'); ?>" />
    <?php echo form_error('branch'); ?>
      </p>
    <p class='clearfix half'>
      <label for='accomodation'>Accomodation</label>
      <input type="checkbox" name="accomodation" id="accomodation" value='y' <?php echo isset($accomodation)&&$accomodation==='y'?"checked":set_checkbox('accomodation', 'y'); ?> />     <?php echo form_error('accomodation'); ?>
      </p>
    <p class='clearfix half'>
    <input type="submit" value="Save"/>
      </p>
  </form>
</div>