<?php include_once 'partials/header.php'?>

<div class="page-header text-center mt-5">
    <h1>Database of students</h1>
</div>

<?php if (isset($database)) {
    $data = $database->select('stud', 'Name');
}   ?>

<div class="row">
    <div class="col-8">
        <ul class="list-group pt-3">
            <?php foreach ((array)$data as $item) {
                echo '<li class="list-group-item">'.$item.'</li>';
            } ?>
        </ul>
    </div>

    <div class="col-4">
        <form class="col-sm-9 pt-3" action="inc/add-new.php" method="post">
            <p class="form-group">
                <textarea class="form-control" name="message" id="text" rows="1" placeholder="is there [ Zadajte meno ]"></textarea>
                <textarea class="form-control" name="message" id="text" rows="1" placeholder="is there [ Zadajte priezvisko ]"></textarea>
            </p>

            <p class="form-group">
                <input class="btn-sm btn-danger" type="submit" value="Pridaj dalsieho">
            </p>
        </form>
    </div>
</div>



<?php include_once 'partials/footer.php'?>
