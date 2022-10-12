<html>
    <header><title>Grading System</title></header>
    <body>
        <p>Check Student Grade</p>
        <form action="Grading_System.php" method="post">
            Grade : <input type="number" name="grade" placeholder="Input grade here." step="0.01">
            <input type="submit">
        </form>
    </body>
    <?php
            
            $grade = $_POST['grade'];

            echo "Grade Output";
            echo "<br>";

            if($grade <= 100 AND $grade >= 0){
                if($grade >= 70 ){
                    echo $grade."% Student Grade status is PASSED";
                }elseif($grade >= 60){
                    echo $grade."% Student Grade status is REMEDIAL";
                }else{
                    echo $grade."% Student Grade status is FAILED";
                }
            }else{
                echo $grade."% is invalid. Grade range must be 0% to 100% only";
            }
    ?>
</html>