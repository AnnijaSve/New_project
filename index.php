<?php

require_once 'Person.php';
require_once 'PersonStorage.php';

$storePersons = new PersonStorage();
session_start();

$searchForPerson = $_POST['searchperson'] ?? '';

?>

<html>
<body>
<hr>
<center>
    <form action="index.php" method="post">
        <label for="searchperson">Enter PIN</label>
        <input type="text" name="searchperson" id='searcherson'>
        <button type="submit">Search</button>
        <p><?php
            
            $person = $storePersons->getByCode($searchForPerson);
            if ($person->getPin() === $searchForPerson) {

                $_SESSION['name'] = $person->getName();
                var_dump($_SESSION);

            }
            ?>
        </p>
    </form>
</center>
</body>
</html>

