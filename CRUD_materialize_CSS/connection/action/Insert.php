<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add new user</title>
</head>
<body>
<div class="row 2196f3 blue">
    <div class="background-color-lighten-2">
        <div class="col s6 offset-s3 white-text text-darken-2"><h1 class="col-3 offset-6">Add new user</h1></div>
    </div>
</div>
<div class="row">
    <form class="col s12" action="AddNewUser.php" method="post">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Unesite ime..." id="first_name" name="first_name" type="text" class="validate">
                <label for="first_name">Ime:</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" name="last_name" placeholder="Unesite prezime..." type="text" class="validate">
                <label for="last_name">Prezime:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="user_name" name="user_name" placeholder="Unesite user name..." type="text" class="validate">
                <label for="user_name">User name:</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="email" name="email" placeholder="Unesite email..." type="email" class="validate">
                <label for="email">Mail:</label>
            </div>
            <div class="switch">
                <label>
                    Nije aktivan
                    <input type="checkbox" name="active" id="active">
                    <span class="lever"></span>
                    Aktivan
                </label>
            </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="subBtn">Submit
            <i class="material-icons right">send</i>
        </button>
    </form>
</div>
</body>
<footer>
    <div class="row 2196f3 blue">
        <div class="background-color-lighten-2">
            <div class="col s6 offset-s3 white-text text-darken-2"><h1 class="col-3 offset-6">Aleksandar Djuric</h1>
                <div class="col 2s offset-s12" id="floatBtn">
                    <a class="btn-floating btn-large waves-effect waves-light dark-blue" href="../../index.php"><i
                                class="material-icons">arrow_back</i></a>
                </div>
                <h5><?php echo date('m/d/Y'); ?></h5></div>
        </div>
    </div>
</footer>
</html>