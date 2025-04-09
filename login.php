<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Buat coba
$adminEmail = "sholeh@kodingnext.com";
$userEmail1 = "sholeh@kodingnext.com";
$userEmail2 = "kireina@kodingnext.com";

// Fetch email & login
$email = $_POST['email'] ?? null;
$loginType = $_POST['login'] ?? null;

// Debugging submitted values
var_dump($email, $loginType);

// Verify email
if ($email && filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match("/@kodingnext\.com$/", $email)) {
    if ($loginType === 'admin' && $email === $adminEmail) {
        header("Location: admin/dashboard-home.php");
        exit();
    } elseif ($loginType === 'user' && ($email === $userEmail1 || $email === $userEmail2)) {
        header("Location: all-access/home.php");
        exit();
    } else {
        echo "Invalid email for the selected login type";
    }
} else {
    echo "Invalid email domain or missing data";
}
?>
