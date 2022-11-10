<!-- Page Name: adm-history.php -->
<!-- Description: Here the admin will see the list of previous demands and quotations. Whether they were rejected or approuved -->

<?php
session_start();

//This if statement makes sure that only admin have access to this page
if (!isset($_SESSION["username"])) {
    header("location: index.php?logintocontinue");
} else {
    if (isset($_SESSION["usertype"])) {
        if ($_SESSION["usertype"] != "admin") {
            header("location: Includes/logout-inc.php?submit=submit");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <title> Admin - History </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="adm-sidebar.css" rel="stylesheet">
    <link href="adm-history.css" rel="stylesheet">
</head>

<!-- The function dynamicSidebarMenu('text') adds style to the sidebar menu -->
<body style="background: #151515; height: 100%; color: white; overflow: hidden; display: flex;" onload="dynamicSidebarMenu('History')">

    <!-- Left Sidebar Menu -->
    <div class="Adm-sidebar-box">
        <div class="Adm-sidebar-logo-box">
            <img src="Image/logo.png" alt="NVKE Logo" height="150" width="150" style="text-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
        </div>
        <div class="Adm-sidebar-menu-box">
            <ul style="padding: 0px; margin: 0px; list-style: none;">
                <li class="Adm-sidebar-menu-li">
                    <a class="dynamicSidebarMenu" href="adm-home.php">Home</a>
                </li>
                <li class="Adm-sidebar-menu-li">
                    <a class="dynamicSidebarMenu" href="adm-accounts.php">Accounts</a>
                </li>
                <li class="Adm-sidebar-menu-li">
                    <a class="dynamicSidebarMenu" href="adm-items.php">Items</a>
                </li>
                <li class="Adm-sidebar-menu-li">
                    <a class="dynamicSidebarMenu" href="adm-history.php">Request History</a>
                </li>
            </ul>
        </div>
        <div class="Adm-sidebar-signout-box">
            <form action="Includes/logout-inc.php" method="post">
                <button type="submit" name="submit" class="Adm-sidebar-signout-btn">Sign Out</button>
            </form>
        </div>
    </div>
    <!-- Left Sidebar Menu -->

    <div class="Adm-main-box">

        <!-- Top user info box -->
        <div class="Adm-sidebar-navbox">
            <div class="Adm-sidebar-navbox-userinfo">
                <span><?php echo $_SESSION["username"]; ?></span>
                <span class="Color-blue">&VerticalSeparator;</span>
                <span class="Color-blue">ADMIN</span>
            </div>
        </div>
        <!-- Top user info box -->

        <!-- Main Content -->
        <div class="Adm-content-box">


            <div style="display: flex;">

                <!-- Demand History -->
                <div class="Adm-history-pre-box" style="margin-right: 10px;">
                    <div class="Bottom-border">Previous Demands</div>
                    <div class="Adm-history-list-box">
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Demander: </span>Username</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div class="Tag-green">ACCEPTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Demander: </span>Username</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div class="Tag-red">REJECTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Demander: </span>Username</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div class="Tag-red">REJECTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Demander: </span>Username</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div class="Tag-green">ACCEPTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Demander: </span>Username</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div class="Tag-green">ACCEPTED</div>
                        </div>
                    </div>
                </div>
                <!-- Demand History -->

                <!-- Quotation History -->
                <div class="Adm-history-pre-box" style="margin-left: 10px;">
                    <div class="Bottom-border">Previous Quotations</div>
                    <div class="Adm-history-list-box">
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Quotation ID: </span>3839201800</div>
                            <div><span class="Color-blue">Supplier: </span>Username</div>
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div><span class="Color-blue">Bid Price: </span>6000$</div>
                            <div class="Tag-red">REJECTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Quotation ID: </span>3839201800</div>
                            <div><span class="Color-blue">Supplier: </span>Username</div>
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div><span class="Color-blue">Bid Price: </span>6000$</div>
                            <div class="Tag-green">ACCEPTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Quotation ID: </span>3839201800</div>
                            <div><span class="Color-blue">Supplier: </span>Username</div>
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div><span class="Color-blue">Bid Price: </span>6000$</div>
                            <div class="Tag-red">REJECTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Quotation ID: </span>3839201800</div>
                            <div><span class="Color-blue">Supplier: </span>Username</div>
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div><span class="Color-blue">Bid Price: </span>6000$</div>
                            <div class="Tag-green">ACCEPTED</div>
                        </div>
                        <div class="Adm-history-box">
                            <div><span class="Color-blue">Quotation ID: </span>3839201800</div>
                            <div><span class="Color-blue">Supplier: </span>Username</div>
                            <div><span class="Color-blue">Demand ID: </span>3839201800</div>
                            <div><span class="Color-blue">Item: </span>Shakespears Romeo and Juliet</div>
                            <div><span class="Color-blue">Bid Price: </span>6000$</div>
                            <div class="Tag-green">ACCEPTED</div>
                        </div>
                    </div>
                </div>
                <!-- Quotation History -->

            </div>
        </div>
        <!-- Main Content -->

    </div>

    <!-- The function dynamicSidebarMenu('text') script -->
    <script src="adm-sidebar.js"></script>

</body>

</html>