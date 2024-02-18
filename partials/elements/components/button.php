<?php

    $button;
    $href;
    $target;
    $text;

?>

<?php if ($buttonType == "button") { ?>
    <button class="button button-off--primary"><?php echo $text ?></button>
<?php } else { ?>
    <a href="<?php echo $href ?>" 
       target=<?php echo $target ?> 
       class="button button-off--primary">
    <?php echo $text ?>
    </a>
<?php } ?>