<?php
$xhtml = "";
if(!empty($error)) {
    $xhtml .= "<div class='alert alert-danger'>";
    $xhtml .= "<ul>";
    foreach($error as $err) {
        $xhtml .= "<li>$err</li>";
    }
    $xhtml .= "</div>";
    $xhtml .= "</ul>";
}
echo $xhtml;
?>