<?php

include __DIR__ .'/db.php';

foreach($films as $film)
{?>

<div>
    <h1>
        <?php echo $film->title?>
    </h1>
    <h2>
        Regista:
        <?php echo $film->director?>
    </h2>
    <h3>
        Il film dura :
        <?php echo $film->time?>
        min
    </h3>
    <h4>
        Genere:
        <?php echo $film->genre?>
    </h4>
</div>


<?php
}
?>