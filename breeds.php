<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .breeds{
            position: static;
            margin-left: 10vw;
            margin-right: 10vw;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }
        .breed_container{
            position:relative;
            margin:25px;
            height: 10rem;
            width: 10rem;
            text-align:center;
            vertical-align:middle;
            
            background-color: var(--primary);
            border-radius:25px;
        }
        .breed_container:hover .breed{
            filter: blur(4px);
            opacity:0.5;
            
        }
        .breed_container:hover .breed_text{
            opacity:1;
        }
        .breed{

            object-fit:cover;
            width:inherit;
            height:inherit;
            border-radius: 25px;
            text-decoration: none;
            transition: ease-in-out 0.3s, opacity .3s;
            
        }   
        
        .breed_text{
            padding-left:1rem;
            padding-right:1rem;
            font-size:1.5rem;
            color:white;
            position:absolute;
            left:0;
            right:0;
            top:1.5rem;
            bottom:1rem;
            justify-content:center;
            vertical-align:middle;
            text-decoration: none;
            opacity:0;

            transition: ease-in-out 0.3s, opacity .3s;
        }
    </style>
</head>
<body>
        <div id="home" class="multi-grad">
            <div class="breeds" id="breeds">
                <?php
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
                    $sql_query = "SELECT * FROM breeds ORDER BY Bre_id";
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

                    mysqli_close($conn);
                ?>
            </div>
        </div>
</body>
</html>