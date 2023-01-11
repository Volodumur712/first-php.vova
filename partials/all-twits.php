<?php

$twits = getAllTwitsByUser(getUserID());

?>

<!-- твіти у цикл у вигляді списку -->
<ul id="listTwits">
    <?php while($row = $twits->fetch_assoc()): ?>

        <li>
            <?php echo $row['twit']; ?> 
            <!-- перевірка чи є картинка -->
            <?php if($row['image'] != ""); ?>
                <img src="/uploads/<?php echo $row['image']; ?>">
                

        </li>

    <?php endwhile; ?>    

</ul>