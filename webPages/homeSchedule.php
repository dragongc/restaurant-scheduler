<?php
echo $stringData = $_POST['day'];
$day = $_POST['day'];
$shift = $_POST['shift'];

/**
 * Created by PhpStorm.
 * User: gcorujo
 * Date: 11/27/17
 * Time: 5:56 PM
 */

$servers = array();
include 'DBConnect.php';

$sql = "select concat(emp_firstname,' ',substr(emp_lastname,1,1),'.') AS emp_name
        from Employee inner join Schedule
        on Employee.emp_num = Schedule.emp_num
        inner join Shift
        on Schedule.shift_id = Shift.shift_id
        where Shift.day = '$day'
        and Shift.type = '$shift'";
        //where Shift.day = '". $day. "'
        //and Shift.type = '". $shift. "'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $i = 0;
    while ($row = mysqli_fetch_array($result)) {
        $servers[i] = $row['emp_name'];
        $slot = $i + 1;
        if ($slot == $result->num_rows) {
            $slot = 'Call';
        }
        echo"<tr>";
        echo"<td>$slot.</td>";
        echo"<td><a>$servers[i]</a></td>";
        echo"</tr>";
        $i++;
    }
}
?>