<?php


    echo("hoeveel items wilt u toevoegen aan uw bucketlist?");
    $hoeveel = readline();
    if (is_numeric($hoeveel)){

    $bucket = array("");

    for($i = 1; $i <= $hoeveel; $i++){
        echo("wat wilt u toevoegen aan uw bucketlist");
        $item = readline();
        array_push($bucket, $item);
    }

    echo("in uw bucketlist staat".PHP_EOL);

    for($a = 0; $a <= $hoeveel; $a++){
        echo("$bucket[$a]".PHP_EOL);
    }
} else {
    echo("dit is geen getal probeer het opnieuw");
}

?>