<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/Clicked_Disease.css">
	<?php
	//include ('header.php');
	?>
</head>

<body>
    <!-- Wrapping everything in the paw print bg, but then also including background for content-->
    <div class="bg">
        <div class="wbg">
            <!-- BREAD CRUMBS UPDATE LINKS WHEN READY-->
            <ul>
                <li class="breadcrumbs-item">
                    <a href="breeds.php" class="breadcrumbs-link">Home</a>
                </li>
                <li class="breadcrumbs-item">
                    <a href="symptoms.php" class="breadcrumbs-link">Symptoms</a>
                </li>
                <li class="breadcrumbs-item">
                    <a class="breadcrumbs-link breadcrumbs-link--active">Rabies</a>
                </li>
            </ul>

            <div class="grid-container">
                <div class="gImage">
                    <!-- IMAGE OF CLICKED DISEASE, CURRENTLY JUST A HARDCODED PLACEHOLDER -->
                    <div class="dContainer">
                        <img class="clicked-image" src="Images/Rabies.jpg" alt="Rabies Image">
                        <p>Image by *NAME* from *SOURCE* </p>
                    </div>
                </div>
                <div class="gDisease">
                    <h1> *DISEASE* </h1>
                    <p> Description About *Disease* with its main symptoms Description About *Disease* with its main symptoms Description About *Disease* with its main symptoms </p>
                </div>
                <div class="gRiskList">
                    <h1> At Risk Breeds </h1>
                    <ul>
                        <li> *BREED 1* </li>
                        <li> *BREED 2* </li>
                        <li> *BREED 3* </li>
                    </ul>
                </div>
                <div class="gTransmission">
                    <h2> Transmission </h2>
                    <ul class="cd-list">
                        <li> Lorem ipsum dolor sit amet </li>
                        <li> consectetuer adipiscing elit </li>
                        <li> sed diam nonummy nibh </li>
                    </ul>
                </div>
                <div class="gPrevention">
                    <h2> Prevention </h2>
                    <ul class="cd-list">
                        <li> Lorem ipsum dolor sit amet </li>
                        <li> consectetuer adipiscing elit </li>
                        <li> sed diam nonummy nibh </li>
                    </ul>
                </div>
                <div class="gTreatment">
                    <h1> Treatment </h1>
                    <ul class="cd-list">
                        <li> Lorem ipsum dolor sit amet </li>
                        <li> consectetuer adipiscing elit </li>
                        <li> sed diam nonummy nibh </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
	<?php
	include ('footer.php');
	?>
</html>