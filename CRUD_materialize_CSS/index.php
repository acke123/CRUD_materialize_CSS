<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Logic</title>
</head>
<body>
<div class="row blue">
    <div class="background-color-lighten-2">
        <div class="col s6 offset-s3 white-text text-darken-2"><h1 class="col-3 offset-6">Moj drugi Material</h1></div>
    </div>
</div>
<?php require 'connection/TableConnectionData.php' ?>
<script src="script/remove.js"></script>
</body>
<footer>
    <div class="row 2196f3 blue">
        <div class="background-color-lighten-2">
            <div class="col s6 offset-s3 white-text text-darken-2"><h1 class="col-s3 offset-s6">Aleksandar Djuric</h1>
                <div class="col 2s offset-s12" id="floatBtn">

                    <a class="btn-floating btn-large waves-effect waves-light dark-blue" href="connection/action/Insert.php"><i
                                class="material-icons">add</i></a>
                </div>
                <h5><?php echo date('m/d/Y'); ?></h5></div>
        </div>
    </div>
</footer>
<script src="script/floatingButton.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</html>