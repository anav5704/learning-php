<?php
session_start();

if (isset($_POST["submit"])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST["password"];

    if ($username == "aanaav" && $password == "password") {
        $_SESSION['username'] = $username;
        header("Location: /extras/dashboard.php");
    } else {
        echo "Incorrect credentials";
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <label>
        Username
        <input type="text" name="username">
    </label>

    <label>
        Password
        <input type="password" name="password">
    </label>

    <input type="submit" name="submit" value="submit">
</form>