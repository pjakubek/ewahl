<?php
/**
Klasse zum erzeugen der Tabelle, um diese dann im erg_table.php
file nur noch aufrufen zu müssen, das fördert die schönheit des
programms und wir gewinnen an übersichtlichkeit.
**/
	class table_functions {
		function getTable($dbhost,$dbuser,$dbpass){
		//table head in $output speichern
			$output = 
			'<div class="table-responsive">  
				  <table class="table table-hover table-bordered">
					<thead>
					  <tr>
						<th>#</th>
						<th>Vorname</th>
						<th>Nachname</th>
						<th>Standort</th>
						<th>Stimmen</th>
						<th>Anmerkung</th>
					  </tr>
					</thead>
				<tbody>';
			// wie die verbindung zur datenbank erstellen und testen
			$conn = mysql_connect($dbhost, $dbuser, $dbpass);
					   
				if(! $conn )
				{
				  die('Could not connect: ' . mysql_error());
				}
			//Die Abfrage aus der Datenbank
			$sql = 'SELECT wahlnr,vname,nname,standort,stimmen FROM wahl';
			mysql_select_db('ewahl');
			$retval = mysql_query( $sql, $conn );
					   
			    if(! $retval )
			    {
				  die('Could not get data: ' . mysql_error());
			    }
			    //Schleife zum Abfragen der Inhalte aus der DB
			    while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
			    {   //hinzufügen zum head, den body der Tabelle
					//mit $row und dem attributnamen aus der db lesen
					$output.= "
							<tr>
								<td>{$row['wahlnr']}</td> 
								<td>{$row['vname']}</td>
								<td>{$row['nname']}</td>
								<td>{$row['standort']}</td>
								<td> <input type='textfield'> </td>
								<td> <input type='textfield'> </td>
							</tr> ";
				}
			//letztes hinzufügen zum output -> schließen body und table.
			$output.='</tbody> </table>'; 
			mysql_close($conn);
			//rückgabe der gesamten tabelle
			return $output;
					   
	    }
					
	}
?>