<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoàng HUuwux HUng  0df3895c</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }
    </style>
</head>
<body>

<?php
function startGuessingGame() {
    // Get the maxNumber parameter from the URL
    $maxNumber = isset($_GET['maxNumber']) ? (int)$_GET['maxNumber'] : 100; // Default to 100 if maxNumber is not provided

    // Generate a random number between 1 and maxNumber
    $secretNumber = rand(1, $maxNumber);

    // Function to handle user guesses
    function checkGuess($secretNumber) {
        $userGuess = isset($_GET['userGuess']) ? (int)$_GET['userGuess'] : null;

        if (!is_null($userGuess)) {
            if ($userGuess === $secretNumber) {
                echo '<p>Congratulations! You guessed the correct number.</p>';
            } else {
                echo '<p>Wrong guess. The correct number is ' . $secretNumber . '.</p>';
            }
        }
    }

    // Start the game
    checkGuess($secretNumber);
}

// Call the function when the page loads
startGuessingGame();
?>

</body>
</html>
