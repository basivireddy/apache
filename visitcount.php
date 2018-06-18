<?php
//get config settings
$memcache_obj = new Memcached();
$memcache =  memcached;
$memcache_obj->addServer($memcache , 11211);
$current = $memcache_obj->increment('count');

if($current === false) {

  // NOT_FOUND, so let's create it
  $memcache_obj->set('count',1); // <-- still risk of race-condition
  echo "Your the first!";

} else if ($current < 100) {

  echo "<h1>Number of persons visit the site: ",$current,"</h1>";

}
?>
