<?php
class modelManager
{
	
    protected  function dbConnect()
    {
	    try
	    {
	        $db = new PDO('mysql:host=localhost;dbname=brehat;charset=utf8', 'root', '');
	        return $db;
		}
	    catch(Exception $e)
	    {
	        die('Erreur : '.$e->getMessage());
	    }
    }
     
}