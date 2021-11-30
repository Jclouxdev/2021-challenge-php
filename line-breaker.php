<?php
function breakLines($string, $length) : string {
    return wordwrap($string, $length);
};
//echo breakLines("Line with words", 15);
//echo breakLines("Line with words should break", 15);
//echo breakLines("Line with words should break at this spot", 15);
//echo PHP_EOL . '-----------------------------------' . PHP_EOL;
//echo breakLines("Title is long\nLine with words break", 12);
?>