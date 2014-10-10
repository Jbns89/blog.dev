<html>
<head>
    <title>Dice Roll</title>
</head>
<body>
    <p>Your guess was <?= $guess ?></p>
    <p>The dice roll was <?= $diceNum ?></p>
    <? if($guess == $diceNum):?>
        <p>You guessed right!</p>
    <?endif;?>
    <?if($guess != $diceNum):?>
        <p>Wrong! Try again</p>
    <?endif;?>

</body>
</html>
