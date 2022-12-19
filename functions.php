
<?php
include_once ("db.php");

$first = mysqli_real_escape_string($conn, $_POST['first']);
$last = mysqli_real_escape_string($conn, $_POST['last']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);
$email = mysqli_real_escape_string($conn, $_POST['email']);

 if ($first == NULL || $last == NULL || $address == NULL || $phone== NULL || $email == NULL){
   header("Location: index.php?functions=failure");
 }  elseif (isset($_POST['add_button'])) {
     $sql = "INSERT INTO Customers(first_name,last_name,address,phone,email) VALUE('$first', '$last', '$address', '$phone', '$email');";
     mysqli_query($conn, $sql);
     header("Location: index.php?functions=AddSuccess");
 }




 if ($first == NULL || $last == NULL || $address == NULL || $phone== NULL || $email == NULL){
   header("Location: index.php?functions=failure");
 }  elseif (isset($_POST['delete_button'])) {
     $sql = "DELETE FROM Customers WHERE first_name='$first';";
     $conn->query($sql);
     header("Location: index.php?functions=DeleteSuccess");
 }

if ($first == NULL || $last == NULL || $address == NULL || $phone== NULL || $email == NULL){
   header("Location: index.php?functions=failure");
 }  elseif (isset($_POST['update_button'])) {
     $sql = "UPDATE Customers SET first_name='$first', last_name='$last', address= '$address', phone='$phone',email='$email' WHERE first_name='$first';";
     $conn->query($sql);
     header("Location: index.php?functions=UpdateSuccess");
 }

?>
