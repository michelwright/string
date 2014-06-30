<div class="structureContainer">
<div class="structureContainer2">

<div class="structureTitle">STRING FUNCTIONS</div>
<br />
<p>SIMILAR WORDS</p>
<br />
<div class="structureSub">

<div class="bodylowAdj2">
<div class="bodylow">
<div class="table-responsive">

<?php 
date_default_timezone_set('America/New_York');
$SignNames = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Goat", "Monkey", "Rooster", "Dog", "Pig");


		$LevenshteinSmallest = 999999;
		$SimilarTextLargest = 0;
for ($i=0; $i<11; ++$i) {
for ($j=$i+1; $j<12; ++$j) {
	
		$LevenshteinValue = levenshtein($SignNames[$i], $SignNames[$j]);
		if ($LevenshteinValue < $LevenshteinSmallest) {
				$LevenshteinSmallest = $LevenshteinValue;
				$LevenshteinWord1 = $SignNames[$i];
				$LevenshteinWord2 = $SignNames[$j];
						}
						
$SimilarTextValue = similar_text($SignNames[$i], $SignNames[$j]);

if ($SimilarTextValue > $SimilarTextLargest) { 
		$SimilarTextLargest = $SimilarTextValue;
		$SimilarTextWord1 = $SignNames[$i];
		$SimilarTextWord2 = $SignNames[$j];
				}
		}
		}
echo "<p>The levenshtein() function has determined that
<b>&quot;$LevenshteinWord1&quot;</b> and
<b>&quot;$LevenshteinWord2&quot;</b> are the most
similar names among Chinese Signs.</p>\n";
echo "<p>The similar_text() function has determined that
<b>&quot;$SimilarTextWord1&quot;</b>
and <b>&quot;$SimilarTextWord2&quot;</b> are the most
similar names among Chinese Signs.</p>\n"; 

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