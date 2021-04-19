<?php

class Santri
{

}

$classes = get_declared_classes();

echo "classes: " . implode(', ', $classes) . "<br>";

$Classnames = ['Product', 'Santri', 'santri'];

foreach ($Classnames as $Classname) {
    if (class_exists($Classname)) {
        echo "{$Classname} class ada <br>";
    } else {
        echo "{$Classname} class tidak ada <br>";
    }
}