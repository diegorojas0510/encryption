<?php
require_once '../DAO/keyDAO.php';
session_start();

//echo var_dump($_POST);

$string = $_POST["mensaje"];
$option = $_POST["option"];
$new_str = "";

for ($i = 0; $i < strlen($string); $i++)
{
    $char = substr($string, $i, 1);
    $new_str = $new_str.searchLetters($char, $option);
}

//echo $new_str;


function searchLetters($letter, $option){

	if ($option == 0)
	{

		foreach (keyDAO::searchLetterDecode($letter) as $row){

     		return $row[0];

		}

	}
	else 
	{
		foreach (keyDAO::searchLetterCode($letter) as $row){

    		return $row[0];

		}

	}

	}

  
 
 header("Location: ../views/result.php");
//header("Location: ../views/result.php?string={$string}&new_str={$new_str}");
$_SESSION['new_str'] = $new_str;
$_SESSION['string'] = $string;
?>
