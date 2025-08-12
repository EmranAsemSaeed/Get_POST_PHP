<?php


/**
 * We use GET here because the purpose is to display information based on a parameter,
 * there is no sensitive data, and the URL can be easily shared.
 */
$name = $_GET['name'] ?? 'Guest';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Page</title>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>!</h1>
</body>
</html>
