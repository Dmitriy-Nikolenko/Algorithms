<?php

function getDirectory($path) {
   return new DirectoryIterator($path);
}
$path = 'c:/';
$dir = getDirectory($path);

if (isset($_GET['file'])) {

    $path = $_GET['file'];
    $dir = getDirectory($path);
}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php foreach($dir as $item) :?>
        <? if ($item != '.' && $item != '..'): ?>
        <a href="/?file=<?=$item->getPathname()?>"><?=$item . "<br>"?></a>
<? endif ?>

<? endforeach;?>
</body>
</html>
