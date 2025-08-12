<?php
/**
 * We use POST here because it sends data securely in the request body
 * and does not appear in the URL bar, protecting sensitive information.
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>POST Form</title>
</head>
<body>
    <h1>Submit Your Info</h1>
    <form action="handle_form.php" method="post"> <!-- POST for data protection -->
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" required><br><br>

        <label for="color">Favorite Color:</label>
        <input type="text" name="color" id="color" required><br><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
