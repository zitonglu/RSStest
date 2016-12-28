<?php
$indexUrl = 'http://limiwu.com/feed';
$reader = new XMLReader();  
$reader->open($indexUrl);
$titles = $links = $descriptions = $pubDates = array();
 
while ($reader->read()){  
        if($reader->nodeType == XMLReader::ELEMENT){  
            $nodeName = $reader->name;  
        }
        if($reader->nodeType == XMLReader::TEXT && !empty($nodeName) && $reader->depth == '4'){
            switch($nodeName){
                case 'title':
                    $title = $reader->value;
                    array_push($titles,$title);
                    break;  
                case 'link':
                    $link = $reader->value;
                    array_push($links,$link);
                    break;
                case 'description':
                    $description = $reader->value;
                    array_push($descriptions,$description);  
                    break;  
                case 'pubDate':
                    $pubDate = $reader->value;
                    array_push($pubDates,$pubDate);
                    break;  
            }  
        } 
 }  

$reader->close();

echo $title.'<br />';
echo $link.'<br />';
echo $description.'<br />';
echo $pubDate.'<br />';
echo count($titles).'<br />';
echo count($links).'<br />';
echo count($descriptions).'<br />';
echo count($pubDates);

?>