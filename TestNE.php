<?php
/**
 * Created by PhpStorm.
 * User: jetaimefrc
 * Date: 25/06/2018
 * Time: 18:01
 */
//echo "VKL";
//$studen = array(
//);
//
//$studen["se05439"]  ="Tran Quang Nhat";
//echo  $studen["se05439"];
//
//$human = array("A", "B");
//print_r($human);
//
//$point = array(
//  10,9  , 6, 6,23, 25,234,12
//);
//
//foreach ($point as $key => $value){
//  echo $key . " => " . $value;
//}
//foreach ($point as $value){
//  echo $value . " </br> ";
//}
//$sinhvien = array(
//  'SV001' => 'Nguyễn Văn A',
//  'SV002' => 'Nguyễn Văn B',
//  'SV003' => 'Nguyễn Văn C',
//  'SV004' => 'Nguyễn Văn D',
//  'SV005' => 'Nguyễn Văn E'
//);
//// Xuất ra danh sách sinh viên
//foreach ($sinhvien as $tensv){
//  echo '<br/>' . $tensv ;
//}
//$a = 1;
//
//// Hàm tăng giá trị tham số truyền vào lên 1
//function tang_len_1($a)
//{
//  return $a + 1;
//}
//
//// Xuất giá trị trả về của hàm
//echo tang_len_1($a) ;
//
//// Xuất giá trị của biến
//echo "</br>" . $a;

//$_GET = array(
//  "id" => "12",
//  "title" => "XXXX"
//);
//$id = $_GET["id"];
//echo  "$id\n";
//$title = $_GET["title"];
//echo  "$title\n";
//
//foreach ($_GET as $key => $value){
//  echo '<strong>' . $key . " => " . $value . "<strong>\n";
//}
//
//echo (addcslashes('freetuts.net FREETUTS.NET', 'a..z'));
//// kết quả: \f\r\e\e\t\u\t\s.\n\e\t

//$str = 'freetuts.net is a website free for you';
//
//// Mỗi khoảng trắng sẽ là một phần tử trong mảng<br />
//$split = array();
//
//$split  = var_dump(explode(' ', $str));
//foreach ($split as $key => $value){
//  echo  $key . "=>" . $value . "\n";
//}
//echo  $split[1];

/*Kết quả
array
    0 => 'freetuts.net',
    1 => 'is',
    2 => 'a' ,
    3 => 'website',
    4 => 'free',
    5 => 'for' ,
    6 => 'you' */
$str = 'Freetuts Xin Chào Các Bạn';
$str = str_replace( array('Freetuts', 'Xin Chào'), array('Freetuts.net', 'Hello'), $str );
echo $str;
