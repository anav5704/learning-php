<?php
if (isset($_POST["submit"])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);

    echo $name;
}
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
    <label>
        Name
        <input type="text" name="name">
    </label>

    <input type="submit" name="submit" value="submit">
</form>