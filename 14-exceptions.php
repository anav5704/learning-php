<?php
function inverse($x)
{
    if (!$x) {
        throw new Exception("Division by 0");
    }

    return 1 / $x;
}

try {
    echo inverse(0);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Completed";
}
