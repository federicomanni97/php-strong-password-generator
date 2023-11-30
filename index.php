<?php
include __DIR__ . '/partials/header.php';
if (empty($_SESSION['password'])) {
    header('Location: login.php');
    die();
}
?>
        
    <main class="container mt-4">
        <div class="alert alert-success">
            <h2>
                <?php echo $_SESSION['password'] ?>
            </h2>
        </div>
    </main>

<?php
    include __DIR__ . '/partials/footer.php'
?>