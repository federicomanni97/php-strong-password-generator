<?php
include __DIR__ . '/partials/header.php';
$error = generatePassword();
// var_dump($newPassword);
?>

<main class="container d-flex justify-content-center">
    <?php if ($error) { ?>
        <div class="alert alert-danger">
            <?php echo $error ?>
        </div>
    <?php } ?>
    <div class="d-flex text-light">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5 d-flex align-items-center'>
            <div>
                <span class="fs-4 text-secondary">Lunghezza password:</span>
            </div>
            <div class="">
                <input class="rounded-3 p-1" type="number" min='6' max='20' name="passwordLength" style="width: 250px;">
            </div>
            <div class="">
                <button class="btn btn-success" type='submit'>Generate</button>
                <button class="btn btn-success" type='reset'>Reset</button>
            </div>
        </form>
    </div>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>