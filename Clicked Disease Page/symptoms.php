<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptoms</title>
    <?php include("header.php"); ?>
    <style>
        h1, h3{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Symptoms page</h1>
    
    <h3>Fill out the following information and let our virtual assistant do the rest!</h3>

    <div class="container">
        <div class="dropdown">
            <button onclick="breedDropdown()" class="dropbtn">Select your breed</button>
            <div id="breedDropdownList" class="dropdown-content">
                
            </div>
        </div>
    </div>
    <!--<?php/*
                    $servername = "localhost";
                    $user = "root";
                    $pass = "pineapple";
                    $db = "capstone";

                    $conn = new mysqli($servername, $user, $pass, $db);

                    if($conn->connect_error){
                        die($conn->connect_error);
                        echo '<script type="text/javascript">
                            var error = "', $conn->connect_error, '";
                            console.error("CONNECTION FAILED...", error);</script>';
                    }


                    #SQL
                    $sql_query = "SELECT * FROM breeds";
                    $result = $conn->query($sql_query);

                    $i = 0;
                    if($result->num_rows>0){
                        
                        while($row = $result->fetch_assoc()){
                            echo '<div class="breed_container">',                            
                                    '<img class="breed" src="..' . $row["image"]. '" alt=""/>',
                                    '<p class="breed_text">' . $row["Bre_name"]. '</p>',
                                '</div>';
                            
                        }
                    } else {
                        echo "ERROR";
                    }

                    mysqli_close($conn);*/
                ?>-->

    <?php include("footer.php"); ?>
</body>
</html>