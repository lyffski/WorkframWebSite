<?php echo validation_errors(); ?>   
<?php echo form_open('user/register'); ?>
<h1><?=$title?></h1>

<div class="form-group">
            <div class="form-group">
            <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
			<label>Name</label>
				<input type="text" class="form-control" name="fname" placeholder="Name">
			</div>
			<div class="form-group">
			<label>Lastname</label>
				<input type="text" class="form-control" name="lname" placeholder="Lastname">
			</div>
			<div class="form-group">
			<label>Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
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
</div>