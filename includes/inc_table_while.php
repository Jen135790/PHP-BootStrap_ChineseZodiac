<div  id='whileTable' class='table-responsive'>
    <h3>While Loop</h3>
    <h4>Chinese Zodiac Years</h4>
    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>Rat</th>
                <th>Ox</th>
                <th>Tiger</th>
                <th>Rabbit</th>
                <th>Dragon</th>
                <th>Snake</th>
                <th>Horse</th>
                <th>Sheep</th>
                <th>Monkey</th>
                <th>Rooster</th>
                <th>Dog</th>
                <th>Pig</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php
                $count = 0;
                $year = 1912;
                $currentYr = getDate()['year'];

                while($year <= $currentYr){
                    echo "<td>$year</td>";
                    ++$year;
                    ++$count;
                    if($count === 12){
                        echo "</tr><tr>";
                        $count = 0;
                    }
                }
                
                if($count != 12){
                    while($count < 12){
                        echo "<td> </td>";
                        ++$count;
                    }
                }
            ?>
            </tr>
        </tbody>
    </table>
</div>