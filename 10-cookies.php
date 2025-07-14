<?php
setcookie("name", "Anav", time() + 86400 * 7);

if (isset($_COOKIE["name"])) {
    echo $_COOKIE["name"];
}
