<?php
date_default_timezone_set("Asia/Calcutta");
$hour = date('H');

if ($hour <  12) {
    $greetings = "Good Morning";
} elseif ($hour >= 12) {
    $greetings = "Good Afternoon";
} elseif ($hour > 17) {
    $greetings = "Good Evening";
} elseif ($hour >= 20) {
    $greetings = "Good Night";
}
echo $greetings;
?>
