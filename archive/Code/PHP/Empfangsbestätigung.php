<?php
/**
 * User: mschwenzner
 * Date: 17.11.2015
 * Time: 18:31
 */

/*Empfangsbestätigung
    $sql = "UPDATE userdata SET Aktiviert='Y' WHERE name='".$_GET['name']."' AND Code='".$_GET['Code']."'";

    // SQL ausführen
    mysql_query($sql) OR die($sql."\n<br/>\n".mysql_error());

    //Anzahl betroffener Datensätze ausgeben:
    if (mysql_affected_rows() < 1)
    {
        echo "Account nicht aktiviert.";
    }
    else
    {
        echo "Account aktiviert!";
    }
*/