<div class="structureContainer">
<div class="structureContainer2">

<div class="structureTitle">CONTROL STRUCTURES</div>
<div class="structureSub">

<div class="bodylowAdj2">
<div class="bodylow">
<form method="GET">
  <input type="hidden" name="page" value="controlstructures" /> 
  <input type="hidden" name="control" value="switch" /> 
<p>SWITCH STATEMENTS</p>
<p>Enter your birthday:<p/>

<input type="text" name="birthyear"/>
<br />
<br />

<p><input type="submit"></p>

<?php 


if(isset($_GET['birthyear']))
{

$data = $_GET['birthyear'];

function displayForm (){

					echo '<p><font color=red>**(between 1912 and 2010 and only numbers)**</font><p/>';

}
function validateInput($data) {
    global $errorCount;
	global $retval;
    if (!is_numeric($data)) {
		$errorCount++;
        displayForm();
     }
    else if ($data < 1912 || $data > 2010) {
		$errorCount++;
        displayForm();
    }
    else { 
		$errorCount = 0;
        $retval = trim($data);
        $retval = stripslashes($retval);
        $retval = htmlspecialchars($retval, ENT_QUOTES);
    }
    return($retval);
}
validateInput($data);


if($errorCount == 0) {
   
	$result = htmlspecialchars($retval, ENT_QUOTES);



$table1 = "<img align='center' src='images/";

$table2 = ".jpg' />";

$Monkey = $table1 . "Monkey" . $table2;
$Rooster = $table1 . "Rooster" . $table2;
$Dog = $table1 . "Dog" . $table2;
$Boar = $table1 . "Boar" . $table2;
$Rat = $table1 . "Rat" . $table2;
$Ox = $table1 . "Ox" . $table2;
$Tiger = $table1 . "Tiger" . $table2;
$Rabbit = $table1 . "Rabbit" . $table2;
$Dragon = $table1 . "Dragon" . $table2;
$Snake = $table1 . "Snake" . $table2;
$Horse = $table1 . "Horse" . $table2;
$Goat = $table1 . "Goat" . $table2;

$Rat2 = array("Start Date" =>1900, "End Date" => 2020, "President" => "<p>George Washington</p><p>".$table1."gwashington.jpg'></p>");
$Ox2 = array("Start Date" =>1901, "End Date" => 2021, "President" => "<p>Barack Obama</p><p>".$table1."bobama.jpg'></p>");
$Tiger2 = array("Start Date" =>1902, "End Date" => 2022, "President" => "<p>Dwight Eisenhower</p><p>".$table1."deisenhower.jpg'></p>");
$Rabbit2 = array("Start Date" =>1903, "End Date" => 2023, "President" => "<p>John Adams</p><p>".$table1."jadams.jpg'></p>");
$Dragon2 = array("Start Date" =>1904, "End Date" => 2024, "President" => "<p>Abraham Lincoln</p><p>".$table1."alincoln.jpg'></p>");
$Snake2 = array("Start Date" =>1905, "End Date" => 2025, "President" => "<p>John Kennedy</p><p>".$table1."jfk.jpg'></p>");
$Horse2 = array("Start Date" =>1906, "End Date" => 2026, "President" => "<p>Theodore Roosevelt</p><p>".$table1."roosevelt.jpg'></p>");
$Goat2 = array("Start Date" =>1907, "End Date" => 2027, "President" => "<p>James Madison</p><p>".$table1."jmadison.jpg'></p>");
$Monkey2 = array("Start Date" =>1908, "End Date" => 2028, "President" => "<p>Harry Truman</p><p>".$table1."htruman.jpg'></p>");
$Rooster2 = array("Start Date" =>1909, "End Date" => 2029, "President" => "<p>Grover Cleveland</p><p>".$table1."gcleveland.jpg'></p>");
$Dog2 = array("Start Date" =>1910, "End Date" => 2030, "President" => "<p>George Walker Bush</p><p>".$table1."gbush.jpg'></p>");
$Pig2 = array("Start Date" =>1911, "End Date" => 2031, "President" => "<p>Ronald Reagan</p><p>".$table1."rreagan.jpg'></p>");

$AnimalSigns = array($Rat2, $Ox2, $Tiger2, $Rabbit2, $Dragon2, $Snake2, $Horse2, $Goat2, $Monkey2, $Rooster2, $Dog2, $Pig2);




            echo "<p>You were born in " . $result. ".</p>\r\n";
                $sign = $result % 12;
				
				switch ($sign) {
					
					case 0:
                    echo "<p>You were born under the sign of the <b>Monkey</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[8]["President"] ."</b><br /></p>";
					echo "<p>Years of the Monkey include: ";
						for ($i = $AnimalSigns[8]["Start Date"]; $i < $AnimalSigns[8]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
		
	
					case 1:
                    echo "<p>You were born under the sign of the <b>Rooster</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[9]["President"] ."</b><br /></p>";
					echo "<p>Years of the Rooster include: ";
						for ($i = $AnimalSigns[9]["Start Date"]; $i < $AnimalSigns[9]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
				
				
				
					case 2:
                    echo "<p>You were born under the sign of the <b>Dog</b>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[10]["President"] ."</b><br /></p>";
					echo "<p>Years of the Dog include: ";
						for ($i = $AnimalSigns[10]["Start Date"]; $i < $AnimalSigns[10]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
					
					
					
					case 3:
                    echo "<p>You were born under the sign of the <b>Boar</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[11]["President"] ."</b><br /></p>";
					echo "<p>Years of the Boar include: ";
						for ($i = $AnimalSigns[11]["Start Date"]; $i < $AnimalSigns[11]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
					
					
					
					
					case 4:
                    echo "<p>You were born under the sign of the <b>Rat</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[0]["President"] ."</b><br /></p>";
					echo "<p>Years of the Rat include: ";
						for ($i = $AnimalSigns[0]["Start Date"]; $i < $AnimalSigns[0]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
					
					
					
		            case 5:
                    echo "<p>You were born under the sign of the <b>Ox</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[1]["President"] ."</b><br /></p>";
					echo "<p>Years of the Ox include: ";

						for ($i = $AnimalSigns[1]["Start Date"]; $i < $AnimalSigns[1]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
		
		
                    case 6:
                    echo "<p>You were born under the sign of the <b>Tiger</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[2]["President"] ."</b><br /></p>";
					echo "<p>Years of the Tiger include: ";

						for ($i = $AnimalSigns[2]["Start Date"]; $i < $AnimalSigns[2]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
                    
					
                    case 7:
                    echo "<p>You were born under the sign of the <b>Rabbit</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[3]["President"] ."</b><br /></p>";
					echo "<p>Years of the Rabbit include: ";

						for ($i = $AnimalSigns[3]["Start Date"]; $i < $AnimalSigns[3]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;
                    
					
                    case 8:
                    echo "<p>You were born under the sign of the <b>Dragon</b></p>\n";		
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[4]["President"] ."</b><br /></p>";
					echo "<p>Years of the Dragon include: ";

						for ($i = $AnimalSigns[4]["Start Date"]; $i < $AnimalSigns[4]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;

					
                    case 9:
                    echo "<p>You were born under the sign of the <b>Snake</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[5]["President"] ."</b><br /></p>";
					echo "<p>Years of the Snake include: ";
						for ($i = $AnimalSigns[5]["Start Date"]; $i < $AnimalSigns[5]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;              

					
					
                    case 10:
                    echo "<p>You were born under the sign of the <b>Horse</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[6]["President"] ."</b><br /></p>";
					echo "<p>Years of the Horse include: ";
						for ($i = $AnimalSigns[6]["Start Date"]; $i < $AnimalSigns[6]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;              

					
					
                    case 11:
                    echo "<p>You were born under the sign of the <b>Goat</b></p>\n";
					echo "<br /><p>You share a sign with the president <b>" . $AnimalSigns[7]["President"] ."</b><br /></p>";
					echo "<p>Years of the Goat include: ";
						for ($i = $AnimalSigns[7]["Start Date"]; $i < $AnimalSigns[7]["End Date"]; $i+=12)
							{
								echo $i . " ";
							}
					echo "<br /><br />";
                    break;   

            }
}
}

	echo "<br /><p><a href='index.php?page=controlstructures'>Go back</a></p>";
?> 


</form>

</div>
</div>
	</div>
	</div>

	
</div>

</div>
</div>