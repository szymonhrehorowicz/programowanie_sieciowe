<form id="comments_form" method="post" action="partials/post_comment.php">
    <?php
    $post_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    echo "<input class=\"hidden\" type=\"text\" class=\"form-control\" name=\"post\" value=" . $post_name . ">";
    ?>
    <input class="hidden" type="text" class="form-control" id="comments_form_reference" name="reference">
    <div class="mb-3">
        <label for="author" class="form-label">Twoje imię</label>
        <input type="text" class="form-control" name="author" placeholder="Twoje imię">
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Komentarz</label>
        <textarea class="form-control" name="content" rows="3"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn">Skomentuj</button>
    </div>
</form>