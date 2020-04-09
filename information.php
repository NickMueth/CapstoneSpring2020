<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("header.php");
        include("connection.php");
    ?>
    <style>
        .page-container{
            margin-left: 5vw;
            margin-right:5vw;
        }

        
    </style>

    
</head>

<body>

    <div class="page-container">
    <br>
        <div class="row">
            <div class="col">
                <h2>BREEDS</h2>
                <hr>
                <table>
                    <tr>
                        <th>Bre_id</th>
                        <th>Bre_name</th>
                        <th>Bre_code</th>
                    </tr>
                    <?php 
                        $getBreeds = $conn->prepare("SELECT * FROM Breeds ORDER BY Bre_id");
                        $getBreeds->execute();
                        $breedResult = $getBreeds->get_result();
                        if($breedResult->num_rows===0) exit('No rows');
                        while($row = $breedResult->fetch_assoc()){
                            $bre_id = $row["Bre_id"];
                            $bre_name = $row["Bre_name"];
                            $bre_code = $row["Bre_code"];
                            echo '<tr><td>'.$bre_id.'</td><td>'.$bre_name.'</td><td>'.$bre_code.'</td></tr>';
                        }
                    ?>
                </table>
            </div>

            <div class="col">
                <h2>PROBLEMS</h2>
                <hr>
                <table>
                    <tr>
                        <th>Prob_ID</th>
                        <th>Prob_Name</th>
                        <th>Prob_code</th>
                    </tr>
                    <?php 
                        $getProblems = $conn->prepare("SELECT * FROM Problems ORDER BY Prob_id");
                        $getProblems->execute();
                        $probResult = $getProblems->get_result();
                        if($probResult->num_rows===0) exit('No rows');
                        while($row = $probResult->fetch_assoc()){
                            $prob_id = $row["Prob_id"];
                            $prob_name = $row["Prob_name"];
                            $prob_code = $row["Prob_code"];
                            echo '<tr><td>'.$prob_id.'</td><td>'.$prob_name.'</td><td>'.$prob_code.'</td></tr>';
                        }
                    ?>
                </table>
            </div>
            <div class="col">
                <h2>DISEASES</h2>
                <hr>
                <table>
                    <tr>
                        <th>Dis_ID</th>
                        <th>Dis_Name</th>
                        <th>Dis_code</th>
                    </tr>
                    <?php 
                        $getDiseases = $conn->prepare("SELECT * FROM Diseases ORDER BY Dis_id");
                        $getDiseases->execute();
                        $disResult = $getDiseases->get_result();
                        if($disResult->num_rows===0) exit('No rows');
                        while($row = $disResult->fetch_assoc()){
                            $dis_id = $row["Dis_id"];
                            $dis_name = $row["Dis_name"];
                            $dis_code = $row["Dis_code"];
                            echo '<tr><td>'.$dis_id.'</td><td>'.$dis_name.'</td><td>'.$dis_code.'</td></tr>';
                        }
                    ?>
                </table>
            </div>
            <div class="col">
                <h2>SYMPTOMS</h2>
                <hr>
                <table>
                    <tr>
                        <th>Sym_id</th>
                        <th>Sym_name</th>
                        <th>Sym_code</th>
                    </tr>
                    <?php 
                        $getSymptoms = $conn->prepare("SELECT * FROM Symptoms ORDER BY Sym_id");
                        $getSymptoms->execute();
                        $symResult = $getSymptoms->get_result();
                        if($symResult->num_rows===0) exit('No rows');
                        while($row = $symResult->fetch_assoc()){
                            $sym_id = $row["Sym_id"];
                            $sym_name = $row["Sym_name"];
                            $sym_code = $row["Sym_code"];
                            echo '<tr><td>'.$sym_id.'</td><td>'.$sym_name.'</td><td>'.$sym_code.'</td></tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <?php include("footer.php");?>
</body>
</html>