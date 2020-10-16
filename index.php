<?php

require_once 'Person.php';
require_once 'PersonStorage.php';

$storePersons = new PersonStorage();

$searchForPerson = $_POST['searchperson'] ?? '';

?>

<html>
<body>
<hr>
<center>
    <form action="index.php" method="post">
        <label for="searchperson">Search person</label>
        <input type="text" name="searchperson" id='searcherson'>
        <button type="submit">Search</button>
        <p><?php
            ;
            $person = $storePersons->getByCode($searchForPerson);
            if ($person->getPhoneNumber() === $searchForPerson) {
                echo 'Vārds :  ' . $person->getName();
                echo ' , uzvārds:  ' . $person->getSurname();
            } else {
                echo 'Telefona numurs netika atrasts';
            }

            ?>
        </p>
    </form>
</center>
</body>
</html>

