<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseases</title>
    <?php include("../Master/header.php"); ?>
    <?php include("../Master/connection.php"); ?>

    <style>
        .diseases{
            display:inline;
            color:black;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left:1rem;
            margin-right:1rem;
        }
        .disease{
            /*border:1px solid #bbb;
            border-radius:10px;
            width:90%;
            margin:1rem;
            padding:5px;*/

        }

        #icon{
            color:navy;
            font-size:2rem;
        }
        .dis{
            color:navy;
            padding:2rem;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

        }

        .collapsible{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            margin-top:.5rem;
            margin-left:1rem;
            margin-right:1rem;
            background-color:#eee;
            color: navy;
            cursor:pointer;
            padding:.5rem 1.5rem;
            width:90%;
            border:none;
            outline:none;
            font-size:1.5rem;
            
        }
        .active, .collapsible:hover{
            background-color:white;
        }

        .content{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

            margin-left:1rem;
            margin-right:1rem;
            border: 1px solid #f1f1f1; 
            border-radius:0 0 15px 15px;
            padding:0 18px;
            color:navy;
            overflow:hidden;
            width:90%;
            max-height:0;
            transition: all 0.2s ease;
            
        }
    </style>
</head>
<body>
    <div class="diseases">
        <?php
            //GET DISEASES AND SYMPTOMS FROM CONNECT_DS
            $getConnect_DS = $conn->prepare("SELECT Dis_name, Sym_name FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id JOIN symptoms on symptoms.sym_id = connect_ds.sym_id ORDER BY Dis_name");
            $getConnect_DS->execute();
            $connect_ds = $getConnect_DS->get_result();
            if($connect_ds->num_rows === 0) exit('No rows');
            $dis_name = null;
            while($row = $connect_ds->fetch_assoc()){
                $sym_name = $row["Sym_name"];
                
                if($dis_name != $row["Dis_name"]){
                    $dis_name = $row["Dis_name"];
                    echo '  </div></div>
                        <div class="collapsible disease>
                            <h5 class="dis">'.$dis_name.'</h5></div>
                            <div class="content"><p>'.ucwords($sym_name).'</p>
                        ';
                } else{
                    echo '  <p>'.ucwords($sym_name).'</p>';
                }
            }

            /*
            $getDiseases = $conn->prepare("SELECT * FROM Diseases ORDER BY Dis_name");
            $getDiseases->execute();
            $disresult = $getDiseases->get_result();
            if($disresult->num_rows===0) exit('No rows');
        
            while($row = $disresult->fetch_assoc()){
                $dis_id = $row["Dis_id"];
                $dis_name = $row["Dis_name"];
                $dis_common = $row["Dis_common"];
                if($dis_common != null){
                    echo '<div class="disease collapsible">',
                    '<a href="#'.$dis_name.'" class="dis">'.$dis_name.'<small><i>('.$dis_common.')</i></small></h3></div>';
                } else{
                    echo '<div class="disease collapsible">',
                    '<a href="#'.$dis_name.'" class="dis">'.$dis_name.'</a></div>';

                }
            }*/

            
        ?>
        <!--<table>
            <tr>
                <th>Dis_name</th>
                <th>Sym_name</th>
            </tr>
        <?php
            $showRel = $conn->prepare("SELECT Dis_name, Sym_name FROM connect_ds JOIN diseases on diseases.dis_id = connect_ds.dis_id JOIN symptoms on symptoms.sym_id = connect_ds.sym_id");
            $showRel->execute();
            $relresult = $showRel->get_result();
            if($relresult->num_rows === 0) exit('No rows');

            while($row = $relresult->fetch_assoc()){
                $dis_name = $row["Dis_name"];
                $sym_name = $row["Sym_name"];
                echo '<tr><td>'.$dis_name.'</td><td>'.$sym_name.'</td></tr>';

            }
        ?>
        </table>

        <?php
            $getDiseases = $conn->prepare("SELECT * FROM Diseases ORDER BY Dis_name");
            $getDiseases->execute();
            $disresult = $getDiseases->get_result();
            if($disresult->num_rows===0) exit('No rows');
        
            while($row = $disresult->fetch_assoc()){
                $dis_id = $row["Dis_id"];
                $dis_name = $row["Dis_name"];
                $dis_common = $row["Dis_common"];

                echo '<div class="disease">',
                        '<h3>'.$dis_name.' <small><i>('.$dis_common.')</i></small></h3></div>';
            }
        ?>-->
    </div>
    <script>
        var coll=document.getElementsByClassName("collapsible");
        var i;
        for(i=0;i<coll.length;i++){
            coll[i].addEventListener("click", function(){
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if(content.style.maxHeight){
                    content.style.maxHeight = null;
                } else{
                    content.style.maxHeight = content.scrollHeight+"px";
                }
            });
        }
    </script>
    <?php include("../Master/footer.php"); ?>
</body>
</html>