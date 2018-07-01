<?php require_once 'import.php';
//echo "Dmm nhin cai cc";
//test();
var_dump(filter_var('jetaimefrc@gmail.com', FILTER_VALIDATE_EMAIL));
echo "<br>";
var_dump(filter_var('http://google.com', FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED));
/*
 * Example
 */
//
//$email = array('localpart.ending.with.dot.@example.com',
//  '(comment)localpart@example.com',
//  '"this is v@lid!"@example.com',
//  '"much.more unusual"@example.com',
//  'postbox@com',
//  'jetaimefrc@gmail.com',
//  'admin@mailserver1',
//  '"()<>[]:,;@\\"\\\\!#$%&\'*+-/=?^_`{}| ~.a"@example.org',
//  '" "@example.org');
//
//foreach ($email as $address) {
//  echo "<p>$address is <b>" . (filter_var($address, FILTER_VALIDATE_EMAIL) ? '' : 'not') . " valid</b></p>";
//}

/*
 * Loc ra 1 cai nao true || false
 */
//$vals = array('on', 'On', 'ON', 'off', 'Off', 'OFF', 'yes', 'Yes', 'YES',
//  'no', 'No', 'NO', 0, 1, '0', '1', 'true',
//  'True', 'TRUE', 'false', 'False', 'FALSE', TRUE, FALSE, 'foo', 'bar');
//foreach ($vals as $val) {
//  echo var_export($val, TRUE) . ': ';
//  var_dump(filter_var($val, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
//  echo "</br>";
//}

//function toDash($value)
//{
//  return str_replace(".", "+", $value);
//}
//
//function checkIP($ip)
//{
//  return (filter_var($ip, FILTER_VALIDATE_IP)) ? " " : "not valid IP";
//}
//
//function validate_email($email, $strict = TRUE)
//{
//  $dot_string = $strict ?
//    '(?:[A-Za-z0-9!#$%&*+=?^_`{|}~\'\\/-]|(?<!\\.|\\A)\\.(?!\\.|@))' :
//    '(?:[A-Za-z0-9!#$%&*+=?^_`{|}~\'\\/.-])';
//  $quoted_string = '(?:\\\\\\\\|\\\\"|\\\\?[A-Za-z0-9!#$%&*+=?^_`{|}~()<>[\\]:;@,. \'\\/-])';
//  $ipv4_part = '(?:[0-9]|[1-9][0-9]|1[0-9][0-9]|2[0-4][0-9]|25[0-5])';
//  $ipv6_part = '(?:[A-fa-f0-9]{1,4})';
//  $fqdn_part = '(?:[A-Za-z](?:[A-Za-z0-9-]{0,61}?[A-Za-z0-9])?)';
//  $ipv4 = "(?:(?:{$ipv4_part}\\.){3}{$ipv4_part})";
//  $ipv6 = '(?:' .
//    "(?:(?:{$ipv6_part}:){7}(?:{$ipv6_part}|:))" . '|' .
//    "(?:(?:{$ipv6_part}:){6}(?::{$ipv6_part}|:{$ipv4}|:))" . '|' .
//    "(?:(?:{$ipv6_part}:){5}(?:(?::{$ipv6_part}){1,2}|:{$ipv4}|:))" . '|' .
//    "(?:(?:{$ipv6_part}:){4}(?:(?::{$ipv6_part}){1,3}|(?::{$ipv6_part})?:{$ipv4}|:))" . '|' .
//    "(?:(?:{$ipv6_part}:){3}(?:(?::{$ipv6_part}){1,4}|(?::{$ipv6_part}){0,2}:{$ipv4}|:))" . '|' .
//    "(?:(?:{$ipv6_part}:){2}(?:(?::{$ipv6_part}){1,5}|(?::{$ipv6_part}){0,3}:{$ipv4}|:))" . '|' .
//    "(?:(?:{$ipv6_part}:){1}(?:(?::{$ipv6_part}){1,6}|(?::{$ipv6_part}){0,4}:{$ipv4}|:))" . '|' .
//    "(?::(?:(?::{$ipv6_part}){1,7}|(?::{$ipv6_part}){0,5}:{$ipv4}|:))" .
//    ')';
//  $fqdn = "(?:(?:{$fqdn_part}\\.)+?{$fqdn_part})";
//  $local = "({$dot_string}++|(\"){$quoted_string}++\")";
//  $domain = "({$fqdn}|\\[{$ipv4}]|\\[{$ipv6}]|\\[{$fqdn}])";
//  $pattern = "/\\A{$local}@{$domain}\\z/";
//  return preg_match($pattern, $email, $matches) &&
//    (
//      !empty($matches[2]) && !isset($matches[1][66]) && !isset($matches[0][256]) ||
//      !isset($matches[1][64]) && !isset($matches[0][254])
//    );
//}


?>
