<form id="comments_form" method="post" action="partials/post_comment.php">
    <?php
    $post_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    echo "<input class=\"hidden\" type=\"text\" name=\"post\" value=" . $post_name . ">";
    ?>
    <input class="hidden" type="text" id="comments_form_reference" name="reference">
    <input type="text" name="author" placeholder="Twoje imię..." required>
    <textarea name="content" rows="3" placeholder="Komentarz..." required></textarea>
    <button type="submit" class="btn">Skomentuj</button>
</form>