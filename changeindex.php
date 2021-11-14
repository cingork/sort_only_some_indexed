<?php
function changeSomeIndex($returnArray){
Sort=array();
Sort2=array();
$CountReplace=array();
foreach ($returnArray as $key => $row)
{
    if($row['count']) {
        $Sort[$key] = $row['count'];
        $Sort2[] = $key;
        $CountReplace[$key] = $row;
    }
}
arsort($Sort);
$z=0;
foreach ($Sort as $key=>$counted)
{
    $returnArray[$Sort2[$z]]=$CountReplace[$key];
    $z++;
}
}
