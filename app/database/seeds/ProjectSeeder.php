<?php

class ProjectSeeder extends Seeder{
	
  public function run(){
	  /* Clear tables in case we need to delete them without worrying about FK constraints */
	    
	    DB::statement('SET FOREIGN_KEY_CHECKS=0'); # Disable FK constraints 
		DB::statement('TRUNCATE itineraries');
		DB::statement('TRUNCATE trips');
		DB::statement('TRUNCATE users');
		DB::statement('TRUNCATE itinerary_user');
		  
	
	 /* Trips */
	 $parisa = new Trip;
	 $parisa->name = 'Paris Express';
	 $parisa->duration = '2';
	 $parisa->save();
	 
	 $parisb = new Trip;
	 $parisb->name = 'Paris Discover';
	 $parisb->duration = '3';
	 $parisb->save();
	 
	 $parisc = new Trip;
	 $parisc->name = 'Paris Relax';
	 $parisc->duration = '5';
	 $parisc->save();
	 

	
	
	
	 /* Itineraries */
	 
$oldparis = new Itinerary();
$oldparis->name =' Old Paris';
$oldparis->picture ='https://s3.amazonaws.com/devhouda/images/paristrip1.jpg';
$oldparis->description =' Day 1: Enjoy the historic heart of Paris:Le Marais, make sure to visit Rue St-Antoine, one of the oldest street in the city, place des Vosges square is another wonderful place to take walks and discover museums. Day 2:Montmartre and its panoramic views, is next. Enjoy the narrow medieval streets and and the Sacré Coeur';
$oldparis->trip()->associate($parisa); #associates this itinerary name with the trip name parisa
$oldparis->save();





$parisculture= new Itinerary();
$parisculture->name='Paris Culture';
$parisculture->picture='https://s3.amazonaws.com/devhouda/images/paris2.jpeg';
$parisculture->description='Day 1: Enjoy the iconic Arc de Triomphe and the Champs Elysées. Check out the side of the Arc which overlooks the Champs Elysées! Day 2: Beautiful Eiffel Tower, do not miss the view from the 3rd floor  and taking a bateau mouche in La Seine river is an excellent way to see Paris monuments. Day 3: Jardin des Tuileries is a great spot to relax and escape parisian life. Some of the beautiful parks are: Jardin du Luxembourg, Parc de Bagatelle and the Jardin des Plantes';
$parisculture->trip()->associate($parisb); #associates this itinerary name with the trip name parisb
$parisculture->save();


$parischateaux= new Itinerary();
$parischateaux->name='Paris Chateaux';
$parischateaux->picture='https://s3.amazonaws.com/devhouda/images/paris3.jpeg';
$parischateaux->description='Day 1: The Latin Quarter, a vibrant district with a lot of shops and cafes.
Day 2: The Sceaux Park, with its beautiful castle, the Chateau de Sceaux, with the relaxing canal lined with the beautiful landscape. Day 3: The Palace of Versailles and its luxurious gardens designed in the 17th century... Day 4: Saint Germain en Laye and its famous castle, which has preserved the heritage of the royal family. Day 5: Eiffel Tower, Seine, Arc de Triomphe and Champs Elysées ';
$parischateaux->trip()->associate($parisc); #associates this itinerary name with the trip name parisc
$parischateaux->save();


$user = new User;
		$user->email      = 'houdette_ben@hotmail.com';
		$user->first = 'houda';
		$user->last   = 'ben';
        $user->password   = Hash::make('chance');
    	$user->save();

	
  
	  
  }	
	
	
	
	
	
	
	
	
	
	
	
}