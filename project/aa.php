<html>
    <head><title>Hello</title></head>
    <body>
    
    
    
    
    
    <?php
        $con=mysqli_connect("localhost","root","","web");
        
        $res=mysqli_query($con,"select * from ps");
        echo "<table>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>";?><img src="<?php echo $row["image"]; ?> " height="100" width="100"><?php echo "</td>";
            echo "</tr>";
        }
            
    
    echo "</table>"
    
    ?>
    
    
    </body>
    
    </html>