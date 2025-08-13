
<?php



// TimeZone Now
date_default_timezone_set('Asia/Riyadh');
$currentTime = date('Y-m-d H:i:s');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Server Time</title>
</head>
<body>
    <h1>Current Server Time</h1>
    <p><?php echo htmlspecialchars($currentTime, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>
