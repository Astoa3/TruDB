Front-end and back-end application code
<html>
<head>
<title>TruDB</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<h1>TruDB</h1>
<?php
include_once ("db.php");
#Creating Customer described table headers
echo '<table id="Customers">';
echo '<tr>';
echo '<th>First Name</th>';
echo '<th>Last Name</th>';
echo '<th>Address</th>';
echo '<th>Phone</th>';
echo '<th>Email</th>';
echo '</tr>';

##########################################retreive all Customer Information
$sql = "SELECT * FROM Customers;";
$result = mysqli_query($conn, $sql);

$first = array();
$last = array();
$address = array();
$phone = array();
$email = array();
#Generate Initial Table
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
     echo '<tr>';
     echo '<td>' . $row['first_name'] . '</td>';
     echo '<td>' . $row['last_name'] . '</td>';
     echo '<td>' . $row['address'] . '</td>';
     echo '<td>' . $row['phone'] . '</td>';
     echo '<td>' . $row['email'] . '</td>';
    }
}

$conn->close();
?>

<form action="functions.php" method="POST">
<table style ="width: 100%">
 <tr>
  <td><label>First name:</label></td>
  <td><input type="text" id = 'first' name="first"</td>
  <td><label>Last name:</label></td>
  <td><input type="text" id = 'last' name="last"></td>
  <td><label>Address:</label></td>
  <td><input type="text" id= 'address' name="address"></td>
  <td><label>Phone:</label></td>
  <td><input type="text" id = 'phone' name="phone"></td>
  <td><label>Email:</label></td>
  <td><input type="text" id = 'email' name="email"></td>
  </tr>
  </table>
<center>
  <input type="submit" class="add"  name="add_button" value="Add">
  <input type="submit" class="delete"  name="delete_button" value="Delete">
  <input type = "submit" class="update"  name="update_button"  value = "Update">
</center>
</form>

</body>
</html>
