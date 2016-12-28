<?php
$indexUrl='1.xml';  
$reader = new XMLReader();  
$reader->open($indexUrl);  
$countElements = 0;  
 
while ($reader->read()){  
        if($reader->nodeType == XMLReader::ELEMENT){  
            $nodeName = $reader->name;  
        }
        if($reader->nodeType == XMLReader::TEXT && !empty($nodeName)){  
            switch($nodeName){  
                case 'title':
                	if ($reader -> depth == '3'){
                    $title = $reader->value;
                	}
                    break;  
                case 'link': 
                	if ($reader -> depth == '4'){ 
                    $link = $reader->value;
                    } 
                    break;  
                case 'description':  
                    $description = $reader->value;  
                    break;  
                case 'pubDate':  
                    $pubDate = $reader->value;  
                    break;  
            }  
        } 
 }  

$reader->close();

echo $title.'<br />';
echo $link.'<br />';
echo $description.'<br />';
echo $pubDate.'<br />';


?>