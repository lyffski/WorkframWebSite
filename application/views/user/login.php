<?php echo validation_errors(); ?>
<?php echo form_open('user/login') ?>

<h2><?= $title ?></h2>

<div class="form-group">
    <div>
    <label>username:</label><br>
        <input type="text" placeholder="Entry your Username" name="username"><br>
    </div>

    <div>
    <label>Password:</label><br>
        <input type="password" placeholder="Entry your Password" name="password"><br><br>
    </div>

    <button type="submit" class="btn btn-outline-success" >Submit</button>

</div>


<?php echo form_close();?>