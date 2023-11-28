<?php
    //fetching data
    $query = "SELECT * from tblsubjects
                LEFT JOIN tblsyllabus
                ON tblsyllabus.subject_id = tblsubjects_id";
    $result = mysqli_query($dbc, $query); // using mysqli_query
?>