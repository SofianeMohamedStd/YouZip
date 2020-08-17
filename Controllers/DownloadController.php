<?php
$link = null;

if (isset($_GET['link']) && !empty($_GET['link'])) {
        $link = 'http://localhost/www/YouZip/Upload/' . $_GET['link'];
    
    $message = ' <h3 class="register-heading ">click to download the file</h3>
    <form method="POST" class="hiddenForm" id="validLink">
    <div class="row register-form justify-content-center">
      
        
        <input  type="hidden" name="validLink" value="' . $link . '" />
        <button class="btn btn-primary" type="submit" onclick="window.open(\'' . $link . '\')" class="btn-download">Cliquez ici</button>
    </div>
 </form> ';
}
if (isset($_POST['validLink']) && !empty($_POST['validLink'])) {
    $message = ' <h3 class="register-heading">see you soon for another file</h3> ';
}
require_once('Views/downloadView.php');

