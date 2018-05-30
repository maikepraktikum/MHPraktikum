<?php

$Anrede = $_POST["Anrede"];
$Name = $_POST["Name"];
echo "Name: $Anrede $Name";
$email = $_POST["E-Mail"];
$Text = $_POST["Text"];
$Betreff = $_POST["Betreff"];
$Nachricht = $_POST["Nachricht"];

echo "Kontaktdaten/: $email $Text $Betreff $Nachricht";
