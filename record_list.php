<?php
//record_list.php - shows record collection
?>
<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>
<?php include 'includes/credentials.php';?>
<?php
$sql = "select * from record_Collection";
//we connect to the db here
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

//we extract the data here
$result = mysqli_query($iConn,$sql);

if(mysqli_num_rows($result) > 0)
{//show records

    while($row = mysqli_fetch_assoc($result))
    {
        echo '<p>';
        echo 'Album: <b>' . $row['Album'] . '</b> ';
        echo 'Artist: <b>' . $row['Artist'] . '</b> ';
        echo 'Label: <b>' . $row['Label'] . '</b> ';
        echo 'Release Date: <b>' . $row['ReleaseDate'] . '</b> ';
        
        echo '<a href="record_view.php?id=' . $row['RecordID'] . '">' . $row['Album'] . '</a>';
        
        echo '</p>';
    }    

}else{//inform there are no records
    echo '<p>There are currently no records!</p>';
}

//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
<?php include 'includes/footer.php';?>