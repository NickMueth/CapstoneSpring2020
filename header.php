<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyDog Virtual Assistant</title>
        
        <link rel="icon" type="image/png" href="img/MyDog_Logo.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Multiple.js -->
        <link href="css/multiple.css" rel="stylesheet">
        <script src="js/multiple.js"></script>

        <link rel="stylesheet" href="css/main.css">

        <script>
            /* Code to apply active class tag to current page, not working, needs jslint probably
            - pretty sure its because the active page is the header in this case lol

            $(document).ready(function (){
                var url = window.location;
                $('ul.nav a[href="'+url+'"]').parent().addClass('active');
                $('.ul.nav a').filter(function(){
                    return this.href==url;
                }).parent().addClass('active');
            });*/

            var multiple = new Multiple({
                selector: '.multi-grad',
                background: 'linear-gradient(#273463, #8B4256)'
            });
        </script>
        <!-- <script src="js/gradients.js"></script> -->
        <!--<link rel="stylesheet" media="screen and (min-width:900px)" href="css/widescreen.css">
        <link rel="stylesheet" media="screen and (max-width:600px)" href="css/narrowscreen.css">

        
            Tools used by Nick Mueth:
                Emmet keybinding
                Sass & Live SassCompile
                LiveServer
                VisualStudioCode
                Multiple.js
                FontAwesome
        -->
</head>
<body>

        <nav class="navbar navbar-expand-lg navbar-dark multi-grad">
            <a class="navbar-brand" href="index.php">
                <img src="img/MyDog_Logo.png" class="brand-img" alt=""/>
            </a>
            <!--a class="bg-danger nav-item nav-link" href="information.php">INFO</a>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="symptoms.php" class="nav-link">Symptoms</a></li>
                    <li class="nav-item"><a href="problems.php" class="nav-link">Problems</a></li>
                    <li class="nav-item"><a href="tipsandtricks.php" class="nav-link">Tips & Tricks</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                </ul>
            </div>
        </nav>

</body>
</html>