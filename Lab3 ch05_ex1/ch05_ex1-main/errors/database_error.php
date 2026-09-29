<?php include '../view/header.php'; ?>
<div id="main">
    <h1 class="top">Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>The database must be installed as described in the appendix.</p>
    <p>MySQL must be running as described in chapter 1.</p>
    <p>Error message: <?php echo $error_message; ?></p>
    <p>&nbsp;</p>
</div><!-- end main -->
<?php include '../view/footer.php'; ?>
<?php
$dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
$username = 'root';
$password = '';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>