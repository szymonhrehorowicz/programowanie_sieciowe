<h2>Komentarze</h2>
<?php include 'partials/comments_form.php'; ?>
<?php
$post_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

// DB - dane dostępowe
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "swiat_elektroniki";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn->connect_error) {
    $sql = "SELECT * FROM comments WHERE post='$post_name'";
    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {
        $comments[$row['id']] = $row;
        $comments[$row['id']]['children'] = [];
    }

    if (empty($comments)) {
        echo "Brak komentarzy <i class=\"fa-solid fa-face-sad-tear\"></i>";
        exit();
    }

    /*
        Budowa drzewa:
        if komentarz ma referencję do rodzica:
            dodaj go do tablicy dzieci rodzica
        else
            dodaj go na górze drzewa
    */
    $tree = [];
    foreach ($comments as $id => &$comment) {
        if ($comment['reference']) {
            $comments[$comment['reference']]['children'][] = &$comment;
        } else {
            $tree[] = &$comment;
        }
    }
    unset($comment);

    // Rekurencyjna funkcja do budowania komentarzy
    function render_comments($comments, $depth = 0)
    { {
            // Pętla po górno-poziomowych komentarzach (poziom względem miejsca wywołania)
            foreach ($comments as $c) {
                echo "<div class=\"comment\"" . " style=\"margin-left:" . $depth * 20 . "px !important\"";
                echo "data-comment_id=" . $c["id"] . ">";
                echo "<div>";
                echo "<button data-comment_id=" . $c["id"] . " onclick=\"commentReference(this)\"> <i class=\"fas fa-comments text-primary\"></i> " . htmlspecialchars($c['author']) . "<i>(" . $c['date'] . ")</i></div> ";
                echo "<div>";
                echo "<div>";
                echo "<p>" . nl2br(htmlspecialchars($c['content'])) . "</p>";
                echo "</div></div></div>";

                // Rekurencyjne wywołanie dla dzieci tego komentarza
                if (!empty($c['children'])) {
                    render_comments($c['children'], $depth + 1);
                }
                echo "</div>";
            }
        }
    }

    render_comments($tree, 0);
}
?>