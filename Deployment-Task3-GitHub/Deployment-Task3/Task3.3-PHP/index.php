<?php
$name = "Zhi Ying Chan";
$time = date("d M Y H:i:s");
$message = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $user = htmlspecialchars($_POST["user"] ?? "");
    $message = "Hello, " . $user . "!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>SWE40006 Task 3.3</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 60px; }
        input, button { padding: 8px; font-size: 16px; }
    </style>
</head>
<body>
    <h1>SWE40006 Task 3.3 - PHP on Azure</h1>
    <p>Built by <?php echo $name; ?></p>
    <p>PHP version: <?php echo phpversion(); ?></p>
    <p>Server time: <?php echo $time; ?></p>
    <form method="post">
        <input type="text" name="user" placeholder="Enter your name" required>
        <button type="submit">Say hello</button>
    </form>
    <h2><?php echo $message; ?></h2>
</body>
</html>
