<?php
$x = 1;
$amount = $_POST['amount'] ?? 'Type amount';
$years = $_POST['years'] ?? 'Type years';
$percents = $_POST['percents'] ?? 'Type percents';

?>
<html>
<style>
    label {
        text-align: center;
        color: black;
        font-size: x-large;
    }
    input {
        text-align: center;
        color: black;
        font-size: large;
        border-style: dashed;
    }
    button {
        border: 5px solid slategrey;
        border-radius: 12px;
        font-size: large;
    }
    body {
        background-image: url("https://www.hdnicewallpapers.com/Walls/Big/Abstract/Abstract_Background1.jpg");
    }
</style>
<body>
<form action="index.php" method="post">
    <pre>
    <label for="amount">Enter amount</label>
    <input type="text" name="amount" id='amount'>

    <label for="years">Enter years</label>
    <input type="text" name="years" id='years'>

    <label for="percents">Enter percents</label>
    <input type="text" name="percents" id='percents'>

        <button type="submit">Calculate</button>


       <label> <?php
           $val = 0;
           while ($x <= $years) {
               $x++;
               $amount = round($amount + ($amount * ($percents / 100)), 2);
               $val += $amount;
           }
           echo 'EUR: ' . $val;
           ?>
           </label>
    </pre>
</form>
</body>
</html>