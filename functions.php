<?php


function bookTime($data){
    $booktime= $data / 6;
    $booktime = floor($booktime);
    return $booktime;
}
function movieTime($data){
    $movietime = ($data * 60)/131;
    $movietime = floor($movietime);
    return $movietime;
}
function everestTime($data){
    $evertime = $data / (10 * (7*24));
    $evertime = floor($evertime);
    if ($evertime == 1){
        echo '<p>You could have climbed Mount Everest '.$evertime.' time</p>';
    }
    elseif ($evertime > 1 || $evertime == 0){
        echo '<p>You could have climbed Mount Everest '.$evertime.' times</p>';
    }
    return $evertime;
}
function breakingTime($data){
    $brtime = $data / 61;
    $brtime = floor($brtime);
    if($brtime == 1){
        echo '<p>You could have watched the entirety of Breaking Bad '.$brtime.' time</p>';
    }
    elseif($brtime > 1 || $brtime == 0){
        echo '<p>You could have watched the entirety of Breaking Bad '.$brtime.' times</p>';
    }
    
    return $brtime;
}
function kmTime($data){
    $kmtime = ($data * 60)/10;
    $kmtime = floor($kmtime);
    
    if($kmtime == 1){
        echo '<p>You could have walked '.$kmtime.' kilometer</p>';
    }
    elseif($kmtime > 1 || $kmtime == 0){
        echo '<p>You could have walked '.$kmtime.' kilometers</p>';
    }
    return $kmtime;
}





?>