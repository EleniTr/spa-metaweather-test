/*
Let us define a precedence string as follows:
"F>E" means that in the word, the letter "F" comes before the letter "E".

The objective of this test is to implement the find_the_word function.
When passed a list of precedences, the function will return the word associated to the input.
There are no duplicate letters in the word.

For example:
------------

findTheWord(["G>W","W>F"]) should return GWF
findTheWord(["E>R","R>S","S>O","O>N","P>E"]) should return PERSON

*/


function findTheWord($letters) {
  $final_word = "";
  for($i=0;$i<count($letters);$i++){

    //letter isolation
    $word = explode(">",$letters[$i]);
    $left_letter = $word[0]; 
    $right_letter =  $word[1];
       
    if($final_word!=""){

      if( strpos($final_word, $left_letter) ){
        $final_word =  $final_word.$right_letter;
      }else{ 
        //find the position to insert the new letter
        $pos = strpos($final_word, $right_letter);
        $final_word = substr_replace($final_word, $left_letter,$pos, 0);
      }
    } else{
      $final_word =  $final_word.$left_letter.$right_letter;
    }
  }
  echo $final_word;
}
