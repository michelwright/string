<div class="structureContainer">
<div class="structureContainer2">

<div class="structureTitle">CONTROL STRUCTURES</div>
<br />
<p>WHILE CHINESE TABLE</p>
<br />
<div class="structureSub">

<div class="bodylowAdj2">
<div class="bodylow">
<div class="table-responsive">

<?php 

	$czArray = array("Rat", "Ox", "Tiger", "Rabbit", "Dragon", "Snake","Horse", "Ram", "Monkey", "Rooster", "Dog", "Pig" ); 

	echo '<table class="table"><tr>';
   


	$count = 0; 
    while ($count <=11) 
      {       
        
        echo "<th>" . $czArray[$count] . "</th>\n"; 
        $count++;
      }
   
  echo "</tr><tr>"; 
  $count=0;
  while ($count < count($czArray))
 
      { 
 
        echo "<th><img src = 'images/" . $czArray[$count] . ".jpg' alt='" . $czArray[$count] . "' width='60%' height='20%'/></th>\n"; 
 $count++;
            }
   
  echo "</tr><tr>";
   
  $year = 1912; 
  $endYear = 2013; 
  $count = 1; 
   

  while ($year <= $endYear) 
        {   
          echo "<td align=center>" . $year . "</td>\n"; 
           $year++;
		
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