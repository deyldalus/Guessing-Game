<?php require 'logic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Can you guess the Number?</h1>
        <p>Input a number between 1 and 10! If you're wrong, the correct number will shuffle.</p>

        <form method="POST">
            <input type="number" name="guess" placeholder="Enter your guess" required>
            <button type="submit">Guess</button>
            <button type="submit" name="restart" class="restart">Restart</button>
        </form>

        <div class="feedback"><?= htmlspecialchars($feedback) ?></div>
    </div>
</body>
</html>
