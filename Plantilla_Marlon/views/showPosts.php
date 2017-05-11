<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once('layout/library.php'); ?>
    <title>Show Post - Details</title>
</head>
<body>
<div class="container">
    <!-- The justified navigation menu is meant for single line per list item.
     Multiple lines will require custom code not provided by Bootstrap. -->
    <?php require_once('layout/header.php'); ?>
    <section>
    <div class="row">
        <?php foreach ($posts as $post) { ?>
            <div class="col-lg-12">
                <h2>Author: <?php echo $post->getAuthor(); ?></h2>
                <p class="text-danger">Email: <?php echo $post->getEmail(); ?></p>
                <p class="text-info">Telephone: <?php echo $post->getTelephone(); ?></p>
                <p class="text-info">Content: <?php echo $post->getContent(); ?></p>
                <p class="text-success">Email: <?php echo $post->getEmail(); ?></p>
                <p><a class="btn btn-primary" href="#" role="button">Volver &raquo;</a></p>
            </div>
        <?php } ?>
    </div>
</section>
<!-- Site footer -->
<?php require_once('layout/footer.php'); ?>

</div>
<script src="/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>