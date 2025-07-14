<?php
for ($i = 0; $i < 10; $i++) {
    echo $i;
}

$j = 10;

while ($j > 0) {
    echo $j;
    $j--;
}

$blogs = ["Blog 1", "Blog 2"];

foreach ($blogs as $index => $blog) {
    echo $index, $blog;
}
