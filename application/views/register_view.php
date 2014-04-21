<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Register</title>
</head>
<body>
<h1>Register</h1>
<form action="/register/validate" method="post" accept-charset="utf-8">
  <label for="username">Username:</label>
      <input type="text" size="20" id="username" name="username" value="<?php echo set_value('username'); ?>" />
      <?php echo form_error('username'); ?>
      <br/>
      <label for="password">Password:</label>
      <input type="password" size="20" id="password" name="password" value="<?php echo set_value('password'); ?>"/>
      <?php echo form_error('password'); ?>
      <br/>
      <label for='first_name'>First Name</label>
    <input type='text' id='first_name' name='first_name' value="<?php echo set_value('first_name'); ?>" />
    <?php echo form_error('first_name'); ?>
    <br/>
      <label for='last_name'>Last Name</label>
    <input type='text' id='last_name' name='last_name' value="<?php echo set_value('last_name'); ?>" />
    <?php echo form_error('last_name'); ?>
      <br/>
      <label for='email'>Email</label>
      <input type='email' id='email' name='email' value="<?php echo set_value('email'); ?>" />
      <?php echo form_error('email'); ?>
      <br/>
      <label for='cell'>Cell</label>
      <input type='tel' id='cell' name='cell' value="<?php echo set_value('cell'); ?>" />
      <?php echo form_error('cell'); ?>
      <br/>
      <label for='gender'>Gender</label>
    <input type='text' id='gender' name='gender' value="<?php echo set_value('gender'); ?>" />
    <?php echo form_error('gender'); ?>
      <br/>
    <label for='college'>College</label>
    <input type='text' id='college' name='college'  value="<?php echo set_value('college'); ?>"/>
    <?php echo form_error('college'); ?>
      <br/>
    <label for='batch'>Batch</label>
    <input type='text' id='batch' name='batch' value="<?php echo set_value('batch'); ?>" />
    <?php echo form_error('batch'); ?>
    <br/>
    <label for='branch'>Branch</label>
    <input type='text' id='branch' name='branch' value="<?php echo set_value('branch'); ?>" />
    <?php echo form_error('branch'); ?>
      <br/>
      <label for='accomodation'>Accomodation</label>
    <input type='text' id='accomodation' name='accomodation'  value="<?php echo set_value('accomodation'); ?>"/>
    <?php echo form_error('accomodation'); ?>
      <br/>
    <input type="submit" value="Login"/>
      
  </form>
</body>
</html>
