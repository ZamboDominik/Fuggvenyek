<?php
function letrehoz($n,$k,$v){
    if($n<abs($k-$v)+1){
        while (!isset($tomb) || count($tomb)<$n){
            $vel =rand($k,$v);

            if( !isset($tomb) || !in_array($vel,$tomb)){
                $tomb[] = $vel;
            }
        }
        return $tomb;
    }else{
        return false;
    }



}



function kiirat($tomb){
    $string='';
    $i = 0;
    while($i < count($tomb) ){
        echo ' '.$tomb[$i];
        $i++;
    }

}


function unio($tomb1,$tomb2){
    $tomb = $tomb1;
    $bent = false;
    foreach($tomb2 as $k => $v){
   foreach($tomb1 as $key => $value){
      if($value != $v && $bent == false) {$tomb[] = $v;$bent = true;} 
   }
    }
        return $tomb;
    }
    
function metszet($tomb1, $tomb2){
    
    foreach($tomb2 as $k => $v){
     if(bennevan($tomb1,$v)) $metszetTomb[] = $v;
    }
    return $metszetTomb;
}
Function bennevan($tomb,$be){
$eldont = false;    
foreach($tomb as $k => $v){
    if($v == $be){ $eldont = true;}
}
if($eldont==true)return true; else return false;
}


function holVan($tomb, $index){
    $tartalmaz = bennevan($tomb, $index);
        if($tartalmaz==true){
            foreach($tomb as $k =>$v){
                if($index == $v){
                    return $k;
                }
            }
        }else{return false;}
    }
function sum($tomb){

    $sum = 0;
    $i = 0;
    while($i < count($tomb)) {
        $sum += $tomb[$i];
        $i++;
    }
    return $sum;
}

function paratlanvane($tomb){
    $valami = false;
    $i = 0;
    while($i < count($tomb)) {
        if(($tomb[$i] % 2) != 0) $valami = true;
        $i++;
    }
    return $valami;
}
function Kereses($keres, $tomb){
    $i=0; $benne=false;
    while ($i<count($tomb) && !$benne){
        if($tomb[$i]==$keres){
            $benne=true;
        }
        $i++;
    }
    if ($benne){
        return $i;
    }else{
        return false;
    }
}
function megszam($tomb, $keresett){
    $db=0;
    $i=0;
    while($i < count($tomb)) {
        if($tomb[$i] > $keresett) $db++;
        $i++;
    }
    return $db;
}
function Maximum($tomb){
    $max = $tomb[0];
    $i=0;
    while($tomb[$i]>$max){
        $max = $tomb[$i];
    }
    $i++;
    return $max;
}
//másolás
function masolas($tomb){
$i = 0;
while ($i < count($tomb)) {
   $tombuj[$i] = $tomb[$i]+1;
   $i++;
}
return $tombuj;
}
//kivalogatas
function kivalogatas($tomb){
    $i = 0;
while ($i < count($tomb)) {
    if($tomb[$i] % 2 == 1) $tombuj[] = $tomb[$i];
   $i++;
}
return $tombuj;
}
function metszet2($tomb1, $tomb2){
    $i = 0;
   while($i < count($tomb2)){
     if(bennevan($tomb1,$tomb2[$i])) $metszetTomb[] = $tomb2[$i];
     $i++;
    }
    return $metszetTomb;
}
function unio2($tomb1,$tomb2){
    $i =0;
    $j = 0;
    $tomb = $tomb2;
    $bent = false;
    while($i < count($tomb2)){
        $bent = false;
   while($j < count($tomb1)){
      if($tomb2[$i] != $tomb1[$j] && $bent == false) {$tomb[] = $tomb1[$j];$bent = true;} $j++;
   }
   $i++;
    }
        return $tomb;
    }
    function szetvalogatas($tomb){
        $i=0;
        while($i<count($tomb)){
            if($tomb[$i] %2 ==1){
                $tombuj[1][] =$tomb[$i];
            }else{
                $tombuj[2][]=$tomb[$i];
            }
            $i++;
        }
    return $tombuj;
    }
    function rendezo($tomb){
    for ($i=0; $i < count($tomb); $i++) { 
        if($tomb[$i] % 2==0) $uj[] = $tomb[$i];
        else {
            $tomb[$i] *= -1;
        }
    }
    for ($i=0; $i < count($tomb); $i++) { 
        if($tomb[$i] < 0) $uj[] = ($tomb[$i] * -1);
    }
    return $uj;
    }
    function szetvalogatas2 ($tomb){
        $e=0; //elso elem
        $u=count($tomb)-1;
        while($e<$u){             
            $v = $tomb[$e];
            while($tomb[$u]> $v && $u != 0){
                $u--;
            }

            if($tomb[$e]>$tomb[$u]){
               echo 'Cserélendő elemek: '.$tomb[$e].'   ';
               echo '</br>';
               $temp=$tomb[$e]; //ideigelenes a párosak bekerülnek
               $tomb[$e]=$tomb[$u]; 
               $tomb[$u]=$temp;
            }
            $e++;
        }
        return $tomb;
    }
function szetval3($tomb){
    $e =0;
    $u = count($tomb)-1;
    $seged = $tomb[0];
    while($e<$u){
        while($e < $u && $tomb[$u]%2==1){
            $u--;
        }
        if($e < $u){
            $tomb[$e] = $tomb[$u];
            $e++;
            while($e < $u && $tomb[$e]%2 ==0){
                $e++;
            }
            if($e < $u){
                $tomb[$u] = $tomb[$e];
                $u--;
            }
        }

     }
     $tomb[$e] = $seged;
     return $tomb;
}

function cseres($tomb)
{
    for ($i=0; $i < count($tomb)-1; $i++) { 
        $seged = $tomb[$i];
        for ($j=$i+1; $j < count($tomb) ; $j++) { 
           
            if($tomb[$j]< $seged){
                $seged = $tomb[$j];
                $segedi = $j;
            }
        }
        $tomb[$segedi] = $tomb[$i];
        $tomb[$i] = $seged;
    }
    return $tomb;
}

function buborek($tomb){
    for ($i=0; $i < count($tomb); $i++) { 
        for ($j=0; $j < count($tomb)-1; $j++) { 
            $seged = 0;
            if($tomb[$j] > $tomb[$j+1]){
                $seged = $tomb[$j];
                $tomb[$j] =  $tomb[$j+1];
                $tomb[$j+1] = $seged;
            }
        }
    }
    return $tomb;
}
function buborek2($tomb){
    for (count($tomb); $i > 1 ; $i--) { 
        for ($j=0; $j < $i  -1; $j++) { 
            $seged = 0;
            if($tomb[$j] > $tomb[$j+1]){
                $seged = $tomb[$j];
                $tomb[$j] =  $tomb[$j+1];
                $tomb[$j+1] = $seged;
            }
        }
    }
    return $tomb;
}
function buborek3($tomb){
    $i = count($tomb);
    while ($i > 0) { 
        for ($j=0; $j < ($i-1); $j++) { 
            $seged = 0;
            if($tomb[$j] > $tomb[$j+1]){
                $seged = $tomb[$j];
                $tomb[$j] =  $tomb[$j+1];
                $tomb[$j+1] = $seged;
                $idx = $j+1;
            }
        }
        $i = $idx;
    }
    return $tomb;
}
function beill($tomb){
    for ($i=1; $i < count($tomb); $i++) { 
        $j = $i-1;
        while($j>-1&& $tomb[$j] > $tomb[$j+1]){
            $seged = $tomb[$j];
            $tomb[$j] = $tomb[$j+1];
            $tomb[$j+1] = $seged;
            $j--;
        }
    }
    return $tomb;
}
function beill2($tomb){
    for ($i=1; $i < count($tomb); $i++) { 
        $j = $i-1;$seged = $tomb[$i];
        while($j>-1&& $tomb[$j] > $seged){
            
            $tomb[$j+1] = $tomb[$j];
            
            
            $j--;
        }
        $tomb[$j+1] = $seged;
    }
    return $tomb;
}
function logkeres($mit,$tomb){
$e = 0;
$u = count($tomb);
do{
$k = floor(($e+$u)/2);
if($mit< $tomb[$k]){$u = $k-1;}
else if($mit> $tomb[$k]){$e = $k+1;}
}while($e < $u && $tomb[$k]!=$mit);
if($e < $u) return $k;
else return false;
}
?>