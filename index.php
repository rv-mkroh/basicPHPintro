<?php echo 'hello, world.'; 
  
  
  $testArray = array('one', 'two', 'three', 'four');
  
  foreach($testArray as $item) {
    echo '<br />'.$item;
  }
  
  while($testArray) {
    echo '<br />' . $$testArray[0];
  }
  
?>