<h1><?= $title ?></h1>

<?php foreach($posts as $post): ?>
    <h3><?php echo $post['title'] ?></h3>
    <small>posted on: <?php echo $post['createdon'] ?></small><br>
    <p><?php echo $post['body'] ?> </p>
    <div class="btn btn-secondary">
        <a href=<?php echo site_url('posts/'.$post['slug']);?>>Read more</a>
    </div><br><br><br>
<?php endforeach; ?>





