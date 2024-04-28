<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "blog";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the database
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['posted_by'] . "</td>";
        echo "<td><img src='" . $row['image1'] . "' height='100'></td>";
        echo "<td><button class='edit-post-btn'>Edit</button><button class='view-post-btn'>View</button><button class='delete-post-btn'>Delete</button></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No posts found.</td></tr>";
}

mysqli_close($conn);
?>
