<?php
require('Zugangslink.php');
/**
 * User: mschwenzner
 * Date: 11.11.2015
 * Time: 17:38
 */

//$empfeanger = "".$_POST['mail']."";
$formular = "formularname"; //aus datenbank (bitte)
$betreff = "ZWA 2017: Formular".$formular."ist nun für Sie verfügbar";
$user = "achmed"; //aus datenbank (bitte)
$inhalt = "
Guten Tag ".$user.",<br>
es wurde ein Wahlformular für Sie freigegeben. Zugang dazu haben Sie mit dem folgenden Link:<br><br>

".linkgen()."<br><br>

Bitte füllen Sie das Formular gewissenhaft bis spätestens zum Ende der Frist aus.<br> 

Bei Fragen wenden Sie sich bitte an den Zuständigen ihres Standortes.<br><br>

Mit freundlichen Grüßen<br>
Ihr eWahl Team
";

//mail($empfeanger, $betreff, $inhalt, "FROM: was auch immer<support>");

echo $inhalt;
?>