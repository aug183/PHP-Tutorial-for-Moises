<html>
    <title>

    </title>

    <body>
        <table>
            <tr>
                <th>Record No.</th>
                <th>Student Number</th>
                <th>Full Name</th>
            </tr>
            <?php 
                $integer = $_POST['integer'];
                $studentNum = $_POST['studentNum'];
                $lastName = $_POST['lastName'];
                $firstName = $_POST['firstName'];
                $middleName = $_POST['middleName'];
                for ($x = 0; $x < $integer; $x++)
                {
                    echo "<tr>";

                    echo "<td>";
                    print $x + 1;
                    echo "</td>";

                    echo "<td>";
                    print $studentNum[$x];
                    echo "</td>";
                    
                    echo "<td>";
                    echo $firstName[$x] . " " . $middleName[$x] . " " . $lastName[$x];
                    echo "</td>";

                }
            ?>
        </table>
    </body>

</html>