<?php
/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/30/17
 * Time: 9:40 PM
 */
$name = array();
$day = array();
include 'DBConnect.php';

$sql = "select Employee.emp_firstname, Shift.day
        from Employee
        inner join Shift
        inner join Schedule
        where Employee.emp_num = Schedule.emp_num
        and Schedule.shift_id = Shift.shift_id
        and Employee.manager = 1
        order by Schedule.shift_id";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $name[$i] = $row['emp_firstname'];
        $day[$i] = $row['day'];
        $i++;
    }

    for ($i = 0; $i < count($day); $i+=2) {
        $j = $i + 1;
        if ($day[$i] == 'SATURDAY') {
            echo "<tr>";
            echo "<td><label>$day[$i]</label></td>";
            echo "<td>CLOSED</td>";
            echo "<td><a>$name[$i]</a></td>";
            echo "</tr>";
            $i-=1;
        } elseif ($day[$i] == 'SUNDAY') {
            echo "<tr>";
            echo "<td><label>$day[$i]</label></td>";
            echo "<td><a>$name[$i]</a></td>";
            echo "<td>CLOSED</td>";
            echo "</tr>";
        } else {
            echo "<tr>";
            echo "<td><label>$day[$i]</label></td>";
            echo "<td><a>$name[$i]</a></td>";
            echo "<td><a>$name[$j]</a></td>";
            echo "</tr>";
        }
    }
}
else {
    echo "<tr>";
    echo "<td><label>Got</label></td>";
    echo "<td><a>to</a></td>";
    echo "<td><a>PHP file</a></td>";
    echo "</tr>";
}

?>