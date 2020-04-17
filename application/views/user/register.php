<?php echo validation_errors(); ?>   
<?php echo form_open('user/register'); ?>
<h1><?=$title?></h1>
<?php if ($this->session->flashdata('check_username_exists')) { ?>
<?php echo $this->session->flashdata('check_username_exists');?>
<?php }?>
<?php if ($this->session->flashdata('check_email_exists')) { ?>
<?php echo $this->session->flashdata('check_email_exists');?>
<?php }?>


<div class="form-group">
	<div class="form-group">
	<label>Username</label>
		<input type="text" class="form-control" name="username" placeholder="Username">
	</div>
	<div class="form-group">
	<label>Email</label>
		<input type="text" class="form-control" name="email" placeholder="Email">
	</div>
	<div class="form-group">
	<label>Password</label>
		<input type="password" class="form-control" name="password" placeholder="Password">
	</div>
	<div class="form-group">
	<label>Confirm Password</label>
		<input type="password" class="form-control" name="password2" placeholder="Confirm Password">
	</div>
	<button type="submit" class="btn btn-outline-success form-control">Submit</button>
</div>
    <br>
<?php echo form_close();?>
