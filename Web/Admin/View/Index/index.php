<?php
    require __DIR__.'/../Layout/_meta.php';
    require __DIR__.'/../Layout/_menu.php';
 ?>
<h1 id="hello">Hello world</h1>
<script>
    $('#hello').css('color','red')
</script>
<?php require __DIR__.'/../Layout/_footer.php'; ?>