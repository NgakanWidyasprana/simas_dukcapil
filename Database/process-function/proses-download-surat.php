<?php
    $url = $_GET['link'];

    if(File_exists($url)){
        Header('Content-Description: File Transfer');
        Header('Content-Type: Application/Octet-Stream');
        Header('Content-Disposition: Attachment; Filename="'.Basename($url).'"');
        Header('Expires: 0');
        Header('Cache-Control: Must-Revalidate');
        Header('Pragma: Public');
        Header('Content-Length: ' . Filesize($url));
        Readfile($url);
        Exit;
    }
?>