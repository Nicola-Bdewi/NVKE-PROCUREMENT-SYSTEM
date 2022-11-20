<!-- Page Name: demand-inc.php -->
<!-- Description: Once the user clickes "Demand" in the demander.php page, this script will run. 
Once the user clickes "Reject Demand" in the adm-home.php page, this script will run. -->

<?php

if(isset($_POST["submit"])) {
    include_once "../Classes/dbh-classes.php";
    include_once "../Classes/demand-classes.php";
    include_once "../Classes/demand-control-classes.php";

    if($_POST["submit"] == "create-demand") {
        $itemId = $_POST["item-id"];
        $username = $_POST["username"];
    
        $demand = new DemandController($itemId, $username);
    
        //This object will call the createDemand function which will initiate the demand creation process.
        $demand->createDemand();
    
        header("location: ../demander.php?msg=itemdemanded");
    }
    else if($_POST["submit"] == "reject-demand") {
        $demandId = $_POST["demand-id"];

        DemandController::rejectDemand($demandId);

        header("location: ../adm-home.php?msg=demandrejected");
    }
}

?>