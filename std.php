<?php
require_once 'session_start.php';

// Initialize count if it's not set in session
if (!isset($_SESSION['clickCount'])) {
    $_SESSION['clickCount'] = 0;
}

// Increment count if button is clicked
if (isset($_POST['myButton'])) {
    $_SESSION['clickCount']++;
    // Redirect to the same page
    header("Location: {$_SERVER['PHP_SELF']}?clicked=true");
    exit;
}

// Check if button was clicked after redirection
$buttonClicked = isset($_GET['clicked']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Button Click Counter</title>
</head>
<body>
<form method="post">
    <h2>Iam waiting for a free trip bus in perundurai bus stand !</h2>
<button type="submit" name="myButton" <?php if($buttonClicked) echo 'disabled'; ?>>Click here</button>
</form>
</body>
</html>
