<?php

function breakLines($string, $length) : string {
    $acc = [];
    $string_arr = explode(' ', $string);
    $current_line_length = 0;

    while (count($string_arr) > 0) {
        $word = $string_arr[0];

        // check if word exceeds max line length
        if (strlen($word) > $length) {
            throw new Exception('word length greater than max line length');
        }

        if ($current_line_length + strlen($word) < $length) {
            // if the current line can handle space + the word
            // add space + word to final string array
            // increments current line length
            // remove treated word from array
            $acc[] = ' ';
            $acc[] = $word;
            $current_line_length += strlen($word);
            array_splice($string_arr, 0, 1);
        } else {
            // otherwise add break line to final string array
            // then reset line counter cause we start a new one
            $acc[] = "\n";
            $current_line_length = 0;
        }
    }
    return implode('', $acc);
}
//echo breakLines("Line with words should break", 15);
//echo breakLines("Line with words should break at this spot", 15);
?>