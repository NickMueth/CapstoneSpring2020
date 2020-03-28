<!DOCTYPE html>
<html lang="en">
<head>
        <!--        
            Tools used by Nick Mueth:
                Emmet keybinding
                Sass & Live SassCompile
                LiveServer
                VisualStudioCode
                Multiple.js
                WAMPServer
                FontAwesome
        -->
        <?php
                include("header.php");
            ?>
        
        

    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div class="page-container">
            
        <!--<nav class="navbar navbar-expand-lg navbar-dark multi-grad">
            <a class="navbar-brand" href="index.html">
                <img src="img/MyDog_Logo.png" class="brand-img" alt=""/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Symptoms</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Ailments</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Tips & Tricks</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                </ul>
            </div>
        </nav>-->
        <!--<div class="jumbotron">
            <h1>Got a sick pup?</h1>
        </div>-->
        <div class="content-wrap">
            <div id="home" class="multi-grad">
                <div id="heading">
                    <h1>Welcome to the MyDog Virtual Assistant.</h1>
                    <h4>Start by selecting a bubble, or scroll down to search by breed</h4>
                </div>

                <div class="bubbles">
                    <a id="Bbl-Symptoms" class="bubble" href="symptoms.php">Symptoms</a>
                    <a id="Bbl-Problems" class="bubble" href="problems.php">Problems</a>
                    <a id="Bbl-Diseases" class="bubble" href="diseases.php">Diseases</a>
                    <a id="Bbl-TipsAndTricks" class="bubble" href="tipsandtricks.php">Tips & Tricks</a>
                </div>
                <div id="divider">
                    <a href="#breeds"><span id="arrow-down" class="fas fa-chevron-down"></span></a>
                </div>
                <br><br>
                <?php include("breeds.php"); ?>
            </div>
        </div>
            <?php
                include("footer.php");
            ?>
        <!--
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <a href="#" class="nav-link">Navigation Elements</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="nav-link">Disclaimer</a>
                    </div>
                    <div class="col-md">
                        <a href="#" class="nav-link">Social Media/Legal Elements</a>
                    </div>
                </div>
            </div>
        </footer>-->
    </div>
</body>
</html>