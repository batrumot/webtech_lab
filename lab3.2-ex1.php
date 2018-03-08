<html>
    <head>
    </head>

    <body>
        <h3>Convert radians to degrees</h3>
        <form action="lab3.2-ex1.php" method="POST">
            <input type="radio" name="is_r2d" value="1"> Radians to degrees <br>
            <input type="radio" name="is_r2d" value="0"> Degrees to radians <br> 
            Raw input: 
            <input type="text" name="raw_value"> <br><br>

            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
        <?php
            function convert($is_r2d, $raw_value)
            {
                $is_r2d = (float)$is_r2d;
                $raw_value = (float)$raw_value;
                if ($is_r2d) {
                    return ($raw_value * 180 / 3.141);
                } else {
                    return ($raw_value * 3.141 / 180);
                }
            }
            if (!empty($_POST["raw_value"])) {
                $output = convert($_POST["is_r2d"], $_POST["raw_value"]);
                printf("Result %f", $output);
            }
        ?>
    </body>
</html>