<html>
    <head>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
            <table>
                <tr>
                    <td>name 1: </td>
                    <td><input type="text" name="name1"></td>
                    <td>birthday 1: </td>
                    <td><input type="date" name="birthday1"></td>
                </tr>
                <tr><td>&nbsp</td></tr>
                <tr>
                    <td>name 2: </td>
                    <td><input type="text" name="name2"></td>
                    <td>birthday 2: </td>
                    <td><input type="date" name="birthday2"></td>
                </tr>
            </table>
            <br>
            <input type="submit" value="submit">
            <input type="reset" value="reset">
        </form>
        <?php
        function is_validate($time)
        {
        }
        function time2letter($time)
        {
            $year = (int) substr($time, 0, -6);
            $day = (int) substr($time, -5, -3);
            $month = (int) substr($time, -2);
            echo "the birthday in letter: " .date("l F jS Y", strtotime($time));
        }
        function diff_in_day($time1, $time2)
        {
            $day1 = (int) substr($time1, -2);
            $day2 = (int) substr($time2, -2);
            $diff = abs($day1 - $day2);
            return $diff;
        }
        function cal_old($time)
        {
            $t = time();
            $now = date("Y-m-d", $t);
            $current_year = (int) substr($now, 0, -6);
            $birth = (int) substr($time, 0, -6);
            
            return abs($current_year - $birth);
        }
        function diff_year($time1, $time2)
        {
            $birth1 = (int) substr($time1, 0, -6);
            $birth2 = (int) substr($time2, 0, -6);
            return abs($birth1 - $birth2);
        }
        if (!empty($_POST["name1"]))
        {
            $name1 = $_POST["name1"];
            $name2 = $_POST["name2"];
            $birthday1 = $_POST["birthday1"];
            $birthday2 = $_POST["birthday2"];
        }    
        if (!empty($name1) &&
        !empty($name2) &&
        !empty($birthday1) &&
        !empty($birthday2)) {
            print (time2letter($birthday1)."<br>");
            print (time2letter($birthday2)."<br>");
            print ("The difference in days between two dates: ");
            print (diff_in_day($birthday1, $birthday2)."<br>");
            print ($name1." is : ".cal_old($birthday1)." year old<br>");
            print ($name2." is : ".cal_old($birthday2)." year old<br>");
            print ("the different years between two people: ");
            print (diff_year($birthday1, $birthday2));
        } else if (empty($name1) && 
        empty($name2) &&
        empty($birthday1) &&
        empty($birthday2)) {
        } else {
            print ("<br>Please enter all !");
        }
        ?>

    </body>
</html>