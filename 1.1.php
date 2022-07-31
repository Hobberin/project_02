<?php
    include
   echo 'ul';
   for($i=0;$i<count($arr);$i++){
    echo'li';
    echo'<a href = "'.$arr[i]['href'].'">点我'.$arr[$i]['name'].'</a>';
    echo'<img src = "'.$arr[$i]['path'].'" alt="">';
    echo'<span>'.$arr[$i]['name'].'</span>';
    echo'</li>';
   }
   echo '</ul>';
?>