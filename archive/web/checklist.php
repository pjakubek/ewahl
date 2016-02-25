<?php
$bundesland = 'Burgenland';
$dwanr = 'B01';
$sknzl = '100000';
$name = 'FWA Burgenland';
$lehrer = '18';
$zettel = '30';
?>

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
    <div class="row">
        <div class="col-xs-1">

            <div class="list-group">
                <a href="#" class="list-group-item ">
                    B
                </a>
                <a href="#" class="list-group-item ">
                    K
                </a>
                <a href="#" class="list-group-item ">
                    NÖ
                </a>
                <a href="#" class="list-group-item ">
                    OÖ
                </a>
                <a href="#" class="list-group-item ">
                    S
                </a>
                <a href="#" class="list-group-item ">
                    St
                </a>
                <a href="#" class="list-group-item ">
                    T
                </a>
                <a href="#" class="list-group-item ">
                    V
                </a>
                <a href="#" class="list-group-item ">
                    W
                </a>
            </div>
        </div>
        <div class="col-xs-11">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Checkliste - <?php echo $bundesland; ?>
                </div>
                <div class="panel-body pre-scrollable">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>DWA Nr.</th>
                            <th>Schulkennzahl</th>
                            <th>Schulkurzname</th>
                            <th>Bundlehrer</th>
                            <th>Stimmzettel</th>
                            <th>09</th>
                            <th>08</th>
                            <th>11</th>
                            <th>23</th>
                            <th>25</th>
                            <th>16</th>
                            <th>29</th>
                            <th>19</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        for ($i = 0; $i < 20; $i++) {
                            echo '
                                     <tr>
                                        <td>'.$dwanr.'</td>
                                        <td>'.$sknzl.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$lehrer.'</td>
                                        <td>'.$zettel.'</td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                                        <td> <input type="checkbox"> </td>
                            <td> <input type="checkbox"> </td>
                            <td> <input type="checkbox"> </td>
                        </tr> ';

                        }
                        ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12" align="right">
            <a class="btn btn-success btn-lg" href="#">Speichern</a>
        </div>
    </div>
</div>


</div>
</body>

</html>
