<?php include('class.wedding.php');

$root = simplexml_load_file('guest.xml');
$guest = $root->xpath('//guest[@code="'.$_POST['code'].'"]');
$guest = $guest[0];

if(isset($guest)) { 
    //Save attribute
    
    $guest->dateConf      = date('d/m/Y H:i');
    $guest->note          = $_POST['note'];
    $guest->presence      = array_sum($_POST['presence']);
    $guest->stayOverNight = $_POST['stayOverNight'];
    $guest->nbAdult       = $_POST['nbAdult'];
    $guest->nbChildren    = $_POST['nbChildren'];

    //From BO
    if(isset($_POST['name'])) {
        $guest->dateConf = '';
        $guest->name = $_POST['name'];
    }
    if(isset($_POST['mail'])) {
        $guest->mail = $_POST['mail'];
    }
    if(isset($_POST['invited'])) {
        $guest->invited = array_sum($_POST['invited']);
    }

    $root->saveXML('guest.xml');

    echo 'OK';
}

?>