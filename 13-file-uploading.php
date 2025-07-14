<?php
if (isset($_POST["submit"])) {
    if (!empty($_FILES["image"]["name"])) {
        $file_name = $_FILES["image"]["name"];
        $file_tmp = $_FILES["image"]["tmp_name"];
        $save_dir = "uploads/" . $file_name;

        move_uploaded_file($file_tmp, $save_dir);
    } else {
        $message = "Please upload an image";
    }
}
?>

<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST" enctype="multipart/form-data">
    <label>
        Select Image
        <input type="file" name="image" accept="image/*">
    </label>

    <input type="submit" value="submit" name="submit">

    <?php echo $message ?? null ?>
</form>