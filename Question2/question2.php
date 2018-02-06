<?php
$json = file_get_contents('https://liquid.fish/fishes.json');
$fishData = json_decode($json, true);
$fish = array();

foreach ($fishData as $val)
{
    $key = implode(",", $val['fish_caught']);    
    if(!array_key_exists($key, $fish))
    {
        $fish[$key] = 1;
    }
    else
    {
        $fish[$key] += 1;
    }	
}
arsort($fish);
$topResults = (array_slice($fish,0 ,20));
echo "The top 20 sequences of fish caught <br/>";
$i = 1;

foreach($topResults as $key => $value)
{   
    echo "#$i" . " $key was caught $value times. <br/>";
    $i++;
}

echo "All catches and counts <br/>";

foreach($fish as $key => $value)
{   
    echo "$key was caught $value times. <br/>";    
}
?>
