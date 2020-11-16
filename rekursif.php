<?php

function size_sepatu($size)
{
    if($size < 42) {
        echo "$size\n";
        size_sepatu($size + 1);
    }
}
size_sepatu(37);

?>
