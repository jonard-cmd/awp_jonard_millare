Inside the File:
<?php
include("db_config.php");


$Person_ID = "";
$Last_Name = "";
$First_Name = "";
$Middle_Name = "";
$Extension_Name = "";
$Sex = "";
$Birth_Date = "";
$Age = "";
$Home_Address = "";
$Civil_Status = "";
$Religion = "";
$Nationality = "";
$Boarding_Address = "";
$Contact_Number = "";
$Email_Address = "";



if (array_key_exists('search_user', $_POST)) {
    $Person_ID = $_POST['Person_ID'];

    // Corrected SQL query with SELECT instead of SEARCH
    $SearchUserAccountQuery = "SELECT * FROM `person` WHERE `Person_ID` = '$Person_ID'";

    // Execute the SQL query and check if it was successful
    $result = $db_connect->query($SearchUserAccountQuery);

    if ($result) {
    // Fetch the user account data
    while ($row = mysqli_fetch_object($result)) {
    // Values for 'username' and 'password' are taken from the query result 
    $Last_Name = $row->Last_Name;
    $First_Name = $row->First_Name;
    $Middle_Name = $row->First_Name;
    $Extension_Name = $row->Extension_Name;
    $Sex = $row->Sex;
    $Birth_Date= $row->Birth_Date;
    $Age = $row->Age;
    $Home_Address = $row->Home_Address;
    $Civil_Status = $row->Civil_Status;
    $Religion = $row->Religion;
    $Nationality = $row->Nationality;
    $Boarding_Address = $row->Boarding_Address;
    $Contact_Number = $row->Contact_Number;
    $Email_Address = $row->Email_Address;
    }

    } else {
    echo "Error executing the query: " . $db_connect->error;
    }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DISPLAY USER</title>
</head>
<body>
    <form method="post">
        <input type="text" id="Person_ID" name="Person_ID">
        <label for="Person_ID">Person ID</label><br><br>
        <button type="submit"  name="search_user">SEARCH</button>
    </form>

    <input type="text" id="Last_Name" name="Last_Name" value="<?php echo $Last_Name?>">
    <label for="Last_Name">Last Name</label><br>
    
    <input type="text" id="First_Name" name="First_Name" value="<?php echo $First_Name ?>">
    <label for="First_Name">First Name</label><br>

    <input type="text" id="Middle_Name" name="Middle_Name" value="<?php echo $Middle_Name ?>">
    <label for="Middle_Name">Middle Name</label><br>

    <input type="text" id="Extension_Name" name="Extension_Name" value="<?php echo $Extension_Name ?>">
    <label for="Extension_Name">Extension Name</label><br>

    <input type="text" id="Sex" name="Sex" value="<?php echo $Sex ?>">
    <label for="Sex">Sex</label><br>

    <input type="text" id="Birth_Date" name="Birth_Date" value="<?php echo $Birth_Date ?>">
    <label for="Birth_Date">Birth Date</label><br>

    <input type="text" id="Age" name="Age" value="<?php echo $Age ?>">
    <label for="Age">Age</label><br>

    <input type="text" id="Home_Address" name="Home_Address" value="<?php echo $Home_Address ?>">
    <label for="Home_Address">Home Address</label><br>

    <input type="text" id="Civil_Status" name="Civil_Status" value="<?php echo $Civil_Status ?>">
    <label for="Civil_Status">Civil Status</label><br>

    <input type="text" id="Religion" name="Religion" value="<?php echo $Religion ?>">
    <label for="Religion">Religion</label><br>

    <input type="text" id="Nationality" name="Nationality" value="<?php echo $Nationality ?>">
    <label for="Nationality">Nationality</label><br>

    <input type="text" id="Boarding_Address" name="Boarding_Address" value="<?php echo $Boarding_Address ?>">
    <label for="Boarding_Address">Boarding Address</label><br>

    <input type="text" id="Contact_Number" name="Contact_Number" value="<?php echo $Contact_Number ?>">
    <label for="Contact_Number">Contact Number</label><br>

    <input type="text" id="Email_Address" name="Email_Address" value="<?php echo $Email_Address ?>">
    <label for="Email_Address">Email Address</label><br>









    

</body>
</html>