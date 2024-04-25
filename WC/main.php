<!DOCTYPE HTML>
<html>
    <head>
        <title>
            Word Counter
        </title>
    </head>
    <body>
        <div id="main">
            <form method="post">
            <h1>Word Counter</h1>
            
           <textarea name="text" class="box"></textarea><br>
            <input type="Submit" name="Submit">

            </form>
                
         <?php
            if(isset($_POST['text'])){
                
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $counter= $_POST['text'];
                $word= str_word_count($counter);
                 $wod= strlen($counter);
                echo "<p>Number of word is $word </p>";
                echo "<p>Word length with spacing is $wod </p>";
            }
            
                 echo ($_POST ['text']);
                
                }            

         
          
         ?>
        </div>
    </body>
</html>