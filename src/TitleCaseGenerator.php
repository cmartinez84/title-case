<?php

class TitleCaseGenerator
{
  public $smallWords;
  public $appleWords;
  function __construct(){
    $this->smallWords = array(
    'of','a','the','and','an','or','nor','but','is','if','then','else','when',
    'at','from','by','on','off','for','in','out','over','to','into','with'
    );
    $this->appleWords = array("iphone", "ipad", "ipod", "ishuffle");
  }
  function makeTitleCase($input_title)
  {
    $input_title = strtolower($input_title);
    $input_array_of_words = explode(" ", $input_title);
    $output_titlecased = array();
    foreach ($input_array_of_words as $index=>$word) {
      if ((in_array($word, $this->smallWords)) && $index != 0){
        array_push($output_titlecased, $word);
      }
      elseif(substr($word, 0, 2) == "mc"){
        $third_letter = strtoupper(substr($word, 2, 1));
        $word = ucfirst(substr_replace($word, $third_letter, 2, 1));
        array_push($output_titlecased, $word);
      }
      elseif(in_array($word, $this->appleWords)){
        $second_letter = strtoupper(substr($word,1,1));
        $word = substr_replace($word, $second_letter, 1, 1);
        array_push($output_titlecased, $word);
      }
      else{
        array_push($output_titlecased, ucfirst($word));
      }
    }
    return implode(" ", $output_titlecased);
  }
}

?>
