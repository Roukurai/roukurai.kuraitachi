<?php
// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Select all blog posts from the database
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

// Display each blog post as a list item in an iframe on the feed page
while ($row = mysqli_fetch_assoc($result)) {
  echo "<iframe src='feed.html' frameborder='0'></iframe>";
}

// Close the connection to the database
mysqli_close($conn);
?>