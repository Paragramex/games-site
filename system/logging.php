<?php function eventlogger($logtype, $loginfo) {
$path = $_SERVER['DOCUMENT_ROOT'];
date_default_timezone_set("America/Los_Angeles");
$d = mktime();
$logline = $logtype . '|' . $loginfo . '|' . $d . "\n";
// Write to log file:
$logfile = $path.'/db/logs.txt';
// Open the log file in "Append" mode
if (!$handle = fopen($logfile, 'a+')) {
 die("Failed to open log file");
}
// Write $logline to our logfile.
if (fwrite($handle, $logline) === FALSE) {
 die("Failed to write to log file");
}
fclose($handle);
}
?>