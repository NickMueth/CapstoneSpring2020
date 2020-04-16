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
                include("../Master/header.php");
        ?>
        
        

    <link rel="stylesheet" href="../css/home.css">
</head>
<body>
    <div class="page-container">
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
                <?php include("../Breeds/breeds.php"); ?>
            </div>
        </div>
        <?php
            include("../Master/footer.php");
        ?>
    </div>
</body>
</html>