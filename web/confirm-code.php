<?php 
$root = simplexml_load_file('guest.xml');
$guest = $root->xpath('//guest[@code="'.$_POST['code'].'"]');

if($guest) {
    include('main.php');
}
?>