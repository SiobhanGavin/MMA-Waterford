<html>
<?php
$currentUser=$_SESSION['myusername'];
//Use the username to find out the userID of the current user
$sql = "SELECT user_id FROM members WHERE Username='$currentUser'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
//save the userID in the userID variable
$userID=($row['user_id']);
//get and display bookings - joins bookings, user and class tables
//where the user ID matches the current user
$sql = "SELECT competitions.entry_id AS competiton_id,
members.FirstName AS firstname,
competitions.entry_id AS competition_id, competition.competition_date AS competition_date,
competition.competition AS competition, competition.level AS level, 
FROM competitions
LEFT JOIN members ON competition.user_id=members.user_id
WHERE members.user_id='$userID'
ORDER BY bookings.booking_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
//display the bookings in a table

echo
"<table class='table table-striped'>
<thead>
 <tr>
<th>Competition ID</th>
<th>Name</th>
<th>level</th>
<th>competition</th>
<th>Competition Date</th>
 </tr>
</thead>
<tbody>";
while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['competition_id'] . "</td>";
echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
echo "<td>" . $row['level'] . "</td>";
echo "<td>" . $row['competition'] . "</td>";
echo "<td>" . $row['competition_date'] . "</td>";



echo
"</tbody>
</table>
";
}
echo
"<br>
<a href='addbooking.php'>
<button type='button' class='btn btn-success'>
Create New Booking</button>
</a>
";
//this curly bracket closes the initial if(isset()) statement
}
else{
echo ("You must <a href='login.php'>log in</a> before you can book.");
}
?> 

$sql = "SELECT Name, Level, Competition, Date of Competition FROM Competition";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
						echo 
						"<table class='table table-striped'>
						<thead>
						<tr>
							<th>Name</th>
							<th>Level</th>
							<th>Competition</th>
							<th>Date of Competition</th>
						</tr>
						</thead>";
						while($row = $result->fetch_assoc())
						{
							echo "<tr>";
							echo "<td>" . $row['name'] . "</td>";
							echo "<td>" . $row['level'] . "</td>";
							echo "<td>" . $row['competition'] . "</td>";
							echo "<td>" . $row['competition_date'] . "</td>";
							echo "</tr>";
						}
						echo 
						"</tbody> 
					</table>";}
						
						else{
							echo "book a class?<a href <Bookings.php>";
						}
						$conn->close();
						?>