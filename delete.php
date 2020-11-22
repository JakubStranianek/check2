<?php
require_once 'inc/config.php';

if (isset($database)) {
    $item = $database->get("stud", "*", [
        "id" => $_GET['id']
    ]);
}

include_once 'partials/header.php'

?>

<div class="page-header text-center mt-5">
    <h1>Delete item</h1>
</div>

<?php if (isset($database)) {
    $data = $database->select("stud", "*");
} ?>

    <div class="col-4">
        <form class="col-sm-9 pt-3" action="inc/delete-item.php" method="post">
            <p class="form-group">
                <textarea disabled class="form-control" name="messageN" id="text" rows="1" placeholder="[ <?php echo $item['Name'] ?> ]"></textarea>
                <textarea disabled class="form-control" name="messageS" id="text" rows="1" placeholder="[ <?php echo $item['Surname'] ?> ]"></textarea>
            </p>

            <p class="form-group">
                <input name="id" type="hidden" value="<?php echo $_GET['id']?>">
                <input class="btn-sm btn-danger" type="submit" value="Vymaž študenta">
                <span class="controls">
                    <a href="<?php echo 'http://localhost/check2/index.php'?>" class="back-link">back</a>
                </span>
            </p>
        </form>
    </div>
</div>



<?php include_once 'partials/footer.php'?>

