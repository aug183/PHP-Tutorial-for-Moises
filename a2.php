<html>
    <title>

    </title>

    <body>
        <form action="a3.php" method="post">
            <?php 
                $integer = $_POST['integer'];
                echo "Input " . $integer . " records";
                for ($x = 0; $x < $integer; $x++){
                    echo "<hr>";
                    echo "Student Number: ";
                    echo "<input type=\"number\" name=\"studentNum[]\" required>";
                    echo "<br>";
                    echo "Last Name: ";
                    echo "<input type=\"text\" name=\"lastName[]\" required>";
                    echo "<br>";
                    echo "First Name: ";
                    echo "<input type=\"text\" name=\"firstName[]\" required>";
                    echo "<br>";
                    echo "Middle Name: ";
                    echo "<input type=\"text\" name=\"middleName[]\" required>";
                }
            ?>
            <hr>
            <br>
            <input type="hidden" name="integer" value="<?php echo $integer ?>" >
            <input type="submit">
        </form> 
    </body>
</html>