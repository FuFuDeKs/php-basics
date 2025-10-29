<?php

$auto = array (
    "marka" => "volvo",
    "modelis" => "s90",
    "gads" => 2025
);

echo $auto["marka"];
    if ($auto["gads"] < 2015)
    {
        echo "Auto ir vecāks par 10 gadiem";
    }
    else
    {
        echo "Auto nav vecāks par 10 gadiem";
    }
