<h1><?=$title?></h1>
<?php echo validation_errors(); ?>   
    <div class="form">
        <label>Nickname:</label><br>
        <input type="text" name="nickname" class="form-control" placeholder="Entry your Nickname"><br>
        <label>Forename:</label><br>
        <input type="text" name="fname" class="form-control" placeholder="Entry your Forename"><br>
        <label>Surname:</label><br>
        <input type="text" name="lname" class="form-control" placeholder="Entry your Surname"><br>
        <label>Email:</label><br>
        <input type="email" name="email" class="form-control" placeholder="Entry your Email"><br>
        <label>Password:</label><br>
        <input type="password" name="password" class="form-control" placeholder="Entry your Password"><br>
        <label>Re-entry the Password:</label><br>
        <input type="password" name="password2" class="form-control" placeholder="Repeat your Password"><br>
    </div>
    <br>
    <button type="submit" class="btn btn-outline-success form-control">Submit</button>
    
<?php echo form_close();?>
</div>