<?php
require "../dbBroker.php";
require "../model/prijava.php";

if (
    (isset($_POST['predmet']) && isset($_POST['katedra']) && isset($_POST['sala']) && isset($_POST['datum']) && isset($_POST['id'])) {
        $obj = new Prijava(null, $_POST['predmet'], $_POST['katedra'], $_POST['sala'], $_POST['datum']);
        ($obj->update($_POST['id'], $conn))? echo "Success": echo "Failed"
}

?> 