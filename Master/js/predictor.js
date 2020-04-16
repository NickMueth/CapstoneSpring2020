var conn = mysql.createConnection({
    host:"localhost",
    user: "root",
    password: "pineapple"

});

conn.connect(function(err){
    if(err) throw err;
    console.log("Connected");
});

function weightCheck(){
    //check weight dangers for dogs like dachshunds
}

function BlastomycosisCheck(){
    //check if dog is suspectible to blastomycosis due to larger weight
}

function wormCheck(){
    //check if dog is more suspectible to worms due to younger age
}

function PythiosisCheck(){
    //check if dog is more suspectible to pythiocosis due to younger age
}

function VonWillebrandSeverityCheck(){
    //check if based on breed dog has a more severe case of vonwillebrand
}