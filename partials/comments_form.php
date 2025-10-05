<form id="comments_form" method="post" action="partials/post_comment.php">
    <?php
    $post_name = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
    echo "<input class=\"visually-hidden\" type=\"text\" class=\"form-control\" name=\"post\" value=" . $post_name . ">";
    ?>
    <input class="visually-hidden" type="text" class="form-control" id="comments_form_reference" name="reference">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Twoje imię</label>
        <input type="text" class="form-control" name="author" placeholder="Maciek">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Komentarz</label>
        <textarea class="form-control" name="content" rows="3"></textarea>
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Skomentuj</button>
    </div>
</form>