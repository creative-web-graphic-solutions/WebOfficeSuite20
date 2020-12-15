<?php
 // INCLUDE THE phpToPDF.php FILE
 require("phpToPDF.php"); 
 
 // GENERATE PDF FILE FROM SPECIFIED URL, SAVES TO CURRENT DIRECTORY ('/')
 phptopdf_url('http://creativewebgraphic.com/Admin/Registration/Invoice/index.php','', 'creativewebgraphic.pdf');
  
 // OPTIONAL - PUT A LINK TO DOWNLOAD THE PDF YOU JUST CREATED
 echo ("<a href='creativewebgraphic.pdf'>Download Your PDF</a>");
?> 