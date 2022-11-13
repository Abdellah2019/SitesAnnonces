<?php
	include '../include/database.php';
	$db;
	$q=$db->prepare("SELECT * from inscription");
	$q->execute();
	#$result=$q->fetch();
	$xml=new XMLWriter();
	//$xml->openURI("php://output");
	$xml->openURI('data_clients.xml');
	$xml->startDocument();
	$xml->setIndent(true);
	$xml->startElement('clients');

		while($row=$q->fetch()){
			$xml->startElement('client');
				$xml->startElement('prenom');
				$xml->writeRaw($row['prenom']);
				$xml->endElement();
			$xml->endElement();
		}
	$xml->endElement();
	header('Content-type:text/xml');
	//$xml->save("data_clients.xml");
	$xml->flush();
	





?>