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
    /*
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
    */
    
    
    #mysqli_close($conn);
?>