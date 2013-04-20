<?php

/*
 * Editor server script for DB table Songs
 * Automatically generated by http://editor.datatables.net/generator
 */

include( "include/db.php" );

$editor = new DTEditor(
	$db, // DB resource
	'Songs', // DB table
	'sID', // Primary key
	'row_', // ID prefix to add to the TR rows (makes it valid and unique)
	array( // Fields
		new DTField( array(
			"name" => "Name",
			"dbField" => "Title",
			"validator" => 'DTValidate::none',
			"opts" => array(
				"required" => true
			)
		) ),
		new DTField( array(
			"name" => "Time",
			"dbField" => "Time",
			"validator" => 'DTValidate::none'
		) ),
		new DTField( array(
			"name" => "Artist",
			"dbField" => "Artist",
			"validator" => 'DTValidate::none',
			"opts" => array(
				"required" => true
			)
		) ),
		new DTField( array(
			"name" => "Album",
			"dbField" => "Album",
			"validator" => 'DTValidate::none'
		) ),
		new DTField( array(
			"name" => "Genre",
			"dbField" => "Genre",
			"validator" => 'DTValidate::none'
		) ),
		new DTField( array(
			"name" => "Plays",
			"dbField" => "Plays",
			"validator" => 'DTValidate::none'
		) ),
		new DTField( array(
			"name" => "Video",
			"dbField" => "Video",
			"validator" => 'DTValidate::none',
			"opts" => array(
				"required" => true
			)
		))
	)
);

// The "process" method will handle data get, create, edit and delete 
// requests from the client
echo json_encode( $editor->process($_POST) );

