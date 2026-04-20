<?php
$conn = mysqli_connect("localhost", "root", "", "student_db");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<h2>Student Records</h2>";

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['email']."</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found!";
}

mysqli_close($conn);
?>