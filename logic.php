<?php

session_start();


if (!isset($_SESSION['target_number'])) {
    $_SESSION['target_number'] = rand(1, 10);
    $_SESSION['attempts'] = 0;
}

$feedback = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['guess'])) {
        $guess = (int) $_POST['guess'];
        $_SESSION['attempts']++;

       
        if ($guess === $_SESSION['target_number']) {
            $feedback = "Congratulations! You guessed the number in {$_SESSION['attempts']} attempts.";
        } else {
            
            $feedback = ($guess < $_SESSION['target_number']) 
                ? "Too low! The correct number has been shuffled." 
                : "Too high! The correct number has been shuffled.";
            $_SESSION['target_number'] = rand(1, 10);
        }
    } elseif (isset($_POST['restart'])) {
      
        session_unset();
        session_destroy();
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
}
?>
