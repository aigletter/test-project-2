<?php

include 'function.php';
$token = generateToken();

?>

<form action="/security/csrf/action.php">
    <input type="hidden" name="token" value="<?php echo $token ?>">
    <input name="to">
    <br>
    <input name="sum">
    <br>
    <input type="submit">
</form>