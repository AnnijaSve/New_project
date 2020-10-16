<?php

require_once 'PinCode.php';

$pinCode = new PinCode('1234');

session_start();

if (isset($_POST['pin'])) {
    $_SESSION['pin'] .= $_POST['pin'];
    $pinTotal = $_SESSION['pin'];
}
?>

<html>
<style>
    body{
        text-align: center;
        font-size: xx-large;
    }
    form{
        text-align: center;
    }
    button {
        border: 1px solid slategrey;
        border-radius: 30px;
        font-size: xx-large;
    }

</style>
<body>
<?php if (strlen($pinTotal) === 4): ?>
    <?php echo $pinCode->unlockPin($pinTotal) ? 'Unlocked' : 'Locked'; ?>
<?php endif; ?>
<?php echo str_repeat('*', strlen($pinTotal)); ?>
<form action="index.php" method="post">
    <button type="submit" value="1" name="pin">1</button>
    <button type="submit" value="2" name="pin">2</button>
    <button type="submit" value="3" name="pin">3</button>
</form>
<form action="index.php" method="post">
    <button type="submit" value="4" name="pin">4</button>
    <button type="submit" value="5" name="pin">5</button>
    <button type="submit" value="6" name="pin">6</button>
</form>
<form action="index.php" method="post">
    <button type="submit" value="7" name="pin">7</button>
    <button type="submit" value="8" name="pin">8</button>
    <button type="submit" value="9" name="pin">9</button>
</form>
</body>
</html>
