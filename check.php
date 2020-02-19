<?php

if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];

	if(empty($name))
	{
		echo "Name field empty!";
	}

	elseif (strlen($name)<=1)
	{
		echo "name is too short";

	}

	
	if(isset($_REQUEST['submit']))
{
	$name=$_REQUEST['name'];

	if(empty($name))
	{
		echo "Email empty!";
	}



}}
?>