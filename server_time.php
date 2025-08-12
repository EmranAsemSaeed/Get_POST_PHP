<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') { // POST to ensure the data was sent from the form
    $name = $_POST['name'] ?? '';
    $color = $_POST['color'] ?? '';

    /**
     * Using POST + redirect with status 303 or 302
     * to prevent form resubmission on page refresh.
     * This follows the PRG pattern (Post/Redirect/Get).
     */
    header("Location: result.php?name=" . urlencode($name) . "&color=" . urlencode($color), true, 303);
    exit;
} else {
    header("Location: form.php", true, 302);
    exit;
}
