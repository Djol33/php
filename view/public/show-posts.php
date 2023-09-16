
<P>Posts:</P>

<?php
    foreach ($rows as $row){
        echo "<a href='../post/".$row["id"]."'>";
        echo $row["title"];
        echo "</a><br/>";
    }