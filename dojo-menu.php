<?php
/**
 *
 *	A partir du tableau ci-dessous,
 *	reconstruisez un menu html avec
 *	rubriques et sous-rubriques
 *
 */


$a_menu = array(
	array(
		'title' => 'Accueil',
		'url'	=> '/',
		),
	array(
		'title' => 'Clans',
		'url'	=> '/clans',
		'sub'	=> array(
			array(
				'title' => 'Arryn',
				'url'	=> '/arryn',
				),	array(
				'title' => 'Baratheon',
				'url'	=> '/baratheon',
				),
			array(
				'title' => 'Greyjoy',
				'url'	=> '/greyjoy',
				),
			array(
				'title' => 'Lannister',
				'url'	=> '/lannister',
				),
			array(
				'title' => 'Starks',
				'url'	=> '/starks',
				),
			array(
				'title' => 'Targaryen',
				'url'	=> '/targaryen',
				),
			),
		),
	array(
		'title' => 'Royaumes',
		'url'	=> '/royaumes',
		'sub'	=> array(
			array(
				'title' => 'The North',
				'url'	=> '/the-north',
				),
			array(
				'title' => 'The Iron Islands',
				'url'	=> '/the-iron-islands',
				),
			array(
				'title' => 'The Riverlands',
				'url'	=> '/the-riverlands',
				),
			array(
				'title' => 'The Vale of Arryn',
				'url'	=> '/the-vale-of arryn',
				),
			array(
				'title' => 'The Westerlands',
				'url'	=> '/the-westerlands',
				),
			array(
				'title' => 'The Reach',
				'url'	=> '/the-reach',
				),	
			array(
				'title' => 'The Stormlands',
				'url'	=> '/the-stormlands',
				),	
			array(
				'title' => 'The Crownlands',
				'url'	=> '/the-crownlands',
				),		
			),
		),
	array(
		'title' => 'Saisons',
		'url'	=> '/saisons',
		'sub'	=> array(
			array(
				'title' => 'Saison 1',
				'url'	=> '/saison-1',
				),
			array(
				'title' => 'Saison 2',
				'url'	=> '/saison-2',
				),
			array(
				'title' => 'Saison 3',
				'url'	=> '/saison-3',
				),
			array(
				'title' => 'Saison 4',
				'url'	=> '/saison-4',
				),
			array(
				'title' => 'Saison 5',
				'url'	=> '/saison-5',
				),
			array(
				'title' => 'Saison 6',
				'url'	=> '/saison-6',
				),
			array(
				'title' => 'Saison 7',
				'url'	=> '/saison-7',
				),
			array(
				'title' => 'Saison 7',
				'url'	=> '/saison-7',
				),
			),
		),
	array(
		'title' => 'Bandes annonces',
		'url'	=> '/teaser',
		),
	array(
		'title' => 'Boutique',
		'url'	=> '/shop',
		),
	);

?>

<!DOCTYPE html>
<html>
<head>
	<title>DOJO Array 2 Menu</title>
</head>
<body>
	<nav></nav>	
	<?php var_dump($a_menu);?>
</body>
</html>