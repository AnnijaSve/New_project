<?php

require_once 'TaskStorage.php';
$task = $_POST['task'] ?? '';

$taskStorage = new TaskStorage();

$taskStorage->addTask($task);

$taskStorage->saveTask();

$todos = array_filter($taskStorage->loadAll());


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    if (isset($todos[$id])) {
        $taskStorage->loadAll();
        unset($todos[$id]);
        $file = fopen('Task.csv', 'r');
        $data = fgetcsv($file);
        $todoFile = fopen('Task.csv', 'w');

        while (!feof($file)) {
            $data = fgetcsv($file);
            fwrite($todoFile, $data);
        }
        fclose($todoFile);
    }
    $todoFile = fopen('Task.csv', 'rw+');
    fputcsv($todoFile, $todos, PHP_EOL);
}


?>

<html>
<style>
    body {
        text-align: center;
        background-color: lightgrey;
    }

    button.b {
        text-align: center;
        border: 5px solid slategrey;
        border-radius: 12px;
        font-size: large;
    }

    button.a {
        text-align: center;
        border: 2px solid black;
        border-radius: 12px;
        font-size: x-large;
    }

    form {
        text-align: center;
    }
</style>
<body>
<ul>
    <form action="index.php" method="post">
        <input type="text" name="task" id='task'>
        <button class="a" type="submit">Add task</button>
    </form>
</ul>
<ul>
    <?php foreach ($todos as $id => $todo): ?>
        <li>
            <?php echo $todo; ?>
            <form method="post" action="index.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <button class="b" type="submit" name="delete">X</button>
            </form>
        </li>
    <?php endforeach; ?>
</ul>
<ul>
</body>
</html>
