<?php

declare(strict_types=1);

$name = $_GET['name'] ?? 'Guest'; // GET is used here to display data after the redirect
$color = $_GET['color'] ?? 'black';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
    <h1>Hello, <?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>!</h1>
    <p style="color: <?php echo htmlspecialchars($color, ENT_QUOTES, 'UTF-8'); ?>">
        Your favorite color is <?php echo htmlspecialchars($color, ENT_QUOTES, 'UTF-8'); ?>.
    </p>
</body>
</html>
