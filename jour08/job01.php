<?php
session_start();
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}
if (!isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
else {
    $_SESSION['nbvisites']++;
}

echo "Number of visits: " .$_SESSION['nbvisites'];
echo "<pre>";
print_r($_SESSION);  // Debugging information
echo "</pre>";
?>
<form method="post">
    <button type="submit" name="reset">Reset</button>
</form>
