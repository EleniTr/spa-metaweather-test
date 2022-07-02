// Given the following array `[[1,2,3,4,5], [1,2,3,4,5]]`
// write a function called arrayOps, which will produce the following outcome:
// `[0,2,6,12,20,5,12,21,32,45]`

function arrayOps($arr) {

$i=0;
$final_output = [];

foreach($arr as $value){

	foreach($value as $price){
    
       $result =  $price*$i;
       $i++;
       $final_output[] = $result;   
       
      }
    }
    
    print_r([implode(', ', $final_output)]);

}

arrayOps([[1,2,3,4,5], [1,2,3,4,5]]);


