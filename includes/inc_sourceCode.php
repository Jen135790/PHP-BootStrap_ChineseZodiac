<div id="sourceContent" class="col-md-12">
    <?php
        if(isset($_GET['source_file'])){
            $file = stripslashes($_GET['source_file']);
            $fileDir = "./includes/$file";
            $SourceFile = file_get_contents($fileDir);
            
            echo "<h3>{$file} Source Code</h3>";
            highlight_file($fileDir);
            
        }
        else{
            echo "<p>There is no source file. Nothing can be displayed</p>";
        }
    ?>
</div>
