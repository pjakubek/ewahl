<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>eWahl | sicher, zuverl&auml;ssig, zentral</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- jQuery (notwendig für Bootstraps JavaScript Plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Alle Plugins als verkleinerte Version laden -->
    <script src="js/bootstrap.js"></script>
</head>
<body>
<div class="row jumbotron">
    <div class="col-xs-1">&nbsp;</div>
    <div class="col-xs-3"><img src="img/logo_3.png" width="90%" alt="logo"/></div>
    <div class="col-xs-1">&nbsp;</div>
    <div class="col-xs-6">

    </div>
    <div class="col-xs-1">&nbsp;</div>
</div>
<div class="container textblack">
    <div class="row"> &nbsp; </div>
    <div class="row">
        <div class="col-xs-2"> &nbsp; </div>
        <div class="col-xs-8">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Formular Suchen">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button">Los!</button>
        </span></div>
        </div>
        <div class="col-xs-2"> &nbsp; </div>
    </div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row">
        <div class="col-xs-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b>Formulare</b>
                </div>
                <div class="panel-body pre-scrollable">
                    <div class="list-group">
                        <?php
                        for ($i = 0; $i < 10; $i++) {
                            echo '<a href="#" class="list-group-item "><h5 class="list-group-item-heading">' . 'Formular ' . $i . '&nbsp;&nbsp;&nbsp;<input type="checkbox"></h5></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b>Formulardetails</b>
                </div>
                <div class="panel-body pre-scrollable">
                    <b>Bezeichnung:&nbsp;</b>Formular 01F
                    <hr/>
                    <b>Zuletzt aktualisiert:&nbsp;</b>2015-11-17 15:22:12
                    <hr/>
                    <b>Zulässige Bearbeitung:&nbsp;</b>digital
                    <hr/>
                    <b>Dateiformat:&nbsp;</b>.docx
                </div>
            </div>
        </div>
    </div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row btn-group-lg">
        <div class="col-xs-4" align="center">
            <a class="btn btn-success btn-lg" href="#" role="button">Formular Hochladen</a>
        </div>
        <div class="col-xs-4" align="center">
            <a class="btn btn-success btn-lg" href="#release" data-toggle="modal">Formular Freigeben</a>
        </div>
        <div class="col-xs-4" align="center">
            <a class="btn btn-success btn-lg" href="#" role="button">Formular Löschen</a>
        </div>
    </div>
</div>


</div>
<div class="modal fade" id="release" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="textgreen">Formular Freigeben</h3>
            </div>
            <div class="modal-body">
                <p class="textblack">Bitte wählen Sie die Empfänger aus.</p>
                <hr>
                <div class="textgreen">
                    <h5>Zentralausschuss&nbsp;|&nbsp;ZA&nbsp;&nbsp;<input type="checkbox"></h5>
                </div>
                <div class="textgreen">
                    <h5>Fachausschuss&nbsp;|&nbsp;FA&nbsp;&nbsp;<input type="checkbox"></h5>
                </div>
                <div class="textgreen">
                    <h5>Dienststellenausschuss&nbsp;|&nbsp;DA&nbsp;&nbsp;<input type="checkbox"></h5>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-default btn-lg" href="form_management.php">Schließen</a>
                <a class="btn btn-success btn-lg" href="#">Formular Freigeben</a>
            </div>
        </div>
    </div>

</div>
</body>

</html>
