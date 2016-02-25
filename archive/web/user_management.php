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
                <input type="text" class="form-control" placeholder="Benutzer Suchen">
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
                    <b>Benutzer</b>
                </div>
                <div class="panel-body pre-scrollable">
                    <div class="list-group">
                        <a href="#" class="list-group-item ">
                            <h5 class="list-group-item-heading">B02</h5>

                            <p class="list-group-item-text">BBAKIP Oberwart</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h5 class="list-group-item-heading">B03</h5>

                            <p class="list-group-item-text">HLW Güssing</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h5 class="list-group-item-heading">B04</h5>

                            <p class="list-group-item-text">HTBLVA Wien XX</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h5 class="list-group-item-heading">Benutzer 4</h5>

                            <p class="list-group-item-text">HTBLVA Wien XX</p>
                        </a>
                        <a href="#" class="list-group-item ">
                            <h5 class="list-group-item-heading">Benutzer 5</h5>

                            <p class="list-group-item-text">HTBLVA Wien XX</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b>Benutzerdetails</b>
                </div>
                <div class="panel-body pre-scrollable">
                    <b>Schulkurzname:&nbsp;</b>BBAKIP Oberwart
                    <hr/>
                    <b>Schulkennzahl:&nbsp;</b>109810
                    <hr/>
                    <b>E-Mail:&nbsp;</b>text.text@host.com
                    <hr/>
                    <b>Berechtigung:&nbsp;</b>user
                    <hr/>
                    <b>DWA Nr.:&nbsp;</b>B02
                    <hr/>
                    <b>Fortschritt:&nbsp;</b>
                    <br/>&nbsp;
                    <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-xs-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <b>Erledigte Formulare</b>
                </div>
                <div class="panel-body pre-scrollable">
                    <div class="list-group">
                        <a href="#" class="list-group-item ">
                            <h5 class="list-group-item-heading">ZA_21F</h5>

                            <p class="list-group-item-text">
                                <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                            </p>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="row">&nbsp;</div>
    <div class="row">&nbsp;</div>
    <div class="row btn-group-lg">
        <div class="col-xs-3" align="center">
            <a class="btn btn-success btn-lg" href="#add" data-toggle="modal" role="button">Benutzer Anlegen</a>
        </div>
        <div class="col-xs-3" align="center">
            <a class="btn btn-success btn-lg" href="#edit" data-toggle="modal" role="button">Benutzer Bearbeiten</a>
        </div>
        <div class="col-xs-3" align="center">
            <a class="btn btn-success btn-lg" href="#delete" data-toggle="modal" role="button">Benutzer Löschen</a>
        </div>
        <div class="col-xs-3" align="center">
            <a class="btn btn-success btn-lg" href="#password" data-toggle="modal" role="button">Passwort Zurücksetzen</a>
        </div>
    </div>
</div>


</div>

<div class="modal fade" id="add" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="textgreen">Benutzer Hinzufügen</h3>
            </div>
            <div class="modal-body textblack">
                <p class="textblack">Bitte füllen Sie alle Textfelder aus.</p>
                <hr>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Schulkurzname</span>
                    <input type="text" class="form-control" placeholder="Schulkurzname" aria-describedby="sizing-addon1">
                </div>
                <div class="row">&nbsp;</div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Schulkennzahl</span>
                    <input type="text" class="form-control" placeholder="Schulkennzahl" aria-describedby="sizing-addon1">
                </div>
                <div class="row">&nbsp;</div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">E-Mail</span>
                    <input type="text" class="form-control" placeholder="E-Mail" aria-describedby="sizing-addon1">
                </div>
                <div class="row">&nbsp;</div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">DWA Nr.</span>
                    <input type="text" class="form-control" placeholder="DWA Nr." aria-describedby="sizing-addon1">
                </div>
                <hr>
                <input type="radio" name="permission" value="admin">&nbsp;Admin&nbsp;
                <input type="radio" name="permission" value="user">&nbsp;User&nbsp;
                <input type="radio" name="permission" value="mod">&nbsp;Moderator&nbsp;
            </div>
            <div class="modal-footer">
                <a class="btn btn-default btn-lg" href="user_management.php">Abbrechen</a>
                <a class="btn btn-success btn-lg" href="#">Speichern</a>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="edit" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="textgreen">Benutzer Bearbeiten</h3>
            </div>
            <div class="modal-body textblack">
                <p class="textblack">Bitte füllen Sie alle Textfelder aus.</p>
                <hr>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Schulkurzname</span>
                    <input type="text" class="form-control" placeholder="Schulkurzname" aria-describedby="sizing-addon1">
                </div>
                <div class="row">&nbsp;</div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">Schulkennzahl</span>
                    <input type="text" class="form-control" placeholder="Schulkennzahl" aria-describedby="sizing-addon1">
                </div>
                <div class="row">&nbsp;</div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">E-Mail</span>
                    <input type="text" class="form-control" placeholder="E-Mail" aria-describedby="sizing-addon1">
                </div>
                <div class="row">&nbsp;</div>
                <div class="input-group input-group-lg">
                    <span class="input-group-addon" id="sizing-addon1">DWA Nr.</span>
                    <input type="text" class="form-control" placeholder="DWA Nr." aria-describedby="sizing-addon1">
                </div>
                <hr>
                <input type="radio" name="permission" value="admin">&nbsp;Admin&nbsp;
                <input type="radio" name="permission" value="user">&nbsp;User&nbsp;
                <input type="radio" name="permission" value="mod">&nbsp;Moderator&nbsp;
            </div>
            <div class="modal-footer">
                <a class="btn btn-default btn-lg" href="user_management.php">Abbrechen</a>
                <a class="btn btn-success btn-lg" href="#">Speichern</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="textred">Benutzer Löschen</h3>
            </div>
            <div class="modal-body textblack">
                <h5 class="textred">Sind Sie sicher, dass sie den folgenden Benutzer Löschen wollen?</h5>
                <hr>
                <b>Schulkurzname:</b> BBAKIP Oberwart <br>
                <b>Schulkennzahl:</b> 109810 <br>
                <b>DWA Nr:</b> B02 <br>
                <b>E-Mail:</b> text.text@host.at
                <hr>
                <h6 class="textred">Diese Aktion entfernt alle Daten diese Benutzers aus der Datenbank.<br>Dies Kann nicht widerrufen werden!</h6>

            </div>
            <div class="modal-footer">
                <a class="btn btn-default btn-lg" href="user_management.php">Abbrechen</a>
                <a class="btn btn-danger btn-lg" href="#">Löschen</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="password" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="textgreen">Passwort zurücksetzen</h3>
            </div>
            <div class="modal-body textblack">
                <h5>Sind Sie sicher, dass Sie das Passwort für folgenden Benutzer zurücksetzen möchten?</h5>
                <hr>
                <b>Schulkurzname:</b> BBAKIP Oberwart <br>
                <b>Schulkennzahl:</b> 109810 <br>
                <b>DWA Nr:</b> B02 <br>
                <b>E-Mail:</b> text.text@host.at
                <hr>
                <h6>Der Benutzer erhält anschließend eine E-Mail mit den Anweisungen, die nötig sind, sein neues Passwort einzutragen.</h6>

            </div>
            <div class="modal-footer">
                <a class="btn btn-default btn-lg" href="user_management.php">Abbrechen</a>
                <a class="btn btn-warning btn-lg" href="#">Passwort zurücksetzen</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>
