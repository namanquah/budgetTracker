<?php
$html = "";
$html .= "<ol id=list data-inset=true>";
$html .=   "<li data-role=list-divider>List retrieved by Ajax</li>";
$html .=   "<li data-icon=delete>";
$html .=      "<a href=#>Element 1</a>";
$html .=   "</li>";
$html .=   "<li data-icon=delete>";
$html .=      "<a href=#>Element 2</a>";
$html .=   "</li>";
$html .=   "<li data-icon=delete>";
$html .=      "<a href=#>Element 3</a>";
$html .=   "</li>";
$html .= "</ol>";
  
echo utf8_encode ($html);
?>
