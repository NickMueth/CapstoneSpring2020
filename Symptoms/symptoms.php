<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptoms</title>
    <?php include("../Master/header.php"); ?>
    <?php include("../Master/connection.php"); ?>
    <script src="../Master/js/formAttributes.js"></script>
    
    <link rel="stylesheet" href="css/symptoms.scss">
    <style>
        /* SYMPTOMS COLLAPSIBLE */
        .collapsible_container{
            margin:.5rem;

        }
        .collapsible{
            margin-top:.5rem;
            margin-left:1rem;
            margin-right:1rem;
            background-color:#eee;
            color: white;
            cursor:pointer;
            padding:5px;
            width:20vw;
            border:none;
            text-align:center;
            outline:none;
            font-size:2rem;
            
        }
        .active, .collapsible:hover{
            background-color:white;
        }

        .content{
            display:flex;
            justify-content:flex-start;
            flex-wrap:wrap;
            /*border: 1px solid #f1f1f1; 
            border-radius:0 0 15px 15px;*/
            padding:0 18px;
            overflow:hidden;
            width:0;
            margin-left:1rem;
            margin-right:1rem;
            max-height:0;
            transition: all 0.2s ease;
            
        }

        /* END SYMPTOMS COLLAPSIBLE */

        .symptom_input_container{
        }

        .col{
            display:flex;
            flex-wrap: wrap;
        }
        /* SYMPTOMS */
        .symptom{
            color:black;
            font-family: var(--font-secondary);
            padding-left:35px;
            margin-bottom: 5px;
            margin-top: 5px;
            cursor:pointer;
            font-size:1.25rem;
            user-select:none;
        }

        .symptom input{
            opacity:0;
            cursor:pointer;
            height:0;
            width:0;
        }

        .checkmark{
            position:absolute;
            top:0;
            left:0;
            height:1.25rem;
            width:1.25rem;
            background-color: #eee;
        }

        .symptom:hover input ~ .checkmark{
            background-color: #ccc;
        }

        .symptom input:checked ~ .checkmark{
            background-color: var(--secondary);
        }

        .checkmark:after{
            content:"";
            position:absolute;
            display:none;
        }

        .symptom input:checked ~ .checkmark:after{
            display:block;
        }

        .symptom .checkmark:after{
            left:9px;
            top:4px;
            width:7px;
            height:13px;
            border:solid white;
            border-width:0 3px 3px 0;
            transform:rotate(45deg);
        }
        /* END SYMPTOMS */

        .submit_row{
            display:flex;
            justify-content:center;

        }
        .submit_btn{
            color:white;
            font-size:1.5rem;
            width:20rem;
            height:5rem;
            border:0;
            border-radius:25px;
            transition: all 0.3s ease-in;
        }
        .submit_btn:hover{
            text-decoration:underline;
            opacity:0.9;
        }
    </style>
</head>
<body>
    <div class="page" style="
            color:black;
            font-family: var(--font-secondary);
            ">
    <h1>Symptoms page</h1>
    
    <h3>Fill out the following information and let our virtual assistant do the rest!</h3>

    <div class="container">
        <form id="symptomForm" action="results.php" method="POST">
            
            <div class="row breed_dropdown_container">
                <!--Breed dropdown-->
                    <label for="breedDropdownList" class="head">Select your breed:</label>
                    <select id="breedDropdownList" name="breed_code" class="dropdown-content" placeholder="Dog Breed">
                        <option selected="selected"></option>
                        <?php
                            #SQL
                            $sql_query = "SELECT * FROM breeds ORDER BY Bre_id";
                            $result = $conn->query($sql_query);

                            $i = 0;
                            if($result->num_rows>0){
                                
                                while($row = $result->fetch_assoc()){
                                    echo '<option value=' . $row["Bre_code"]. '>' . $row["Bre_name"]. '</option>';
                                    
                                }
                            } else {
                                echo "ERROR";
                            }

                        ?>
                    </select>
            </div>
            <div class="row num_input_container">
                <!--Age-->
                    <div id="age" class="row">
                        <label for="ageIncrementor" class="head">Dog Age: </label>
                        <div name="ageIncrementor">
                            <button id="ageDec" class="step_left multi-grad" type='button'><i class="fas fa-minus"></i></button>
                            <input name="age" type="text" id="age_textbox" class="num_input" value="0">
                            <button id="ageInc" class="step_right multi-grad" type='button'><i class="fas fa-plus"></i></button>
                        </div>
                    </div>
                <!--Weight-->
                    <div id="weight" class="row">
                        <label for="weightTextBox" class="head">Dog Weight: </label>
                        <div name="weightTextBox">
                            <input name="weight" type="text" class="num_input" placeholder="0"><span style="margin-left:10px;vertical-align:middle;font-size:1.5rem;">lbs</span>
                        </div>
                    </div>
            </div>
            <hr>
            <h1>Select the symptoms your dog is experiencing</h1>
            <h3>Separated by symptom area</h3>

            <div class="symptom_input_container row">
                <div><div>
                <?php
                    
                    $getSymptoms = $conn->prepare("SELECT * FROM Symptoms ORDER BY Sym_area, Sym_name");
                    $getSymptoms->execute();
                    $result = $getSymptoms->get_result();
                    if($result->num_rows===0) exit('No rows');
                    #iterator
                    $i=0;
                    $items = $result->num_rows;
                    $temp_sym=null;
                    while($row = $result->fetch_assoc()){
                        $sym_id = $row["Sym_id"];
                        $sym_name = $row["Sym_name"];
                        $sym_area = $row["Sym_area"];
                        if($temp_sym == $sym_area){
                            echo '<label class="col symptom">' . $sym_name . '<input type="checkbox" name="symptoms[]" value="' . $sym_name . '"><span class="checkmark"></span></label>';

                        }
                        else{
                            echo '</div></div>';
                            echo '<div><div class="collapsible multi-grad">' . $sym_area . '</div><div class="content">';

                            echo '<label class="col symptom">' . $sym_name . '<input type="checkbox" name="symptoms[]" value="' . $sym_name . '"><span class="checkmark"></span></label>';
                            $temp_sym = $sym_area;

                        }
                    }
                    echo '</div></div>';
                ?>
            </div>

            <hr>
            <div class="submit_row">
            <button type="submit" class="submit_btn multi-grad" action="results.php">Submit</button>
            </div>
        </form>
    </div>
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
                    content.style.width=null;
                } else{
                    content.style.maxHeight = content.scrollHeight+"px";
                    content.style.width = "auto";
                }
            });
        }
    </script>

    <?php include("../Master/footer.php"); ?>
</body>
</html>