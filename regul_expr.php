<?php
$str = "+7(909)152-61-68";
$pattern = "/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/";
echo preg_match($pattern, $str); // Outputs 1
?>