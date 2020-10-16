<?php

require_once 'Person.php';
require_once 'PersonStorage.php';
require_once 'MessageStorage.php';
require_once 'Message.php';

$storePersons = new PersonStorage();
$messageStorage = new MessageStorage();

session_start();

$searchForPerson = $_POST['searchperson'] ?? '';
$exit = $_POST['exit'] ?? '';

?>

<html>
<body>
<hr>
<center>
    <form action="index.php" method="post">
        <label for="searchperson">Enter PIN</label>
        <input type="text" name="searchperson" id='searcherson'>
        <button type="submit">Enter</button>
        <p><?php
            $person = $storePersons->getByCode($searchForPerson);

            if ($person->getPin() === $searchForPerson) {

                $_SESSION['name'] = $person->getName();
                var_dump($_SESSION);

            }
            if ($_SESSION['name'] && isset($_POST['message'])) {

                $mess = $_POST['message'] ?? '';
                $message = array($_SESSION['name'], $_POST['message']);
                $messageStorage->saveMessage($message);

            }
            if (isset($_POST['exit'])) {

                unset($_SESSION['name']);

            }
            ?>
        </p>
    </form>
    <form action="index.php" method="post">
        <label for="message">Send message</label>
        <input type="text" name="message" id='message'>
        <button type="submit">Send</button>
    </form>
    <form action="index.php" method="post">
        <button name="exit" id='exit' type="submit">Exit</button>
    </form>
</center>
</body>
</html>

