<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include("connection.php"); ?>
</head>
<body>
    <div class="row">
        <div class="col">
            <table >
                    <tr>
                        <th>Disease</th>
                        <th>SymptomCount</th>
                    </tr>

                <?php
                    $_Connect_DS = $conn->prepare(
                        "SELECT Dis_name, COUNT(*)
                         FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id
                         GROUP BY dis_name
                         ");
                    $_Connect_DS->execute();
                    $conn_ds = $_Connect_DS->get_result();
                    if($conn_ds->num_rows === 0) exit('No rows');
                
                    while($row = $conn_ds->fetch_assoc()){
                        $dis_name = $row["Dis_name"];
                        $sym_count = $row["COUNT(*)"];
                        echo '<tr><td>'.$dis_name.'</td><td>'.$sym_count.'</td></tr>';
                    }
                    

                ?>
                </table>



        </div>
    </div>
    <div class="row" style="column-count:2">
        <div class="col" style="border:1px solid red">
            <table >
                <tr>
                    <th>Disease</th>
                    <th>Breed</th>
                </tr>

            <?php
                $getConnect_BD = $conn->prepare("SELECT Dis_name, Bre_name FROM connect_bd JOIN diseases on diseases.dis_id = connect_bd.dis_id JOIN breeds on breeds.bre_id = connect_bd.bre_id");
                $getConnect_BD->execute();
                $connect_bd = $getConnect_BD->get_result();
                if($connect_bd->num_rows === 0) exit('No rows');
            
                while($row = $connect_bd->fetch_assoc()){
                    $dis_name = $row["Dis_name"];
                    $bre_name = $row["Bre_name"];
                    echo '<tr><td>'.$dis_name.'</td><td>'.$bre_name.'</td></tr>';
                }
                

            ?>
            </table>
        </div>
        <div class="col" style="border:1px solid red">

            <table>
                <tr>
                    <th>Disease</th>
                    <th>Symptom</th>
                </tr>

            <?php
            //GET DISEASES AND SYMPTOMS FROM CONNECT_DS
                $getConnect_DS = $conn->prepare("SELECT Dis_name, Sym_name FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id JOIN symptoms on symptoms.sym_id = connect_ds.sym_id");
                $getConnect_DS->execute();
                $connect_ds = $getConnect_DS->get_result();
                if($connect_ds->num_rows === 0) exit('No rows');
            
                while($row = $connect_ds->fetch_assoc()){
                    $dis_name = $row["Dis_name"];
                    $sym_name = $row["Sym_name"];
                    echo '<tr><td>'.$dis_name.'</td><td>'.$sym_name.'</td></tr>';
                }
                

            ?>
            </table>
        </div>
    </div>
</body>
</html>