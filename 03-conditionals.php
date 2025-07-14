<?php
$age = 10;

if ($age >= 18) {
    echo "You are eligible to vote";
} else {
    echo "You are not eligible to vote";
}

$blogs = ["Blog 1", "Blog 2"];
echo !empty($blogs) ? print_r($blogs) : "No blogs found";

$first_blog = $blogs[0] ?? null;
echo $first_blog;
