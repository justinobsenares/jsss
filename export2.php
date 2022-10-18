<?php
require 'connection.php';


$filename = "Employeeinfo" . date('Ymd') . ".xls";


header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Employeeinfo.xls");

?>
<table class="text-center" border="1">
    <thead class="text-center">
        <tr>
        <th>Address</th>
         <th>Employee Name</th>
         <th>Salary</th>

        </tr>
    </thead>

     <tbody>
     <tbody>
                        <?php
                        $total_salary = 0;
                        $sql = "SELECT * FROM employeefile order by fullname asc";
                        $result = $connect->query($sql);
                        $name1 = "";
                        $name2 = "";

                        while($row = $result->fetch_assoc()) {
                            $sub = $row["salary"];
                            $total_salary += $sub;
                            echo "<tr>
                            <td>" . $row["address"] . "</td>
                                <td id='fname'>" . $row["fullname"] . "</td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                            echo "<tr>
                            <td>SUB TOTAL </td>
                                <td></td>
                                <td>" . $row["salary"] . "</td>
                            </tr>";
                        }
                        ?>
                    </tbody>
                    <tfoot>
                            <tr>
                                <th colspan="1">GRAND TOTAL</th>
                                <th colspan="1"></th>
                                <th id="total_order"><?= $total_salary?></th>
                            </tr>
                        </tfoot>

                    </tbody>
</table>