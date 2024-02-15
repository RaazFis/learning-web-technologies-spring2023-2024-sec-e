<html>
    <head>
        <title>HTML from</title>title></title>
    </head>
    <body>
        <from method=""action="" entype="">
            Length:<input type="number" name="length" value=""><br>
            Width:<input type="number" name="width" value=""><br>
            <h1> </h1>
            <input type="submit" name="submit" value="Submit"
        
        
        
        </from>"
    </body>
    </html>

    <?php
    $length =$_REQUEST['length'];
    $width=$_REQUEST['width'];
    \echo'Area : '.$width*$length ."<br>";
    echo 'Perimeter : ' . 2*($length+$width);

    />