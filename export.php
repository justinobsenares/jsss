<?php
require 'connection.php';


$filename = "Employeeinfo" . date('Ymd') . ".xls";


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Employeeinfo.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
        <th>No.</th>
         <th>Employee Name</th>
         <th>Birth Date</th>
         <th>Salary</th>

        </tr>
    </thead>

     <tbody>
                        <?php
                        $sql = "SELECT * FROM employeefile";
                        $result = $connect->query($sql);

                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["recid"] . "</td>
                                <td>" . $row["fullname"] . "</td>
                                <td>" . $row["birthdate"] . "</td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                        }
                        ?>

                    </tbody>
</table>