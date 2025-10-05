<div class="container px-4 px-lg-5">
    <h2>Komentarze</h2>
    <?php include 'partials/comments_form.php'; ?>
    <div class="row gx-0 mb-4 align-items-left">

        <?php
        $post_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);

        $servername = "localhost";
        $username = "root";     // default in XAMPP
        $password = "";         // default is empty
        $dbname = "swiat_elektroniki";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            // Display error
        } else {
            $sql = "SELECT * FROM comments WHERE post='$post_name'";
            $result = $conn->query($sql);

            // if ($result->num_rows > 0) {
            //     // Output each row
            //     while($row = $result->fetch_assoc()) {
            //         echo "ID: " . $row["id"];
            //     }
            // } else {
            //     echo "0 results";
            // }
            // $conn->close();
        
            while ($row = $result->fetch_assoc()) {
                $comments[$row['id']] = $row;
                $comments[$row['id']]['children'] = [];
            }

            // 2. Build the tree
            $tree = [];
            foreach ($comments as $id => &$comment) {
                if ($comment['reference']) {
                    // attach to parent
                    $comments[$comment['reference']]['children'][] = &$comment;
                } else {
                    // top-level comment
                    $tree[] = &$comment;
                }
            }
            unset($comment); // break reference
        
            // 3. Recursive function to render comments
            function renderComments($comments, $is_child)
            {
                foreach ($comments as $c) {
                    echo "<div class=\"card py-4 h-100 comment ";
                    if ($is_child) {
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
                    echo "<div><button type=\"button\" class=\"btn btn-primary btn-sm reply-btn\" data-comment_id=" . $c["id"] . " onclick=\"commentReference(this)\">Odpowiedz</button></div>";
                    echo "</div></div></div>";

                    // render children if any
        
                    if (!empty($c['children'])) {
                        renderComments($c['children'], true);
                    }
                    echo "</div>";
                }
            }

        }

        renderComments($tree, false);
        ?>
    </div>
</div>