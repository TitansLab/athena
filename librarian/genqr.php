<?php
include_once("../config.php");
require_once '../vendor/phpqrcode/qrlib.php';
$path = '../src/uploads/qrcode/';
$qrcode = $path.time().".png";
$qrimage = time().".png";


QRcode::png('hello', $qrcode, 'H', 4, 4);
echo "<img src='".$qrcode."'>";
?>