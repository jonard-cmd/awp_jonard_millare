<?php
   include("db_config.php");

   ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
        <label>Last Name</label><br>
        <input type="text" id="Last_Name" name="Last_Name">

        <label>First Name</label><br>
        <input type="text" id="First_Name" name="First_Name">

        <label>Middle Name</label><br>
        <input type="text" id="Middle_Name" name="Middle_Name">

        <label>Extension Name</label><br>
        <input type="text" id="Extension_Name" name="Extension_Name">

        <label>Sex</label><br>
        <select name="Sex" id="Sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
        </select> 

        <label>Birth_Date</label><br>
        <input type="date" id="Birth_Date" name="Birth_Date">

        <label>Age</label><br>
        <input type="number" id="Age" name="Age">

        <label>Home Address</label><br>
        <input type="text" id="Home_Address" name="Home_Address">

        <label>Civil Status</label><br>
        <select name="Civil_Status" id="Civil_Status">
            <option value="Single">Single</option>
            <option value="Maried">Maried</option>
            <option value="Widowed/Widower">Widowed/Widower</option>
        </select> 

        <label>Nationality</label><br>
        <input type="text" id="Nationality" name="Nationality">

        <label>Religion</label><br>
        <input type="text" id="Religion" name="Religion">

        <label>Boarding Address</label><br>
        <input type="text" id="Boarding_Address" name="Boarding_Address">

        <label>Contact Number</label><br>
        <input type="text" id="Contact_Number" name="Contact_Number">

        <label>Email Address</label><br>
        <input type="email" id="Email_Address" name="Email_Address">
<button type="submit"  name="add_Student">ADD STUDENT</button>
</form>

<?php 
  if (array_key_exists('add_Student',$_POST))
  {
         $Last_Name= $_POST ['Last_Name'];
         $Fist_Name= $_POST ['First_Name'];
         $Middle_Name= $_POST ['Middle_Name'];
         $Extension_Name= $_POST ['Extension_Name'];
         $Sex= $_POST ['Sex'];
         $Birth_Date= $_POST ['Birth_Date'];
         $Age= $_POST ['Age'];
         $Home_Address= $_POST ['Home_Address'];
         $Civil_Status= $_POST ['Civil_Status'];
         $Nationality= $_POST ['Nationality'];
         $Religion= $_POST ['Religion'];
         $Boarding_Address= $_POST ['Boarding_Address'];
         $Contact_Number= $_POST ['Contact_Number'];
         $Email_Address= $_POST ['Email_Address'];
  
         echo $Last_Name;
         echo $Fist_Name;
         echo $Middle_Name;
         echo $Extension_Name;
         echo $Sex;
         echo $Birth_Date;
         echo $Age;
         echo $Home_Address;
         echo $Civil_Status;
         echo $Nationality;
         echo $Religion;
         echo $Boarding_Address;
         echo $Contact_Number;
         echo $Email_Address;

        $insert_person= "INSERT INTO person(`Last_Name`,`First_Name`, 
         `Middle_Name`,`Extension_Name`,`Sex`,`Birth_Date`,`Age`,
         `Home_Address`,`Civil_Status`,`Religion`,`Nationality`,
         `Boarding_Address`,`Contact_Number`,`Email_Address`)  VALUES ('$Last_Name','$Fist_Name','$Middle_Name','$Extension_Name','$Sex',' $Birth_Date','$Age','$Home_Address','$Civil_Status','$Religion','$Nationality','$Boarding_Address','$Contact_Number','$Email_Address');";
        $result= $db_connect->query($insert_person);

         
  }
?>
</body>
</html>