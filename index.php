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

    <nav>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">Logo</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <!-- <li><a href="sass.html">Sass</a></li>
                <li><a href="badges.html">Components</a></li> -->
                <li><a href="collapsible.html">ADMIN</a></li>
            </ul>
        </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col s6 offset-s3">
            <div class="card grey lighten-4">
                <div class="card-content">
                    <div class="row">
                        <div class="col s12">
                            <div class="card-title center-align">
                                <h5>This should be vertically aligned</h5>
                            </div>
                        </div>
                    </div>
                    <form action="show.php" method="POST">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" name="user" id="autocomplete-input" class="autocomplete">
                                        <label for="autocomplete-input">NAME</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" name="pass" id="autocomplete-input-two" class="autocomplete">
                                        <label for="autocomplete-input-two">PASSWORD</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12">
                                <button class="btn waves-effect waves-light" type="submit" name="submit">Submit     
                                </button>
                            </div>
                        </div>
                   
                    </form>
                </div>
                
            </div>
            </div>
        </div>
    </div>




    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>