<?php
function getdth(){
    $d=date('Y-m-d H:i:s');
    
    return  $d;
    
}
function getdt(){
    $d=date('Y-m-d');
    
    return  $d;
    
}
function daynb($date){
    $day = date('j', strtotime($date));
    return $day;
}
function dayname($date){
    $day = date('l', strtotime($date));
    return $day;
}
function deff($dl,$n){
    $d=new DateTime($dl);
    
    if($n>0){
        $r="+$n day";
        
        $d->modify($r);

        
    }
    else{
        $r="$n day";
        
        $d->modify($r);        
        
        
    }
    
    $d=$d->format('Y-m-d');
    
    return $d;

}
function position($d){
    $l=['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
    for ($i=0;$i<count($l);$i++){
        if($l[$i]==$d){
            return $i;
        }
    }
}

function getalldaysnb($d){

$x=position(dayname($d));

$l=[];
for($i=0;$i<$x;$i++){
    
    array_push($l,daynb(deff($d,$i-$x)));
}
array_push($l,daynb($d));
for($i=$x+1;$i<7;$i++){
    
    array_push($l,daynb(deff($d,$i-$x)));
}

}function getalldays($d){

    $x=position(dayname($d));
    
    $l=[];
    for($i=0;$i<$x;$i++){
        
        array_push($l,deff($d,$i-$x));
    }
    array_push($l,$d);
    for($i=$x+1;$i<7;$i++){
        
        array_push($l,deff($d,$i-$x));
    }
    
    return $l;
    }

?>