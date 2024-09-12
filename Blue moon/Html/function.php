<?php
//Sanitization
  function in($d){
    $d=trim($d); //clear space and specific character from begining and end
    $d=stripslashes($d); //remove back slash
    $d=htmlspecialchars($d); //changes to html special character  example, `<` (less than) becomes `&lt;`
    $d=strip_tags($d); //used to remove html and php tags from string leaving only the text content: $html = "<p>This is <strong>HTML</strong> content.</p>";
    return $d;
}
function conv($a){
    $a=str_split($a);
    return $a;
}

?>