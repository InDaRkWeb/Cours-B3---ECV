<?php
for($i=0; $i <= 20; $i += 2) {
 if ($i == 10) {
    ?> 
    <strong><?php echo $i ?></strong>
    <?php
    echo '<br/>';
 } else {
    echo $i;
    echo '<br/>';
}
 }
?> 