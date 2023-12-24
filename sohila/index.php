
<?php
if (isset($_POST['btntest'])) {
    $email = $_POST['email'];

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "bakery_form";

    $conn = mysqli_connect($host, $user, $password, $db);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Sanitize the email input to prevent SQL injection
    $email = mysqli_real_escape_string($conn, $email);

    $insert = "INSERT INTO customerinfo (email) VALUES ('$email')";
    if (mysqli_query($conn, $insert)) {
        echo "<h1 style='color:green;'>Your registration is successful</h1>";
    } else {
        echo "<h1 style='color:red;'>Your registration failed: " . mysqli_error($conn) . "</h1>";
    }

    mysqli_close($conn);
}
?>
