 
 <?php
  $data = [ "名前" => "玉ねぎ", "値段" => 200, "産地" => "北海道"];
  foreach($data as $key => $data){
    echo "{$key}:{$data}", '<br>';
  }
 ?>