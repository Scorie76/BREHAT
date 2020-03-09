<?php
class modelManager
{
	
    protected  function dbConnect()
    {
	    try
	    {
	        $db = new PDO('mysql:host=db5000119879.hosting-data.io;dbname=dbs114525', 'dbu211369', 'Golf7sw122/');
	        return $db;
		}
	    catch(Exception $e)
	    {
	        die('Erreur : '.$e->getMessage());
	    }
    }
     
}