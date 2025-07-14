<?php
if (isset($_POST["submit"])) {
    echo $_POST["name"];
}
?>

<a href="<?php echo $_SERVER["PHP_SELF"] ?>?name=anav">Refresh</a>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
    <label>
        Name
        <input type="text" name="name">
    </label>

    <input type="submit" name="submit" value="submit">
</form>