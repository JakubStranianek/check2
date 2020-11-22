<?php include_once 'partials/header.php'?>

<div class="page-header text-center mt-5">
    <h1>Database of students</h1>
</div>

<?php if (isset($database)) {
    $data = $database->select("stud", "*");
} ?>

<div class="row">
    <div class="col-8">
        <ul class="list-group pt-3">
            <?php
            foreach($data as $item)
            {
                echo    '<li class="list-group-item">';
                echo    $item["Name"] . " ";
                echo    $item["Surname"];
                echo    '<div class="controls pull-right">';
                echo        '<a href="edit.php?id='.$item['id'].'"class="edit-link">Edit</a>';
                echo        '<a href="delete.php?id='.$item['id'].'"class="delete-link">X</a>';
                echo    '</div>';
                echo    '</li>';
            }
             ?>
        </ul>
    </div>

    <div class="col-4">
        <form class="col-sm-9 pt-3" action="inc/add-new.php" method="post">
            <p class="form-group">
                <textarea class="form-control" name="messageN" id="text" rows="1" placeholder="[ Zadajte meno ]"></textarea>
                <textarea class="form-control" name="messageS" id="text" rows="1" placeholder="[ Zadajte priezvisko ]"></textarea>
            </p>

            <p class="form-group">
                <input class="btn-sm btn-danger" type="submit" value="Pridaj dalsieho">
            </p>
        </form>
    </div>
</div>



<?php include_once 'partials/footer.php'?>
