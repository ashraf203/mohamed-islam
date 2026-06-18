<?php

$color = 'brown';

switch ($color) {
    case 'red':
    case 'yellow':
        echo "i don't perfer this color <br>";
        break;
    case 'black':
    case 'blue':
        echo "i like this color <br>";
        break;
    default:
        echo "not supported color <br>";
}
