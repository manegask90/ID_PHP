<?php
$storage = [78, 4, 0, 6, 55, 13, 107, 55, 12, 32, 1, 5, 12, 78, 89];

foreach ($storage as $value) {
    if ($value % 2 == 0) {
        echo $value;
        echo '<br>';
    }
}
