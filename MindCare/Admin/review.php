<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/admin.css">
    <title>Patients</title>
    <style>
        .popup {
            animation: transitionIn-Y-bottom 0.5s;
        }
        .sub-table {
            animation: transitionIn-Y-bottom 0.5s;
        }
    </style>
</head>
<body>
<?php
session_start();

if (isset($_SESSION["user"])) {
    if ($_SESSION["user"] == "" or $_SESSION['usertype'] != 'a') {
        header("location: login.php");
    }
} else {
    header("location: login.php");
}

// Import database
include("connection.php");
?>
<div class="container">
    <div class="menu">
    <table class="menu-container" border="0">
            <tr>
                <td style="padding:10px" colspan="2">
                    <table border="0" class="profile-container">
                        <tr>
                            <td width="30%" style="padding-left:20px">
                                <img src="img/user.png" alt="" width="100%" style="border-radius:50%">
                            </td>
                            <td style="padding:0px;margin:0px;">
                                <p class="profile-title">Admin</p>
                                <p class="profile-subtitle">Admin@mind.com</p>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <a href="logout.php"><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="menu-row">
                <td class="menu-btn menu-icon-dashbord">
                    <a href="index.php" class="non-style-link-menu"><div><p class="menu-text">Dashboard</p></div></a>
                </td>
            </tr>
            <tr class "menu-row">
                <td class="menu-btn menu-icon-doctor">
                    <a href="staff.php" class="non-style-link-menu"><div><p class="menu-text">Staff Management</p></div></a>
                </td>
            </tr>
            <tr class="menu-row">
                <td class="menu-btn menu-icon-schedule">
                    <a href="resources.php" class="non-style-link-menu"><div><p class="menu-text">Resource Management</p></div></a>
                </td>
            </tr>
            <tr class="menu-row">
                <td class="menu-btn menu-icon-appoinment menu-active menu-icon-appointment-active">
                    <a href="review.php" class="non-style-link-menu "><div><p class="menu-text">Review Management</p></div></a>
                </td>
            </tr>
            <tr class="menu-row">
                <td class="menu-btn menu-icon-patient">
                    <a href="patient.php" class="non-style-link-menu "><div><p class="menu-text">Patients</p></div></a>
                </td>
            </tr>
            
        </table>
    </div>
    <?php
    
    $sqlmain= "select * from review order by Rid desc";
?>
    <div class="dash-body">
        <table border="0" width="100%" style="border-spacing: 0; margin: 0; padding: 0; margin-top: 25px;">
         <center> 
                    <thead>
                        <tr>
                            <th class="table-headin">ID</th>
                            <th class="table-headin">Name</th>
                            <th class="table-headin">Review</th>
                            <th class="table-headin">Comments</th>
                            <th class="table-headin">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                                $result = $database->query($sqlmain);
                                

                                if ($result->num_rows == 0) {
                                    echo '<tr>
                                    <td colspan="4">
                                    <br><br><br><br>
                                    <center>
                                    <img src="img/notfound.svg" width="25%">
                                    
                                    <br>
                                    <p class="heading-main12" style="margin-left: 45px; font-size: 20px; color: rgb(49, 49, 49)">We couldn\'t find anything related to your keywords !</p>
                                    <a class="non-style-link" href="review.php"><button class="login-btn btn-primary-soft btn" style="display: flex; justify-content: center; align-items: center; margin-left: 20px;">&nbsp; Show all Review &nbsp;</font></button></a>
                                    </center>
                                    <br><br><br><br>
                                    </td>
                                    </tr>';
                                } else {
                                    for ($x = 0; $x < $result->num_rows; $x++) {
                                        $row = $result->fetch_assoc();
                                        $Rid = $row["Rid"];
                                        $name = $row["Rname"];
                                        $rev = $row["Review"];
                                        $des = $row["description"];
                                        echo '<tr>
                                        <td> &nbsp;' .
                                            substr($Rid, 0, 30)
                                            . '</td>
                                        <td>
                                        ' . substr($name, 0, 20) . '
                                        </td>
                                        <td>
                                        ' . substr($rev, 0, 20) . '
                                        </td>
                                        <td>
                                        ' . substr($des, 0, 20) . '
                                        </td>

                                        <td>
                                       <a href="?action=drop&id=' . $Rid . '&name=' . $name . '" class="non-style-link"><button class="btn-primary-soft btn button-icon btn-delete" style="padding-left: 40px; padding-top: 12px; padding-bottom: 12px; margin-top: 10px;"><font class="tn-in-text">Remove</font></button></a>
                                        </div>
                                        </td>
                                    </tr>';
                                    }
                                }
                                ?>
                   </tbody>
            </center>      
        </table>
    </div>
    <?php
if ($_GET) {

    $id = $_GET["id"];
    $action = $_GET["action"];
    if ($action == 'drop') {
        $nameget = $_GET["name"];
        echo '
            <div id="popup1" class="overlay">
                    <div class="popup">
                    <center>
                        <h2>Are you sure?</h2>
                        <a class="close" href="review.php">&times;</a>
                        <div class="content">
                            You want to delete this record<br>(' . substr($nameget, 0, 40) . ').
                        </div>
                        <div style="display: flex; justify-content: center;">
                        <a href="delreview.php?id=' . $Rid . '" class="non-style-link"><button class="btn-primary btn" style="display: flex; justify-content: center; align-items: center; margin: 10px; padding: 10px;"><font class="tn-in-text">&nbsp;Yes&nbsp;</font></button></a>&nbsp;&nbsp;&nbsp;
                        <a href="review.php" class="non-style-link"><button class="btn-primary btn" style="display: flex; justify-content: center; align-items: center; margin: 10px; padding: 10px;"><font class="tn-in-text">&nbsp;&nbsp;No&nbsp;&nbsp;</font></button></a>
                        </div>
                    </center>
            </div>
            </div>
            ';} }
            ?>
</div> 
</body>
</html>