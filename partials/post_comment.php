<?php
$post_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

$servername = "localhost";
$username = "root";     // default in XAMPP
$password = "";         // default is empty
$dbname = "swiat_elektroniki";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("" . $conn->connect_error);
} else {
    $author = $_POST["author"];
    $content = $_POST["content"];
    $reference = $_POST["reference"];
    $post = $_POST["post"];
    $date = date('Y-m-d H:i:s');

    if ($author == "") {
        $author = "NULL";
    }

    if ($reference == "") {
        $reference = "NULL";
    }

    $sql = "INSERT INTO comments (author, content, date, post, reference) 
                           VALUES (\"" . $author . "\", \"" . $content . "\", \"" . $date . "\", \"" . $post . "\", " . $reference . ")";
    $conn->query($sql);
}

$conn->close();

header("Location: ../" . urlencode($post) . ".php#comments_form");
exit;
?>