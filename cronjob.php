<?php 
include_once("config.php");
$bqur = "SELECT * FROM student_master";
$bqurres = mysqli_query($conn, $bqur);
$bqurrow = mysqli_fetch_assoc($bqurres);
$brow = mysqli_num_rows($bqurres);
while ($row = mysqli_fetch_assoc($bqurres)) {
    $bqur = "SELECT * FROM borrow_book WHERE user_id = '$row[S_id]' AND date_returned = '0000-00-00'";
    $bqurres = mysqli_query($conn, $bqur);
    $bqurrow = mysqli_fetch_assoc($bqurres);
    $brow = mysqli_num_rows($bqurres);
    if ($brow > 0) {
        $date1 = date_create($bqurrow['due_date']);
        $date2 = date_create(date("Y-m-d"));
        $diff = date_diff($date1, $date2);
        $diff = $diff->format("%a");
        if ($diff > 0) {
            $penalty = $diff * 100;
            $penalty = $penalty + $row['penalty'];
            $uqur = "UPDATE student_master SET penalty = '$penalty' WHERE S_id = '$row[S_id]'";
            $uqurres = mysqli_query($conn, $uqur);
        }
    }
}
