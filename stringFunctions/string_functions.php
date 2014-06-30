<div class="structureContainer">
<div class="structureContainer2">

<div class="structureTitle">STRING FUNCTIONS</div>
<br />
<p>EMBBED WORDS</p>
<br />
<div class="structureSub">

<div class="bodylowAdj2">
<div class="bodylow">
<div class="table-responsive">

<?php

$Phrases = array("Your Chinese zodiac sign tells a lot about your personality." , "Embed PHP scripts within an XHTML document.");
$SignNames = array("Rat","Ox","Tiger","Rabbit","Dragon","Snake","Horse","Goat","Monkey","Rooster","Dog","Pig");



function BuildLetterCounts($text) {
$text = strtoupper($text);
$letter_counts = count_chars($text);
return $letter_counts;
}

function AContainsB($A, $B) {
$retval = TRUE;
$first_letter_index = ord('A');
$last_letter_index = ord('Z');
for ($letter_index = $first_letter_index;
$letter_index <= $last_letter_index;
++$letter_index) {
if ($A[$letter_index] < $B[$letter_index]) {
$retval = FALSE;
}
}
return $retval;
}

foreach ($Phrases as $Phrase) {
$PhraseArray = BuildLetterCounts($Phrase);
$GoodWords = array();
$BadWords = array();
}

foreach ($SignNames as $Word) {
$WordArray = BuildLetterCounts($Word);
if (AContainsB($PhraseArray, $WordArray))
$GoodWords[] = $Word;
else
$BadWords[] = $Word;
}

echo "<p>The following <b>Sign words</b> can be made from the letters in the phrase
<span class='italicD'>&quot;$Phrase&quot;</span>:</p>";
foreach ($GoodWords as $Word)
echo "<p>$Word";
echo "</p>\n";
echo "<p>The following <b>Sign words</b> can not be made from the letters in the phrase
<span class='italicD'>&quot;$Phrase&quot;</span>:</p>";
foreach ($BadWords as $Word)
echo "<p>$Word";
echo "</p>\n";
	echo "<br /><p><span class='linkBack'><a href='index.php?page=stringfunctions'>Go back</a></p></span>";
?>

</div>
</div>
</div>
	</div>
	</div>

	
</div>

</div>
</div>