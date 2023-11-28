<!DOCTYPE html>
<html>
    <head>
        <title>Add Syllabus</title>
    </head>
    <body>
        <?php
            //including the database connection file
            include_once("../dbConnection/mysqlconfig_connection.php");
            
            if(isset($_POST['Submit'])) {
                $code = $_POST['code'];
                $author = $_POST['author'];
                $subject = $_POST['subject'];

                if(empty($code) || empty($author)) {
                    if(empty($code)) {
                        echo "<font color='red'>Subject Code field is empty.</font><br/>";
                    }
                    if(empty($author)) {
                        echo "<font color='red>Subject Author field is epmty.</font><br/";                    
                    }  
                    //link to the previous page
                    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                }
                else {
                    //if all the fields are filled (not empty)
                    //insert data to database
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(syllabus_code, syllabus_author. syllabus_subject) VALUES('$code','$author', 'syllabus_subject')");
                    //display success message
                    echo "<font color='green'Data added successfully.";
                    echo "<br/><a href='../index.php'>View Result</a>";
                }
            }
        ?>
    <body>
<html>
       
    