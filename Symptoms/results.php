<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("../Master/header.php");
        include("../Master/connection.php");
    ?>
    <style>
        body{
            
        }
        .page-container{
            color:black;
            font-size:.75rem;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 5vw;
            margin-right:5vw;
        }
        h1{
            text-align:center;
        }
        h3{
            font-size:1.25rem;
        }
        h5{
            font-size:1rem;
        }
        .results{
        }
        th{
            font-size:1.5rem;
        }
        .dis>td>a{
            text-decoration:none;
        }
        .results>div>ul>li{
            font-size:1rem;
        }

        .summary{
            width:75%;
            margin-left:auto;
            margin-right:auto;
            padding:15px;
            justify-content:center;
            color:white;
            border-radius:25px;
        }
        .weight{
            display:flex;
            text-align:center;
            justify-content:center;
        }
        .summary>h5>a{
            font-style:oblique;
            color:white;
            text-decoration:underline;
        }
        .summary>h5>a:hover{
            font-style:oblique;
            color:#aaa;
            text-decoration:underline;
        }

        
    </style>

        
</head>

<body>

    <div class="page-container">
        <?php
            //INCLUDE STATEMENTS
            if($_POST['symptoms'] == null){
                $symptoms==null;
            } else {
                $symptoms = $_POST['symptoms'];
            }

            $breed_code = $_POST['breed_code'];
            $age = $_POST['age'];
            $weight=$_POST['weight'];

            
            $getBreedInfo = $conn->prepare("SELECT * FROM Breeds WHERE Bre_code = ?");
            $getBreedInfo->bind_param("s", $breed_code);
            $getBreedInfo->execute();
            $breedResult = $getBreedInfo->get_result();
            if($breedResult->num_rows===0) exit('No rows');
            while($row = $breedResult->fetch_assoc()){
                $bre_id = $row["Bre_id"];
                $bre_name = $row["Bre_name"];
                $bre_code = $row["Bre_code"];
                $bre_age = $row["age"];
                $bre_weight = $row["weight"];

                $max_wgt = $bre_weight+($bre_weight*0.2);
                $min_wgt = $bre_weight-($bre_weight*0.2);
            }

            $getConnect_DS = $conn->prepare("SELECT Dis_name, Sym_name FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id JOIN symptoms on symptoms.sym_id = connect_ds.sym_id");
            $getConnect_DS->execute();
            $connect_ds = $getConnect_DS->get_result();
            if($connect_ds->num_rows === 0) exit('No rows');
        
            while($row = $connect_ds->fetch_assoc()){
                $dis_name = $row["Dis_name"];
                $sym_name = $row["Sym_name"];
            }

            $getConnect_BD = $conn->prepare("SELECT diseases.dis_name, connect_bd.dis_id FROM connect_bd LEFT JOIN diseases on diseases.dis_id = connect_bd.dis_id WHERE Bre_id = ?");
            $getConnect_BD->bind_param("i", $bre_id);
            $getConnect_BD->execute();
            $connect_bd = $getConnect_BD->get_result();

            

            $sym_id_arr = array();

            $in = str_repeat('?,', count($symptoms)-1).'?';
            $sql = "SELECT Sym_id FROM symptoms WHERE Sym_name IN ($in)";
            $stmt = $conn->prepare($sql);
            $types = str_repeat('s', count($symptoms));
            $stmt->bind_param($types, ...$symptoms);
            $stmt->execute();
            $result = $stmt->get_result();
            while($row = $result->fetch_assoc()){
                array_push($sym_id_arr, $row["Sym_id"]);
            }

            $sym_data = array();

            $inSym = str_repeat('?,', count($sym_id_arr)-1).'?';
            $symSql = "SELECT Dis_name, Dis_common, COUNT(*) FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id JOIN symptoms on symptoms.sym_id = connect_ds.sym_id WHERE connect_ds.sym_id IN ($inSym) GROUP BY Dis_name ORDER BY COUNT(*) DESC";
            $symStmt = $conn->prepare($symSql);
            $types = str_repeat('s', count($sym_id_arr));
            $symStmt->bind_param($types, ...$sym_id_arr);
            $symStmt->execute();
            $symResult = $symStmt->get_result();

            while($row = $symResult->fetch_assoc()){
                if($row["Dis_common"]==null){
                    $sym_data += [$row["Dis_name"] => $row["COUNT(*)"]];

                } else{
                    $sym_data+=[$row["Dis_common"] => $row["COUNT(*)"]];
                }
                #echo $row["Dis_name"].'<br>';
            }

            

            $diseaseSymptomCount = array();
            $symptomCount = $conn->prepare("SELECT Dis_name, Dis_common, COUNT(*)
            FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id
            GROUP BY dis_name");
            #$types = str_repeat('s', count($sym_id_arr));
            #$symptomCount->bind_param($types, ...$sym_id_arr);
            $symptomCount->execute();
            $sympCount = $symptomCount->get_result();
            if($sympCount->num_rows === 0) exit('No rows');
        
            while($row = $sympCount->fetch_assoc()){
                if($row["Dis_common"] == null){
                    $dis_name = $row["Dis_name"];
                    $sym_count = $row["COUNT(*)"];
                    $diseaseSymptomCount += [$dis_name => $sym_count];
                }else{
                    $dis_name = $row["Dis_common"];
                    $sym_count = $row["COUNT(*)"];
                    $diseaseSymptomCount += [$dis_name => $sym_count];
                }
                
                
            }

            //FUNCTIONS
            function weightCheck(){
                //check weight dangers for dogs like dachshunds
                global $weight, $max_wgt, $min_wgt, $bre_name;
                if($weight>$max_wgt){
                    echo '<h3 class="bg-danger" style="color:white; padding:10px; border-radius:10px;">Your dog weighs '.$weight.' lbs! They may be suffering from obesity!<small> - A healthy weight for your dog is between '.$min_wgt. ' and '.$max_wgt.' lbs';
                    if($bre_name=="Dachshund"){
                        echo '<br><strong>YOUR DOG\'S BREED ('.$bre_name.') CAN SUFFER SERIOUS DAMAGE FROM OBESITY! Go visit the vet ASAP!</strong>';
                    }
                    echo '</h3>';
                }  
                else if($weight>=$min_wgt && $weight<=$max_wgt){
                    echo '<h3 class="bg-success" style="color:white; padding:10px; border-radius:10px;">Your dog weighs '.$weight.' lbs! They are a healthy weight, keep it up!</h2>';
                }
                else{
                    echo '<h3 class="bg-warning" style="color:white; padding:10px; border-radius:10px;">Your dog weighs '.$weight.' lbs! They may be underweight!<small> - A healthy weight for your dog is between '.$min_wgt. ' and '.$max_wgt.' lbs</h3>';
            
                }

                
            }

            function BlastomycosisCheck(){
                //check if dog is suspectible to blastomycosis due to larger weight
                global $bre_weight;
                if($bre_weight>55){
                    return true;
                }
            }

            function wormCheck(){
                //check if dog is more suspectible to worms due to younger age
                global $age;
                if($age<5){
                    return true;
                }
            }

            function PythiosisCheck(){
                //check if dog is more suspectible to pythiocosis due to younger age
                global $age;
                if($age<5){
                    return true;
                }
            }

            function VonWillebrandSeverityCheck(){
                //check if based on breed, dog has a more severe case of vonwillebrand
                global $bre_id;
                //Shetland Sheepdog (27)
                if($bre_id==27){
                    return 1;
                } 
                //German Shorthaired Pointers (15)
                elseif($bre_id == 15){
                    return 2;
                }
                //Bernese (3), Dachshunds (9), Dobermans (10), German Shepherds (14), Golden Retrievers (16), Corgis (22), Poodles (24)
                elseif ($bre_id == 9 || $bre_id == 3 || $bre_id == 10 || $bre_id == 14 || $bre_id == 22 || $bre_id == 24 || $bre_id == 16) {
                    return 3;
                }
                else{
                    return 0;
                }
            }

            function breedSusceptibility(){
                $diseases = array(null);
                global $connect_bd;
                while($row = $connect_bd->fetch_assoc()){
                    $dis_id=$row["dis_id"];
                    $dis_name = $row["dis_name"];
                    $diseases[$dis_id] = $dis_name;
                }
                return $diseases;
            }

            function symptomCheck(){
                global $symptoms, $sym_data, $diseaseSymptomCount;
                $symLevel = 0;
                $i = 0;
                //IF SYMPTOMS EXIST
                /*if($symptoms != null){
                    if(wormCheck()==true){
                        echo '<p>wormCheck returned true</p>';
                    }
                    if(PythiosisCheck() == true){
                        echo '<p>PythiosisCheck returned true</p>';
                    }
                    if(BlastomycosisCheck() == true){
                        echo '<p>BlastomycosisCheck returned true</p>';
                    }
                    //Check for the severity level of Von Willebrand's Disease
                    switch(VonWillebrandSeverityCheck()){
                        case 1:
                            echo '<p>SEVERE LEVEL 1</p>';
                        case 2:
                            echo '<p>SEVERE LEVEL 2</p>';
                        case 3:
                            echo '<p>SEVERE LEVEL 3</p>';

                    }

                }
                //ELSE IF SYMPTOMS IS NULL 
                else {
                    echo 'Your dog isn\'t experiencing any symptoms.';
                    if(wormCheck()==true){
                        echo '<p>wormCheck returned true</p>';
                    }
                    if(PythiosisCheck() == true){
                        echo '<p>PythiosisCheck returned true</p>';
                    }
                    if(BlastomycosisCheck() == true){
                        echo '<p>BlastomycosisCheck returned true</p>';
                    }
                    //Check for the severity level of Von Willebrand's Disease
                    switch(VonWillebrandSeverityCheck()){
                        case 1:
                            echo '<p>SEVERE LEVEL 1</p>';
                        case 2:
                            echo '<p>SEVERE LEVEL 2</p>';
                        case 3:
                            echo '<p>SEVERE LEVEL 3</p>';

                    }
                }*/
                echo '<table><tr><th>Disease</th><th>Chances</th></tr>';
                foreach($sym_data as $ds=>$ct){
                    #echo "$ds = $ct<br>";
                    foreach($diseaseSymptomCount as $dis=>$sym_ct){
                        #echo "$dis = $sym_ct<br>";
                        if($dis == $ds){
                            $pct = ($ct/$sym_ct)*75;
                            displayDiseaseChance($pct, $ds, $ct, $sym_ct);
                        }
                    }
                }
                echo '</table>';
                
                #echo strval($sym_data[1][0]);
            }

            function displayDiseaseChance($pct, $disease, $count, $sym_count){
                if(wormCheck()==true){
                    if($disease == 'Heartworm' || $disease == 'Hookworm' || $disease == 'Ringworm' || $disease == 'Tapeworm' || $disease == 'Roundworm' || $disease == 'Pork Roundworm' || $disease == 'Whipworm'){
                        if($pct<90) $pct+=10;
                    }
                    //echo '<p>wormCheck returned true</p>';
                }
                if(PythiosisCheck() == true){
                    if($disease == 'Pythiosis'){
                        if($pct<90) $pct+=10;
                    }
                   // echo '<p>PythiosisCheck returned true</p>';
                }
                if(BlastomycosisCheck() == true){
                    if($disease == 'Blastomycosis'){
                        if($pct<90) $pct+=10;
                    }
                   // echo '<p>BlastomycosisCheck returned true</p>';
                }
                //Check for the severity level of Von Willebrand's Disease
                switch(VonWillebrandSeverityCheck()){
                    case 1:
                        if($disease == 'Von Willebrand\'s Disease'){
                            $pct+=30;
                        }
                        //echo '<p>SEVERE LEVEL 1</p>';
                    case 2:
                        if($disease == 'Von Willebrand\'s Disease'){
                            $pct += 20;
                        }
                        //echo '<p>SEVERE LEVEL 2</p>';
                    case 3:
                        if($disease == 'Von Willebrand\'s Disease'){
                            $pct+=10;
                        }
                        //echo '<p>SEVERE LEVEL 3</p>';

                }
                if($pct>75){
                    echo '<tr class="bg-danger dis" style="font-size:1.5rem; border-radius:15px;"><td><a style="color:white;" href="diseases.php#'.$disease.'">'.$disease.'</a></td><td>'.round($pct).'% chance ('.$count.'/'.$sym_count.' symptoms)</td></tr>';

                } elseif ($pct>40) {
                    echo '<tr class="bg-warning dis" style="font-size:1.25rem; border-radius:15px;"><td><a style="color:white;" href="diseases.php#'.$disease.'">'.$disease.'</a></td><td>'.round($pct).'% chance ('.$count.'/'.$sym_count.' symptoms)</td></tr>';

                } else{
                    echo '<tr class="dis" style="font-size:1rem; border-radius:15px;"><td><a href="diseases.php#'.$disease.'">'.$disease.'</a></td><td>'.round($pct).'% chance ('.$count.'/'.$sym_count.' symptoms)</td></tr>';

                }
            }
            //getBreeds();
            //getConnect_DS();
        ?>

        <h1>RESULTS</h1>
        <div class="summary multi-grad">
            <h2 style="text-align:center">Summary:</h2><br>
            <div  class="bg-info" style="color:white; padding:10px; border-radius:10px; width:100%;margin-bottom:2rem;">
                <?php
                echo '<h3>Breed: '.$bre_name.'</h3><h3>Age: '.$age.' years old</h3>';?>
            </div>
            <div class="weight"><?php weightCheck(); ?></div>
            <?php 
                if(wormCheck()==true){
                    echo '<h5 style="padding:10px;">Your dog\'s age makes them more susceptible to worms.</h5>';
                }
                if(PythiosisCheck() == true){
                    echo '<h5 style="padding:10px;">Your dog\'s age makes them more susceptible to <a href="diseases.php#Pythiosis">Pythiosis</a>.</h5>';
                }
                if(BlastomycosisCheck() == true){
                    echo '<h5 style="padding:10px;">Your dog\'s average weight makes them more susceptible to <a href="diseases.php#Blastomycosis">Blastomycosis</a>.</h5>';
                }
                //Check for the severity level of Von Willebrand's Disease
                switch(VonWillebrandSeverityCheck()){
                    case 1:
                        echo '<h5 style="padding:10px;">Your dog\'s breed makes them more susceptible to <a href="diseases#Von%20Willebrand\'s%20Disease">Von Willebrand\'s Disease</a>.</h5>';
                    case 2:
                        echo '<h5 style="padding:10px;">Your dog\'s breed makes them more susceptible to <a href="diseases#Von%20Willebrand\'s%20Disease">Von Willebrand\'s Disease</a>.</h5>';
                    case 3:
                        echo '<h5 style="padding:10px;">Your dog\'s breed makes them more susceptible to <a href="diseases#Von%20Willebrand\'s%20Disease">Von Willebrand\'s Disease</a>.</h5>';

                }
            ?>
        </div>
        <br><hr><br>
        <div class="results row">

        <div class="col-6">
        <h3>These are the symptoms your dog is experiencing:</h3>
        <ul>
            <?php 
                foreach($symptoms as $selected){
                    echo '<li>'.$selected.'</li>';
            }
        ?>
        </ul>
        </div>
        <div class="col-6">
        <h3>These are the diseases we think your dog might have:</h3>
            <?php
                symptomCheck();
            ?>
        </div>
        </div>
        <br>
        <hr>
    </div>
    <?php include("../Master/footer.php");?>
</body>
</html>