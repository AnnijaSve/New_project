<?php
require_once 'Storage.php';
$like = $_POST['like'] ?? '';
$dislike = $_POST['dislike'] ?? '';

$storage = new Storage();

$storage->addLike($like);

$storage->saveLikes();

$likes = array_filter($storage->loadAll());

if (isset($_POST['dislike'])) {
    unset($likes[0]);
    $myFile = fopen('Like.csv', 'w');
    fputcsv($myFile, $likes, PHP_EOL);
    fclose($myFile);
}

?>

<html>
<style>
    body {
        text-align: center;
    }

    button {
        text-align: center;
        background-color: gold;
        font-size: x-large;
    }
</style>
<body>
<img src="https://pleasureinlearning.files.wordpress.com/2015/04/sunglasssmiley.jpg" width="300" height="300">
<form action="index.php" method="post">
    <p><?php echo "Likes: " . count($likes), PHP_EOL; ?></p>
    <button type="submit" name="like" value="1">Like</button>
    <button type="submit" name="dislike">Dislike</button>
    <input type="hidden" name="id" value="id"/>
</form>
</body>
</html>
