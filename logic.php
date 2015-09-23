<?php


	//Retrieve word number option selected. if not selected, default to 5
	$wordnumber = (empty($_POST["word_number"]) ? 5 : $_POST["word_number"]);

	//default the word number option html string
  $wordnumberoption = "";
  //Construct word number option html string
	for($i= 1; $i<10; $i++){
		$wordnumberoption.= "<option value=".$i ;
		//set the option to be selected if it is the word number chosen
		if ($i == $wordnumber) $wordnumberoption.= " selected ";
    $wordnumberoption.= ">".$i."</option>";
	}

	//default checkbox html state
	$addnumber = "";
	$addsymbol = "";
	$changeuppercase = "";

	//default result of generated password value
	$result = "";

  //retrieve wordsource file into an array
	if($wordsource = file("wordsource.txt", FILE_IGNORE_NEW_LINES)) {
		//construct result string based on word number option selection
		for ($i = 0; $i < $wordnumber; $i++) {
			$word = $wordsource[rand(0, 4999)];
			//make all cases lower if the checkbox option is selected
			if (isset($_POST["change_uppercase"])) {
				$word = strtoupper($word);
				//sustain the checkbox value to display on the page
				$changeuppercase = "checked";
			}
			//add hyphens to the result string if the word is not the first one generated
			if ($i != 0) {
				$result .= ("-".$word);
			} else {
				$result .= $word;
			}

		}
		//add a number if checkbox is checked
		if(isset($_POST["add_number"])) {
				$result .= rand(0, 9);
				//sustain the checkbox value to display on the page
				$addnumber = "checked";
		}
		//add a symbol if the corresponding checkbox is checked
		if(isset($_POST["add_symbol"])) {
				//preset an array of symbols to choose when user wants to add a symbol to the password
				$symbols = array('!', '@', '#', '$', '%','^', '&', '*','+');
				$result .= $symbols[array_rand($symbols,1)];
				//sustain the checkbox value to display on the page
				$addsymbol = "checked";
		}

	}
?>
