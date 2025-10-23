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
    function render_comments($comments, $is_child)
    {
        // Pętla po górno-poziomowych komentarzach (poziom względem miejsca wywołania)
        foreach ($comments as $c) {
            echo "<div class=\"card py-4 h-100 comment ";
            if ($is_child) {
                // Dzieci dostają dodatkowy margines, aby uwidocznić strukturę rodzic<-dziecko
                echo "ms-2";
            }
            echo "\"";
            echo "data-comment_id=" . $c["id"] . ">";
            echo "<div class=\"card-body\">";
            echo "<h7 class=\"text-uppercase m-0\"> <i class=\"fas fa-comments text-primary\"></i> " . htmlspecialchars($c['author']) . "</h7> ";
            echo "<i>(" . $c['date'] . ")</i>";
            echo "<hr class=\"my-4 mx-auto\" />";
            echo "<div class=\"col\">";
            echo "<div class=\"d-flex justify-content-between align-items-start\">";
            echo "<div class=\"small text-black-50 me-3\">" . nl2br(htmlspecialchars($c['content'])) . "</div>";
            echo "<div><button type=\"button\" class=\"btn btn-primary btn-sm\" data-comment_id=" . $c["id"] . " onclick=\"commentReference(this)\">Odpowiedz</button></div>";
            echo "</div></div></div>";

            // Rekurencyjne wywołanie dla dzieci tego komentarza
            if (!empty($c['children'])) {
                render_comments($c['children'], true);
            }
            echo "</div>";
        }
    }

}

render_comments($tree, false);
?>