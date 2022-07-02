// Create a function called isAnagram, which given two strings, returns true if they are anagrams of one another.
// For example: `Listen` is an anagram of `Silent`



function isAnagram($first, $second) {
  if(strlen($first) == strlen($second)){
    $first=strtolower($first);
    $second=strtolower($second);
    
    $second_array = str_split($second); //convert to array for iteration
    
  	foreach ($second_array as $char){
      if(strpos($first, $char) !== false){
        $flag = 'true';
      }else{
        $flag = 'false';
        break;
      }
    }
  }else{
    $flag = 'false';
  }
  return $flag;
}

echo isAnagram('Silent', 'Listen'); 