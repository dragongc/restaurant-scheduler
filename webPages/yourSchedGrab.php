<?php
session_start();
/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/29/17
 * Time: 2:37 AM
 */
$days = array();
$types = array();
include 'DBConnect.php';
$emp_num = $_SESSION["emp_num"];

$sql = "select Shift.day, Shift.type
        from Shift inner join
        Schedule
        on Shift.shift_id = Schedule.shift_id
        where Schedule.emp_num = '". $emp_num. "'
        order by Shift.shift_id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $days[$i] = $row['day'];
        $types[$i] = $row['type'];
        $i++;
    }

    for ($i = 0; $i < count($days); $i++) {
        echo "<tr>";
        echo "<td>$days[$i]</td>";
        if($days[$i] == $days[$i+1]) {
            $j = $i + 1;
            echo "<td><label>$types[$i]/$types[$j]</label></td>";
            $lowTypei = strtolower($types[$i]);
            $lowTypej = strtolower($types[$j]);
            echo "<td><a data-toggle=\"modal\" data-target=\"#tradeModal\">$lowTypei</a>
                  /<a data-toggle=\"modal\" data-target=\"#tradeModal\">$lowTypej</a></td>";
            $i++;
        } else {
            echo "<td><label>$types[$i]</label></td>";
            $lowTypei = strtolower($types[$i]);
            echo "<td><a data-toggle=\"modal\" data-target=\"#tradeModal\">$lowTypei</a>";
        }
        echo "</tr>";
    }

}
?>