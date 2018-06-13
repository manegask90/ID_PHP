<?php
function pairs($a)
{
    foreach ($a as $value) {
        if ($value % 2 == 0) {
            echo $value;
            echo '<br>';
        }
    }
}