<?php
	
# create an array for all the words. I tried to learn how to scrape from other sites but I just ran out of time trying to make it work.
	$wordList = Array('Jimmy', 
					  'Batter',
					  'Washroom',
					  'Lovers',
					  'Minecraft',
					  'Jocks',
					  'Sandman',
					  'Awesome',
					  'Coffee',
					  'Harvard',
                     'Cracked',
                     'Wednesday');

	$numberOfWords = "";
	$errorMessage = "";
	$passwordUnique = "";

# make sure the number selected is greater than 0 and less than or equal to 4
	if (isset($_POST["numberOfWords"]))
	{
		$numberOfWords = $_POST["numberOfWords"];
		if ($numberOfWords <= 0 OR $numberOfWords > 4)
		{
			$errorMessage = "Please enter a valid number for words!";
		}
		else 
		{
			$numberOfWords = $_POST["numberOfWords"];
		}
	}

# create an array for the selected words
	$wordsPicked = Array();
	
# make sure that the $numberOfWords is valid. If not, return with the error message
	if ($numberOfWords <= 0 OR $numberOfWords > 4)
	{
		return;
	}

	else
	{
		$wordsPicked = generatePassword($numberOfWords,$wordsPicked,$wordList);
		$passwordUnique = printPassword($wordsPicked,$passwordUnique);
	}
	
	function generatePassword($numberOfWords,$array,$wordList)
	{
# pick random numbers that match the number user inputs
		for ($i = 0; $i < $numberOfWords;$i++)
		{
			
			$randomNumber = rand(0, count($wordList) - 1);
	
# push into array
			array_push($array,$wordList[$randomNumber]);
		}
		return $array;
	}
	function printPassword($wordsPicked,$passwordUnique)
	{
		for ($i = 0; $i < count($wordsPicked); $i++)
		{
			$passwordUnique .= $wordsPicked[$i] ."";
		}	
		return $passwordUnique;
	}

	
?>