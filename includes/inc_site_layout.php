<div id="siteLayoutText" class="col-md-12">
   <?php
        $fileName = "texts/inc_site_layout.txt";
        $fileHandle = fopen($fileName, 'r');

        //Opening and reading a file:
        if(!$fileHandle){
            echo "<p>Unable to open file for reading!</p>";
        }
        else{
            echo file_get_contents($fileName);
        }

        fclose($fileHandle);
    ?> 
</div>
