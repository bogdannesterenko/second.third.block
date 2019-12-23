<?php
    $fmatrix = trim($_POST['fmatrix']);
    $smatrix = trim($_POST['smatrix']);
    if(!$fmatrix||!$smatrix){
        die('error');
    }
    $fmatrix = explode(';',$fmatrix);
    $smatrix = explode(';', $smatrix);

    $fmatrix_rows = 0;
    foreach ($fmatrix as $val){
        $fmatrix_rows++;
    }
    $smatrix_rows = 0;
    foreach ($smatrix as $val){
        $smatrix_rows++;
    }
    $fmatrix_cols = 0;
    $smatrix_cols = 0;
    foreach ($fmatrix as $key=>$value){
        $fmatrix[$key] = explode(' ', $value);
        $count = count($fmatrix[$key]);
        if($count>$fmatrix_cols) $fmatrix_cols = $count;
    }
    foreach ($smatrix as $key=>$value){
        $smatrix[$key] = explode(' ', $value);
        $count = count($smatrix[$key]);
        if($count>$smatrix_cols) $smatrix_cols = $count;
    }
if($fmatrix[count($fmatrix)-1][0]===""){
    unset($fmatrix[count($fmatrix)-1]);
}
if($smatrix[count($smatrix)-1][0]===""){
   unset($smatrix[count($smatrix)-1]);
}
    foreach ($fmatrix as $e=>$q){
            if(count($fmatrix[$e])<$fmatrix_cols){
                for($i = count($q);$i<$fmatrix_cols;$i++){
                    $fmatrix[$e][$i] = 0;
                }
        }
    }
    foreach ($smatrix as $e=>$q){
            if(count($smatrix[$e])<$smatrix_cols){
                for($i = count($q);$i<$smatrix_cols;$i++){
                    $smatrix[$e][$i] = 0;
                }

        }
    }


    $maxcols = 0;
    if($fmatrix_cols>$smatrix_cols){
        $maxcols = 1;
    }
    else{
        $maxcols = 2;
    }
    if($maxcols==1){
        foreach($smatrix as $key=>$value){
            for($i = count($smatrix[$key])-1;$i<$fmatrix_cols;$i++){}
            $smatrix[$key][$i]=0;
        }
    }
    else{
        foreach($fmatrix as $key=>$value){
            for($i = count($fmatrix[$key])-1;$i<$smatrix_cols;$i++){}
            $fmatrix[$key][$i]=0;
        }
    }
    $maxrows = 0;
    if($smatrix_rows>$fmatrix_rows){
        for($i=count($fmatrix);$i<$smatrix_rows;$i++){
            for($e = 0; $e<$fmatrix_cols;$e++){
                $fmatrix[$i][$e] = 0;
            }
        }
    }
    else{
        for($i=count($smatrix);$i<$fmatrix_rows;$i++){
            for($e = 0; $e<$fmatrix_cols;$e++){
                $smatrix[$i][$e] = 0;
            }
        }
    }

    for($i = 0;$i<count($fmatrix);$i++){
        for($e = 0;$e<count($fmatrix[0]);$e++){
            $res[$i][$e] = $fmatrix[$i][$e] +$smatrix[$i][$e];
        }
    }
    var_dump($res);
?>