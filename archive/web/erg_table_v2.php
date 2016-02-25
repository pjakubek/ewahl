<?php require_once( 'table_funktionen.php'); //importieren des funtionen files zum einbinden der tabelle ?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>eWahl | sicher, zuverl&auml;ssig, zentral</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery (notwendig für Bootstraps JavaScript Plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Alle Plugins als verkleinerte Version laden -->
    <script src="js/bootstrap.js"></script>
</head>

<body>
    <!-- HEADER -->
    <div class="row jumbotron">
        <div class="col-xs-1">&nbsp;</div>
        <div class="col-xs-3"><img src="img/logo_3.png" width="90%" alt="logo" />
        </div>
        <div class="col-xs-1">&nbsp;</div>
        <div class="col-xs-6">
        </div>
        <div class="col-xs-1">&nbsp;</div>
    </div>
    <!-- Tabellenbeginn -->
    <div class="container textblack">
        <div class="row">
            <div class="col-xs-12">
                <h2>Wahlergebnisse</h2>
                <!-- Aufrufen der Table Funktion 
					 um die tabelle anzuzeigen-->
				<?php 
				$tf=new table_functions; 
				echo $tf->getTable('localhost','root','0668'); 
				?>
            </div>
        </div>
    </div>
	<!-- Tabellen Ende -->
	
	<!-- Speicher Button -->
    <div class="row">
        <div class="col-xs-12" align="center">
			<a class="btn btn-success btn-lg" href="#success" data-toggle="modal" role="button">Speichern</a>
        </div>
    </div>

	<!-- Bootstrap Modalfenster (=Erfolgfenster) -->
    <div class="modal fade" id="success" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
					<h2 class="textgreen">Erfolg!</h2>
                </div>
                <div class="modal-body textblack">
                    <h4 class="textblack">Ihre Einträge wurden erfolgreich übernommen.</h4>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-success btn-lg" href="erg_table.php">Schliessen</a>
                </div>
            </div>
        </div>
	</body>
</html>