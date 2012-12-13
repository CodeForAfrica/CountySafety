<?php
        
        $rss_tags = array(
                'title',
                'link',
                'guid',
                'comments',
                'description',
                'pubDate',
                'category',
        );
        $rss_item_tag = 'item';
        $rss_url = 'http://www.standardmedia.co.ke/rss/crime.php';
        
        $rssfeed = rss_to_array($rss_item_tag,$rss_tags,$rss_url);
        
       //echo '<pre>';
       // print_r($rssfeed);

        function rss_to_array($tag, $array, $url) {
                $doc = new DOMdocument();
                $doc->load($url);
                $rss_array = array();
                $items = array();
                foreach($doc->getElementsByTagName($tag) AS $node) {    
                        foreach($array AS $key => $value) {
                                $items[$value] = $node->getElementsByTagName($value)->item(0)->nodeValue;
                        }
                        array_push($rss_array, $items);
                }
                return $rss_array;
        }
        
        $total =1;
       ?>
        <style type='text/css'>
        a{
        text-decoration:none;
        color:red;
        }
        </style>
       
        <?php
        foreach($rssfeed as $item)
        {
        	if($total<10){
        	echo '<div style="margin-bottom:5px;"><a href="'.$item['link'].'" target="_blank">'.$item['title'].'</a>';
        	echo '<div style="font-size:0.7em">'.$item['pubDate'].'</div>';
        	echo $item['description'].'</div>';
        	$total++;
        	}
        }
        
?>