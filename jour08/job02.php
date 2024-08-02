<?php
session_start();  // Not necessary for cookies, but included in case of session handling

// Initialize or update the 'nbvisites' cookie
if (!isset($_COOKIE['nbvisites'])) {
    setcookie("nbvisites", 1, time() + (86400 * 30), "/");  // Set initial value to 1
    $visits = 1;
} else {
    $visits = $_COOKIE['nbvisites'] + 1;
    setcookie("nbvisites", $visits, time() + (86400 * 30), "/");  // Update the value
}

// Check if the reset button was clicked
if (isset($_POST['reset'])) {
    setcookie("nbvisites", 0, time() + (86400 * 30), "/");  // Reset the cookie value to 0
    $visits = 0;
}

// Display the number of visits
echo "Number of visits: " . $visits;
?>

<!-- HTML Form for Reset Button -->
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>

