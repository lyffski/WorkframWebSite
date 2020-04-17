<html>
    <head>
        <title>Main</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
    </head>
<body>
    <div class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" style="color:00FFAE" href="<?php echo base_url();?>home">Home</a>
        <a class="navbar-brand" style="color:00FFAE" href="<?php echo base_url();?>about">About</a>
        <a class="navbar-brand" style="color:00FFAE" href="<?php echo base_url();?>posts">Posts</a>
        <div style="margin-left: 800px">
            <?php if(1==1):?>
            <a class="navbar-brand" style="color:00FFAE; margin-left:auto" href="<?php echo base_url();?>addPost">Create Post</a>
            <?php endif?>
            <a class="navbar-brand" style="color:00FFAE; margin-left:auto" href="<?php echo base_url();?>register">Register</a>
            <a class="navbar-brand" style="color:00FFAE; margin-left:" href="<?php echo base_url();?>login">Login<a>
        </div>
    </div>
<div class="container">