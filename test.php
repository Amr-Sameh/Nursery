<?php
/**
 * Created by PhpStorm.
 * User: PC - MeiR
 * Date: 3/10/2017
 * Time: 5:22 PM
 */
if(isset($_POST['upload'])) {
    echo $_FILES['filee']['tmp_name'];

}
?>
<form method="post" enctype="multipart/form-data">
<input type="file" name="filee" id="filee">
<input type="submit" value="upload" name="upload">
    </form>