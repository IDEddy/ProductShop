<?php
$a[] = "AMD";
$a[] = "Bridge";
$a[] = "Cpu";
$a[] = "Data";
$a[] = "Ethernet";
$a[] = "Folders";
$a[] = "Gpu";
$a[] = "House";
$a[] = "Internet";
$a[] = "Jacket";
$a[] = "Kitchen";
$a[] = "Line";
$a[] = "Neon";
$a[] = "Original";
$a[] = "Penthouse";
$a[] = "Mouse";
$a[] = "Keyboard";
$a[] = "Center";
$a[] = "Datagram";
$a[] = "Eleven";
$a[] = "Monitor";
$a[] = "Sun";
$a[] = "Triangle";
$a[] = "University";
$a[] = "Video game";
$a[] = "Lovecraft";
$a[] = "Exile";
$a[] = "Easter";
$a[] = "Wireless";
$a[] = "Programming";
$a[] = "Yellow";
$a[] = "Zebra";
$a[] = "Xphone";
$a[] = "Quarter";
$a[] = "Router";
$a[] = "Sockets";

$q = $_REQUEST["q"];

$hint = "";


if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) { 
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

echo $hint === "" ? "" : $hint;
?>