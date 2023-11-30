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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class='py-5'>
            <input class="p-2" type="number" min='6' max='20' name="passwordLength">
            <button class="btn btn-success" type='submit'>Generate</button>
            <button class="btn btn-success" type='reset'>Reset</button>
        </form>
</main>

<?php
include __DIR__ . '/partials/footer.php';
?>