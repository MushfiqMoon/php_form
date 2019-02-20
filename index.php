<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>basic form</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>

    <form action="show.php" method="POST">
        <div class="row">
            <div class="col s4">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" name="user" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">NAME</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s4">
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" name="pass" id="autocomplete-input" class="autocomplete">
                        <label for="autocomplete-input">PASSWORD</label>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col s4">
                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit     
                </button>
            </div>
        </div>
    </form>


    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>