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
        .popup{
            animation: transitionIn-Y-bottom 0.5s;
        }
        .sub-table{
            animation: transitionIn-Y-bottom 0.5s;
        }
</style>
</head>
<body>
    <?php



    session_start();

    if(isset($_SESSION["user"])){
        if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
            header("location: login.php");
        }

    }else{
        header("location: login.php");
    }
    
    

    //import database
    include("connection.php");

    
    ?>
    <div class="container">
        <div class="menu">
            <table class="menu-container" border="0">
                <tr>
                    <td style="padding:10px" colspan="2">
                        <table border="0" class="profile-container">
                            <tr>
                                <td width="30%" style="padding-left:20px" >
                                    <img src="img/user.png" alt="" width="100%" style="border-radius:50%">
                                </td>
                                <td style="padding:0px;margin:0px;">
                                    <p class="profile-title">Admin</p>
                                    <p class="profile-subtitle">Admin@mind.com</p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                <a href="logout.php" ><input type="button" value="Log out" class="logout-btn btn-primary-soft btn"></a>
                                </td>
                            </tr>
                    </table>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-dashbord" >
                        <a href="index.php" class="non-style-link-menu"><div><p class="menu-text">Dashboard</p></a></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-doctor ">
                        <a href="staff.php" class="non-style-link-menu "><div><p class="menu-text">Staff Management</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-schedule menu-active menu-icon-schedule-active">
                        <a href="schedule.php" class="non-style-link-menu non-style-link-menu-active"><div><p class="menu-text">Resource Management</p></div></a>
                    </td>
                </tr>
                <tr class="menu-row">
                    <td class="menu-btn menu-icon-appoinment">
                        <a href="review.php" class="non-style-link-menu"><div><p class="menu-text">Review Management</p></a></div>
                    </td>
                </tr>
                <tr class="menu-row" >
                    <td class="menu-btn menu-icon-patient ">
                        <a href="patient.php" class="non-style-link-menu "><div><p class="menu-text">Patients</p></a></div>
                    </td>
                </tr>

            </table>
        </div>
        <?php
        if ($_POST) {
        // Handle the form submission to add a new blog
        $title = $_POST['title'];
        $content = $_POST['content'];
        // Handle image upload and save the image path to the database
        $image_path = "img"; 
        $image = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        move_uploaded_file($image_temp, $image_path . $image);
        // Insert the blog into the database
        $stmt = $database->prepare("INSERT INTO blogs (title, content, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $title, $content, $image);
        if ($stmt->execute()) {
            echo "Blog added successfully!";
        } else {
            echo "Error adding blog.";
        }
        $stmt->close();
    }
    ?>
    <div class="container">

        <form action="resources.php" method="post" enctype="multipart/form-data">
            <label for="title">Blog Title:</label>
            <input type="text" name="title" required><br>
            <label for="content">Blog Content:</label>
            <textarea name="content" rows="4" required></textarea><br>
            <label for="img">Upload Image:</label>
            <input type="file" name="image" accept="img" required><br>
            <input type="submit" value="Add Blog">
        </form>
    </div>