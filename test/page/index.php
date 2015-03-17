<?php
View::block("a", function () {
?>
    I'm block A
<?php
});
?>
<?php
View::block("b", function() {
?>
    I'm block B
<?php
});
?>
<?php View::layout(__DIR__ . '/layout.php');
