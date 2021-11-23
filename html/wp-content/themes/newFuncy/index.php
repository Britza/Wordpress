<!doctype html>
<html>
<head>

    <meta charset="utf-8">
    <title>NEW FUNCY</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri();?>"/>


</head>

<body>
<?php
get_header()
?>


<div id="cuerpo">
    <?php
    echo get_stylesheet_uri();
    echo "<h1 class='morado'>Hola Funcy</h1>";
    ?>

    <?php
    include("header.php");
    ?>
</div>

<?php get_footer() ?>
</body>
</html>


