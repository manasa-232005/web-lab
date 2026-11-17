
<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>

    <style>
        table,
        td,
        th {
            border: 1px solid black;
            width: 33%;
            text-align: center;
            background-color: DarkGray;
        }

        table {
            margin: auto;
        }

        input,
        p {
            text-align: right;
        }
    </style>
</head>

<body>

    <form method="post">
        <table>
            <caption>
                <h2>SIMPLE CALCULATOR</h2>
            </caption>

            <tr>
                <td>Value 1:</td>
                <td>
                    <input type="text" name="num1">
                </td>
                <td rowspan="2">
                    <input type="submit" name="submit"
                           value="Calculate">
                </td>
            </tr>

            <tr>
                <td>Value 2:</td>
                <td>
                    <input type="text" name="num2">
                </td>
            </tr>

        </table>
    </form>

    <?php

    if (isset($_POST['submit']))
    {
        // Get input values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        // Check whether inputs are numeric
        if (is_numeric($num1) && is_numeric($num2))
        {
            echo "<table>";

            // Addition
            echo "<tr>
                    <td colspan='2'>Addition:</td>
                    <td><p>" . ($num1 + $num2) . "</p></td>
                  </tr>";

            // Subtraction
            echo "<tr>
                    <td colspan='2'>Subtraction:</td>
                    <td><p>" . ($num1 - $num2) . "</p></td>
                  </tr>";

            // Multiplication
            echo "<tr>
                    <td colspan='2'>Multiplication:</td>
                    <td><p>" . ($num1 * $num2) . "</p></td>
                  </tr>";

            // Division
            if ($num2 != 0)
            {
                echo "<tr>
                        <td colspan='2'>Division:</td>
                        <td><p>" . ($num1 / $num2) . "</p></td>
                      </tr>";
            }
            else
            {
                echo "<tr>
                        <td colspan='2'>Division:</td>
                        <td>Cannot divide by zero</td>
                      </tr>";
            }

            echo "</table>";
        }
        else
        {
            echo "<script>
                    alert('ENTER VALID NUMBERS');
                  </script>";
        }
    }

    ?>

</body>
</html>
