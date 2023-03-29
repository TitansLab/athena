<!DOCTYPE html>
<body>
<?php
session_start();
if ($_SESSION['role'] != "Texas") {
    header("Location: ../index.php");
} else {
    include_once("../config.php");
    $_SESSION["userrole"] = "Librarian";
    $id = $_SESSION['id'];
    $borrow_id = $_GET['id'];
    $dqur = "DELETE FROM borrow_book WHERE borrow_book_id = '$borrow_id'";
    $run = mysqli_query($conn, $dqur);
    if ($run) {
        echo "<script>alert('Deleted Successfully');</script>";
        header("Location: borrow_list.php");
    }
}
?>
</body>

</html>