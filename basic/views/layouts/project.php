<?php use app\assets\AppAsset; 
    AppAsset::register($this);

?>

<?php  $this->beginPage(); ?>
<!DOCTYPE html>
<html lang="en">
<?php  $this->head(); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php  $this->beginBody(); ?>
<?=$content;?>
<?php  $this->endBody(); ?>
</body>
</html>
<?php  $this->endPage(); ?>