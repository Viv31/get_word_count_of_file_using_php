<?php 

$myfile = file_get_contents("test.txt");

$array = explode("\n",$myfile);

$count =  null;

if(!empty($array)){
	$i=1;
	foreach ($array as $rowarray) {
		
		$a1 = array_filter(explode(" ", trim($rowarray)));
		$count = $count + count($a1);
	}
	echo "Your Words Count is <b>" . $count ."</b><br>";


}

require("doc2txt.class.php");

$docObj = new Doc2Txt("test.docx");
$txt = $docObj->convertToText();
$All_count =  str_word_count($txt);
echo "Words are " .$All_count;

?>