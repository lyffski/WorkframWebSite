<?php echo validation_errors(); ?>
<?php echo form_open("user/login") ?>

<h2><?= $title ?></h2>

<div class="form-group">
    <label>Nickname:</label><br>
    <input type="text" placeholder="Entry your Nickname" class="form_control" name="nickname"><br>
    <label>Password:</label><br>
    <input type="password" placeholder="Entry your Password" class="form_control" name="password"><br>
</div>

<?php echo form_close();?>