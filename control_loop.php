<div class="structureContainer">
<div class="structureContainer2">

<div class="structureTitle">CONTROL STRUCTURES</div>
<br />
<p>LOOP CHINESE TABLE</p>
<br />
<div class="structureSub">

<div class="bodylowAdj2">
<div class="bodylow">
<div class="table-responsive">

<?php 

$czArray = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake", "Horse", "Ram", "Monkey", "Rooster", "Dog", "Pig" ); 


echo '<table class="table"><tr>';
$count = 0; 
    for ($count = 0; $count <=11; $count++) 
      {       
        
        echo "<th>" . $czArray[$count] . "</th>\n"; 
        
      }
   
  echo "</tr><tr>"; 
  
  for ($count = 0; $count < count($czArray); $count++) 
      { 
 
        echo "<th><img src = 'images/" . $czArray[$count] . ".jpg' alt='" . $czArray[$count] . "' width='60%' height='20%'/></th>\n"; 
 
            }
   
  echo "</tr><tr>";
   
  $year = 1912; 
  $endYear = 2013; 
  $count = 1; 
   
  for ($year; $year <= $endYear; $year++) 
        {   
          echo "<td align=center>" . $year . "</td>\n"; 
           
          if ($count % 12 == 0) 
            {
                    echo "</tr><tr>\n"; 
                  }
           $count++;
        } 
		echo '</table>';
	echo "<br /><p><a href='index.php?page=controlstructures'>Go back</a></p>";
?> 

</div>
</div>
</div>
	</div>
	</div>

	
</div>

</div>
</div>