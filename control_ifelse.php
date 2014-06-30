<div class="structureContainer">
<div class="structureContainer2">

<div class="structureTitle">CONTROL STRUCTURES</div>
<div class="structureSub">

<div class="bodylowAdj2">
<div class="bodylow">
<form method="GET">
  <input type="hidden" name="page" value="controlstructures" /> 
  <input type="hidden" name="control" value="ifelse" /> 
<p>IF ELSE STATEMENTS</p>
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




            echo "<p>You were born in " . $result. ".</p>\r\n";
                $sign = $result % 12;
                if ($sign==0){
                echo "<p>You were born under the sign of the Monkey.</p><br />\n";
                echo $Monkey;
                }
                    else if ($sign==1) {
                    echo "<p>You were born under the sign of the Rooster.</p><br />\n";
                    echo $Rooster;
                    }

                    else if ($sign==2) {
                    echo "<p>You were born under the sign of the Dog.</p><br />\n";
                    echo $Dog;
                    }

                    else if ($sign==3) {
                    echo "<p>You were born under the sign of the Boar.</p><br />\n";
                    echo $Boar;
                    }

                    else if ($sign==4) {
                    echo "<p>You were born under the sign of the Rat.</p><br />\n";
                    echo $Rat;
                    }

                    else if ($sign==5) {
                    echo "<p>You were born under the sign of the Ox.</p><br />\n";
                    echo $Ox;
                    }

                    else if ($sign==6) {
                    echo "<p>You were born under the sign of the Tiger.</p><br />\n";
                    echo $Tiger;
                    }

                    else if ($sign==7) {
                    echo "<p>You were born under the sign of the Rabbit.</p><br />\n";
                    echo $Rabbit;
                    }

                    else if ($sign==8) {
                    echo "<p>You were born under the sign of the Dragon.</p><br />\n";
                    echo $Dragon;
                    }

                    else if ($sign==9) {
                    echo "<p>You were born under the sign of the Snake.</p><br />\n";
                    echo $Snake;
                    }                        

                    else if ($sign==10) {
                    echo "<p>You were born under the sign of the Horse.</p><br />\n";
                    echo $Horse;
                    }            

                    else if ($sign==11) {
                    echo "<p>You were born under the sign of the Goat.</p><br />\n";
                    echo $Goat;
                    }  


            }
}	
	echo "<br /><p><span class='linkBack'><a href='index.php?page=controlstructures'>Go back</a></p></span>";
?> 


</form>

</div>
</div>
	</div>
	</div>

	
</div>

</div>
</div>