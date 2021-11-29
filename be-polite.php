<?php
date_default_timezone_set('');
$hour = date('H');
if ($hour >= 6 && $hour <= 12 ) {
  echo "Hello! Have a nice day :)";
} else if ($hour > 12 && $hour <= 18) {
  echo "Have a good afternoon!";
} else if ($hour > 18 && $hour <= 21 ) {
  echo "Good evening! Hope you had a good day!";
} else {
  echo "Good night! See you tomorrow :)";
}
?>