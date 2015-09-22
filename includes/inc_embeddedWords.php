<div class="contentTexts">
<h3>Embedded Words</h3>
<?php

$Phrases = array("Your Chinese zodiac sign tells a lot about your personality.",
				"Embed PHP scripts within an XHTML document.");
$SignNames = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon",
 "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");
 
 function BuildLetterCounts($text){
 	$text = strtoupper($text);
	$letter_counts = count_chars($text);
	return $letter_counts;
 }
 
 function AContainsB($A, $B){
 	$retval = TRUE;
 	$first_letter_index = ord('A');
 	$last_letter_index = ord('Z');
 	
 	for($letter_index = $first_letter_index; $letter_index <= $last_letter_index;
		$letter_index++){
			if($A[$letter_index] < $B[$letter_index]){
				$retval = FALSE;
			}
		}
		
		return $retval;
 }

foreach($Phrases as $Phrase){
	$PhraseArray = BuildLetterCounts($Phrase);
	$GoodWords = array();
	$BadWords = array();
	
	foreach($SignNames as $Word){
		$WordArray = BuildLetterCounts($Word);
		if(AContainsB($PhraseArray, $WordArray)){
			$GoodWords[] = $Word;
		}
		else{
			$BadWords[] = $Word;
		}
	}
}


echo "<p>The following words can be made from the letters in the phrase ";
echo "<span class='bg-info'>&quot;$Phrase&quot;</span>:";
foreach($GoodWords as $Word){
	echo " $Word";
}
echo "</p>";

echo "<p>The following words can not be made from the letters in the phrase ";
echo "<span class='bg-info'>&quot;$Phrase&quot;</span>:";
foreach($BadWords as $Word){
	echo " $Word";
}
echo "</p>";
?>
</div>