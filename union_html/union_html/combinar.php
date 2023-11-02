<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $headFile = $_FILES["head"]["tmp_name"];
    $bodyFile = $_FILES["body"]["tmp_name"];
    $footerFile = $_FILES["footer"]["tmp_name"];

    $head = file_get_contents($headFile);
    $body = file_get_contents($bodyFile);
    $footer = file_get_contents($footerFile);


    $unido= $head."\n".$body."\n".$footer;
    

    $html=nl2br(htmlspecialchars($unido));
    
  echo "<script>
        var combinedTxt = " . json_encode($unido) .";
        var combinedWindow = window.open('', '_blank');
        combinedWindow.document.open();
        combinedWindow.document.write('<pre>' + combinedTxt + '</pre>');
        combinedWindow.document.close();
    </script>";
   
}
?>

