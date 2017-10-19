
<html>
<body>

<?php

$con = mysqli_connect('localhost','admin','admin123');

if(!$con)
{
    echo 'Not connected to server';
}

if(!mysqli_select_db($con,'fyp'))
{
    echo 'Database not selected';
}
if(isset($_POST['insert']))
{
$Email = $_POST['email'];
$Password = $_POST['password'];
$ConfirmPassword = $_POST['confirmpassword'];
$FName = $_POST['firstname'];
$LName = $_POST['lastname'];
$Day = $_POST['day'];
$Month = $_POST['month'];
$Year = $_POST['yearno'];
$MaritalStatus = $_POST['MaritalStatus'];
$ChildrenStatus = $_POST['ChildrenStatus'];
$Gender = $_POST['Gender'];
$Religion = $_POST['Religion'];
$State = $_POST['State'];
$Address = $_POST['address'];
$Contact = $_POST['phoneno'];


$sql = "INSERT INTO userdetails (Email,Password,ConfirmPassword,FName,LName,Day,Month,Year,MaritalStatus,ChildrenStatus,Gender,Religion,
                               State,Address,Contact) VALUES ('$Email','$Password','$ConfirmPassword','$FName','$LName','$Day','$Month',
                                                             '$Year','$MaritalStatus','$ChildrenStatus','$Gender','$Religion','$State',
                                                             '$Address','$Contact')";

if (!mysqli_query($con,$sql))
{
    echo 'Data not Inserted';
}
else
{
    echo 'Data Sucessfully Inserted';
}
}
header("refresh:2; url=Homepage.htm");

?>
  </body>
  </html>