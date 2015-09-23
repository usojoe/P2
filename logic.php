<?php
	
# First we need our list of words. I tried to learn how to scrape from other sites but I just ran out of time trying to make it work.
	$listOfWords = Array('Jimmy','Batter','Washroom','Lovers','Minecraft','Jocks','Sandman','Awesome','Coffee','Yellow','Cracked','Wednesday');

	$numberOfWords = "";
	$passwordUnique = "";
	$errorMessage = "";


# ensure they enter in the right number of words
	if (isset($_POST["numberOfWords"]))

        {
		$numberOfWords = $_POST["numberOfWords"];
		if ($numberOfWords <= 0 OR $numberOfWords > 4)
		{
			$errorMessage = "Please enter a valid number of words!";
		      }
		else 
		{
			$numberOfWords = $_POST["numberOfWords"];
		      }
	}

# now we need a new array for the selected words
	$wordsSelected = Array();
	
# make sure that the $numberOfWords is valid. If not, return with the error message
	if ($numberOfWords <= 0 OR $numberOfWords > 4)
	{
		return;
	   }

	else
	{
		$wordsSelected = generatePassword($numberOfWords,$wordsSelected,$listOfWords);
		$passwordUnique = printPassword($wordsSelected,$passwordUnique);
	}
	
	function generatePassword($numberOfWords,$array,$listOfWords)
	{
# then we want the words picked randomly
		for ($i = 0; $i < $numberOfWords;$i++)
		{
			
			$randomNumber = rand(0, count($listOfWords) - 1);
	
#finish her up             
			array_push($array,$listOfWords[$randomNumber]);
		}
		return $array;
	}
	function printPassword($wordsSelected,$passwordUnique)
	{
		for ($i = 0; $i < count($wordsSelected); $i++)
		{
			$passwordUnique .= $wordsSelected[$i] ."";
		}	
		return $passwordUnique;
	}

	
?>
