<?php

include ('class/include_dao.php');

// test
$transaction = new Transaction();
	$cities = new Citie();
  $ID = '1';
  DAOFactory::CitiesDAO()->delete($ID);
	$transaction->commit();




 ?>
