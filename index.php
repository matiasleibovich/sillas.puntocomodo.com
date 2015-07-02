<?php

	if ($_POST)
	{
		header("Content-type: text/plain");
		print_r($_POST);
		exit();
	}
		
	$_zonas = array(
		'cordoba'				=> array('nombre' => 'Cordoba',				'empresas' => 14, 'prefijo' => '(0351) ',	'id' => 22,	),
		'buenos-aires'			=> array('nombre' => 'Buenos Aires',		'empresas' => 27, 'prefijo' => '(011) ',	'id' => 21, ),
		'tu-zona'				=> array('nombre' => 'tu zona',				'empresas' => 37, 'prefijo' => '(011) ',	'id' => 21,	),
	);

	if (!isset($_zona)) $_zona = 'tu-zona';
	if (!isset($_zonas[$_zona])) $_zona = 'tu-zona';

	$_pasos = array(
		// PASO 1 - TIPO
		array(
			'lead' => 'Cansado de tener que comprar s&oacute;lo lo que te quieren vender? <br/> <strong>Arm&aacute; tus muebles como m&aacute;s te guste, y te lo enviamos en 3 d&iacute;as</strong>',
			'pregunta' => '¿Qué tipo de silla estás buscando?',
			'titulo' => 'Tipo de Asciento',
			'tipo' => 'set',
			'id' => 1,
			'campo_id' => 1,
			'opciones' => array(
				array( 'id' => 'EJE',	'label' => 'Ejecutivo',				'img' => '/img/puntocomodo/103_foto2.jpg',				'valor' => 'Ejecutivo' ),
				array( 'id' => 'PRO',	'label' => 'Profesional',			'img' => '/img/puntocomodo/40_foto2.jpg',				'valor' => 'Profesional' ),
				array( 'id' => 'HOG',	'label' => 'Hogar',					'img' => '/img/puntocomodo/Paulin_012.jpg',				'valor' => 'Hogar' ),
				array( 'id' => 'AUD',	'label' => 'Auditorio',				'img' => '/img/puntocomodo/73_foto2.jpg',				'valor' => 'Auditorio' ),
				array( 'id' => 'RCP',	'label' => 'Recepcion',				'img' => '/img/puntocomodo/frida_tandem_cromo11.jpg',	'valor' => 'Recepcion' ),
			),
			'cta' => '<strong>Paso 2: Seleccionar Modelo &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></strong>',
		),

		// PASO 2 - TAMAÑO
		array(
			'pregunta' => 'Eleg&iacute; el modelo que m&aacute;s te guste',
			'titulo' => 'Modelo',
			'tipo' => 'set',
			'placeholder' => 'Modelo',
			'id' => 2,
			'campo_id' => 2,
			'opciones' => array(
				// EJE = Ejecutivo
				array( 'id' => 'Jazz',			'label' => 'Jazz',			'img' => '/img/puntocomodo/9_foto2.jpg',		'valor' => 'Jazz',			'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Verona',		'label' => 'Verona',		'img' => '/img/puntocomodo/15_foto2.jpg',		'valor' => 'Verona',		'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Trento',		'label' => 'Trento',		'img' => '/img/puntocomodo/103_foto2.jpg',		'valor' => 'Trento',		'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Ethika',		'label' => 'Ethika',		'img' => '/img/puntocomodo/27_foto2.jpg',		'valor' => 'Ethika',		'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Kouros600',		'label' => 'Kouros 600',	'img' => '/img/puntocomodo/19_foto2.jpg',		'valor' => 'Kouros 600',	'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Kouros300',		'label' => 'Kouros 300',	'img' => '/img/puntocomodo/22_foto2.jpg',		'valor' => 'Kouros 300',	'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Eden',			'label' => 'Edén',			'img' => '/img/puntocomodo/28_foto2.jpg',		'valor' => 'Edén',			'class_name' => 'EJE TELA CON_AP'),
				array( 'id' => 'Ellise',		'label' => 'Ellise',		'img' => '/img/puntocomodo/8_foto2.jpg',		'valor' => 'Ellise',		'class_name' => 'EJE TELA CON_AP'),				
				// PRO = Profesional
				array( 'id' => 'Citiz',			'label' => 'Citiz',			'img' => '/img/puntocomodo/162_foto2.jpg',		'valor' => 'Citiz',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'India',			'label' => 'India',			'img' => '/img/puntocomodo/168_foto2.jpg',		'valor' => 'India',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Riota',			'label' => 'Riota',			'img' => '/img/puntocomodo/40_foto2.jpg',		'valor' => 'Riota',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Cyrene',		'label' => 'Cyrene',		'img' => '/img/puntocomodo/2_foto2.jpg',		'valor' => 'Cyrene',		'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'SP',			'label' => 'SP',			'img' => '/img/puntocomodo/49_foto2.jpg',		'valor' => 'SP',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Athina',		'label' => 'Athina',		'img' => '/img/puntocomodo/6_foto2.jpg',		'valor' => 'Athina',		'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Roby',			'label' => 'Roby',			'img' => '/img/puntocomodo/57_foto2.jpg',		'valor' => 'Roby',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Rudy',			'label' => 'Rudy',			'img' => '/img/puntocomodo/59_foto2.jpg',		'valor' => 'Rudy',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Tyson',			'label' => 'Tyson',			'img' => '/img/puntocomodo/65_foto2.jpg',		'valor' => 'Tyson',			'class_name' => 'PRO TELA CON_AP'),
				array( 'id' => 'Diva',			'label' => 'Diva',			'img' => '/img/puntocomodo/63_foto2.jpg',		'valor' => 'Diva',			'class_name' => 'PRO TELA CON_AP'),
				// HOG = Hogar
				array( 'id' => 'Verona_Hogar',	'label' => 'Verona Hogar',	'img' => '/img/puntocomodo/138_foto2.jpg',		'valor' => 'Verona Hogar',	'class_name' => 'HOG TELA CON_AP'),
				array( 'id' => 'Athina_Hogar',	'label' => 'Athina Hogar',	'img' => '/img/puntocomodo/137_foto2.jpg',		'valor' => 'Athina Hogar',	'class_name' => 'HOG TELA CON_AP'),
				array( 'id' => 'Tyson_Hogar',	'label' => 'Tyson Hogar',	'img' => '/img/puntocomodo/134_foto2.jpg',		'valor' => 'Tyson Hogar',	'class_name' => 'HOG TELA CON_AP'),
				array( 'id' => 'Nina_Hogar',	'label' => 'Nina Hogar',	'img' => '/img/puntocomodo/Nina_aqua1.jpg',		'valor' => 'Nina Hogar',	'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Jim_Hogar',		'label' => 'Jim Hogar',		'img' => '/img/puntocomodo/145_foto2.jpg',		'valor' => 'Jim Hogar',		'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Frida_Hogar',	'label' => 'Frida Hogar',	'img' => '/img/puntocomodo/frida_gris.jpg',		'valor' => 'Frida Hogar',	'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'One_Hogar',		'label' => 'One Hogar',		'img' => '/img/puntocomodo/140_foto2.jpg',		'valor' => 'One Hogar',		'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Luanda_Hogar',	'label' => 'Luanda Hogar',	'img' => '/img/puntocomodo/146_foto2.jpg',		'valor' => 'Luanda Hogar',	'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Malba_Hogar',	'label' => 'Malba Hogar',	'img' => '/img/puntocomodo/153_foto2.jpg',		'valor' => 'Malba Hogar',	'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Milo_Hogar',	'label' => 'Milo Hogar',	'img' => '/img/puntocomodo/milo_rojo.jpg',		'valor' => 'Milo Hogar',	'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Siena_Hogar',	'label' => 'Siena Hogar',	'img' => '/img/puntocomodo/Siena_blanca1.jpg',	'valor' => 'Siena Hogar',	'class_name' => 'HOG COLOR SIN_AP'),
				array( 'id' => 'Paulin_Hogar',	'label' => 'Paulin Hogar',	'img' => '/img/puntocomodo/Paulin_012.jpg',		'valor' => 'Paulin Hogar',	'class_name' => 'HOG TELA SIN_AP'),
				// AUD = Auditorio
				array( 'id' => 'Fly',			'label' => 'Fly',			'img' => '/img/puntocomodo/69_foto2.jpg',		'valor' => 'Fly',			'class_name' => 'AUD TELA SIN_AP'),
				array( 'id' => 'AP',			'label' => 'AP',			'img' => '/img/puntocomodo/73_foto2.jpg',		'valor' => 'AP',			'class_name' => 'AUD TELA SIN_AP'),
				array( 'id' => 'Prisma',		'label' => 'Prisma',		'img' => '/img/puntocomodo/Prisma.jpg',			'valor' => 'Prisma',		'class_name' => 'AUD TELA SIN_AP'),
				array( 'id' => 'Nina',			'label' => 'Nina',			'img' => '/img/puntocomodo/Nina_fija_todas.jpg','valor' => 'Nina',			'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'One',			'label' => 'One',			'img' => '/img/puntocomodo/130_foto2.jpg',		'valor' => 'One',			'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'Jim',			'label' => 'Jim',			'img' => '/img/puntocomodo/114_foto2.jpg',		'valor' => 'Jim',			'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'Frida',			'label' => 'Frida',			'img' => '/img/puntocomodo/frida_tandem_cromo11.jpg', 'valor' => 'Frida',	'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'Opera',			'label' => 'Opera',			'img' => '/img/puntocomodo/op_tandem_curvo.jpg','valor' => 'Opera',			'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'Malba',			'label' => 'Malba',			'img' => '/img/puntocomodo/122_foto2.jpg',		'valor' => 'Malba',			'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'Luanda',		'label' => 'Luanda',		'img' => '/img/puntocomodo/112_foto2.jpg',		'valor' => 'Luanda',		'class_name' => 'AUD COLOR SIN_AP'),
				array( 'id' => 'Siena',			'label' => 'Siena',			'img' => '/img/puntocomodo/Siena_roja-21.jpg',	'valor' => 'Siena',			'class_name' => 'AUD COLOR SIN_AP'),
				// RCP = Recepcion
				array( 'id' => 'Tandem_Bari',	'label' => 'Tandem Bari',	'img' => '/img/puntocomodo/Bari_tandem3.jpg',			'valor' => 'Tandem Bari',	'class_name' => 'RCP TELA SIN_AP'),
				array( 'id' => 'Tandem_Nina',	'label' => 'Tandem Nina',	'img' => '/img/puntocomodo/Nina_rojo_tandem_cromo.jpg',	'valor' => 'Tandem Nina',	'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Tandem_Frida',	'label' => 'Tandem Frida',	'img' => '/img/puntocomodo/frida_tandem_cromo11.jpg',	'valor' => 'Tandem Frida',	'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Tandem_Luanda',	'label' => 'Tandem Luanda',	'img' => '/img/puntocomodo/109_foto2.jpg',				'valor' => 'Tandem Luanda',	'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Tandem_Opera',	'label' => 'Tandem Opera',	'img' => '/img/puntocomodo/op_tandem_curvo2.jpg',		'valor' => 'Tandem Opera',	'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Tandem_AP',		'label' => 'Tandem AP',		'img' => '/img/puntocomodo/95_foto2.jpg',				'valor' => 'Tandem AP',		'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Tandem_Athina',	'label' => 'Tandem Athina',	'img' => '/img/puntocomodo/97_foto2.jpg',				'valor' => 'Tandem Athina',	'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Butacon',		'label' => 'Butacon',		'img' => '/img/puntocomodo/33_foto2.jpg',				'valor' => 'Butacon',		'class_name' => 'RCP TELA SIN_AP'),
				array( 'id' => 'Milo',			'label' => 'Milo',			'img' => '/img/puntocomodo/milo_negro.jpg',				'valor' => 'Milo',			'class_name' => 'RCP COLOR SIN_AP'),
				array( 'id' => 'Paulin',		'label' => 'Paulin',		'img' => '/img/puntocomodo/Paulin_06.jpg',				'valor' => 'Paulin',		'class_name' => 'RCP TELA SIN_AP'),
				array( 'id' => 'Bari',			'label' => 'Bari',			'img' => '/img/puntocomodo/Bari_5.jpg',					'valor' => 'Bari',			'class_name' => 'RCP TELA SIN_AP'),
			),
			'cta' => '<strong>Paso 3: Revestimientos, Telas y Colores &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></strong>',
		),

		// PASO 3 - REVESTIMIENTO
		array(
			'pregunta' => 'Qu&eacute; tipo de Revestimiento te gustar&iacute;a?',
			'titulo' => 'Revestimientos, Telas y Colores',
			'tipo' => 'set',
			'id' => 3,
			'campo_id' => 5,
			'opciones' => array(
				// INDEX de Opciones de Revestimiento
				array( 'id' => 'Tela_Millenium',				'label' => 'Tela Millenium',			'img' => '/img/puntocomodo/tela_millenium.png',						'valor' => 'Tela Millenium',					'class_name' => 'TELA Millenium REV_INDEX' ),
				array( 'id' => 'Tela_Smooth',					'label' => 'Tela Smooth',				'img' => '/img/puntocomodo/tela_smooth.png',						'valor' => 'Tela Smooth',						'class_name' => 'TELA Smooth REV_INDEX' ),
				array( 'id' => 'Tela_Ecocuer',					'label' => 'Tela Ecocuer',				'img' => '/img/puntocomodo/tela_ecocuer.png',						'valor' => 'Tela Ecocuer',						'class_name' => 'TELA Ecocuer REV_INDEX' ),
				array( 'id' => 'Tela_Talampaya',				'label' => 'Tela Talampaya',			'img' => '/img/puntocomodo/tela_talampaya.png',						'valor' => 'Tela Talampaya',					'class_name' => 'TELA Talampaya REV_INDEX' ),
				array( 'id' => 'Tela_Calafate',					'label' => 'Tela Calafate',				'img' => '/img/puntocomodo/tela_calafate.png',						'valor' => 'Tela Calafate',						'class_name' => 'TELA Calafate REV_INDEX' ),
				array( 'id' => 'Tela_Marathon',					'label' => 'Tela Marathon',				'img' => '/img/puntocomodo/tela_marathon.png',						'valor' => 'Tela Marathon',						'class_name' => 'TELA Marathon REV_INDEX' ),
				array( 'id' => 'Tela_Nativa',					'label' => 'Tela Nativa',				'img' => '/img/puntocomodo/tela_nativa.png',						'valor' => 'Tela Nativa',						'class_name' => 'TELA Nativa REV_INDEX' ),
				array( 'id' => 'Tela_Toledo',					'label' => 'Tela Toledo',				'img' => '/img/puntocomodo/tela_toledo.png',						'valor' => 'Tela Toledo',						'class_name' => 'TELA Toledo REV_INDEX' ),
				array( 'id' => 'Tela_Red',						'label' => 'Tela Red',					'img' => '/img/puntocomodo/tela_red.png',							'valor' => 'Tela Red',							'class_name' => 'TELA Red REV_INDEX' ),
				array( 'id' => 'Tela_Jacquard',					'label' => 'Tela Jacquard',				'img' => '/img/puntocomodo/tela_jacquard.png',						'valor' => 'Tela Jacquard',						'class_name' => 'TELA Jacquard REV_INDEX' ),
				array( 'id' => 'Tela_Aymara',					'label' => 'Tela Aymara',				'img' => '/img/puntocomodo/tela_aymara.png',						'valor' => 'Tela Aymara',						'class_name' => 'TELA Aymara REV_INDEX' ),
				array( 'id' => 'Tela_Araucana',					'label' => 'Tela Araucana',				'img' => '/img/puntocomodo/tela_araucana.png',						'valor' => 'Tela Aymara',						'class_name' => 'TELA Araucana REV_INDEX' ),
				array( 'id' => 'Colores_Lisos',					'label' => 'Colores Lisos',				'img' => '/img/puntocomodo/colores_lisos.png',						'valor' => 'Colores Lisos',						'class_name' => 'TELA COLOR REV_INDEX' ),

				// Opciones de Revestimiento Detalladas
				array( 'id' => 'Millenium_Negro',				'label' => 'Millenium Negro',			'img' => '/img/puntocomodo/tela_millenium_negro.png',				'valor' => 'Millenium Negro',					'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Blanco',				'label' => 'Millenium Blanco',			'img' => '/img/puntocomodo/tela_millenium_blanco.png',				'valor' => 'Millenium Blanco',					'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Azul_4043',			'label' => 'Millenium Azul',			'img' => '/img/puntocomodo/tela_millenium_azul4043.png',			'valor' => 'Millenium Azul 4043',				'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Beige_Lotus_6088',	'label' => 'Millenium Beige Lotus',		'img' => '/img/puntocomodo/tela_millenium_beige_lotus_6088.png',	'valor' => 'Millenium Beige Lotus 6088',		'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Azul_Fosco_4076',		'label' => 'Millenium Azul Fosco',		'img' => '/img/puntocomodo/tela_millenium_azul_fosco_4076.png',		'valor' => 'Millenium Azul Fosco 4076',			'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Amarillo_5425',		'label' => 'Millenium Amarillo',		'img' => '/img/puntocomodo/tela_millenium_amarillo_5425.png',		'valor' => 'Millenium Amarillo 5425',			'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Verde_Aqua_5093',		'label' => 'Millenium Verde Aqua',		'img' => '/img/puntocomodo/tela_millenium_verde_aqua_5093.png',		'valor' => 'Millenium Verde Aqua 5093',			'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Beige_Pessego_6122',	'label' => 'Millenium Beige Pessego',	'img' => '/img/puntocomodo/tela_millenium_beige_pessego_6122.png',	'valor' => 'Millenium Beige Pessego 6122',		'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Rojo_8006',			'label' => 'Millenium Rojo',			'img' => '/img/puntocomodo/tela_millenium_rojo_8006.png',			'valor' => 'Millenium Rojo 8006',				'class_name' => 'TELA Millenium REV_OPCION' ),
				array( 'id' => 'Millenium_Marron_7065',			'label' => 'Millenium Marron',			'img' => '/img/puntocomodo/tela_millenium_marron_7065.png',			'valor' => 'Millenium Marron 7065',				'class_name' => 'TELA Millenium REV_OPCION' ),

				array( 'id' => 'Smooth_Negro',					'label' => 'Smooth Negro',				'img' => '/img/puntocomodo/tela_smooth_negro.png',					'valor' => 'Smooth Negro',						'class_name' => 'TELA Smooth REV_OPCION' ),
				array( 'id' => 'Smooth_Blanco',					'label' => 'Smooth Blanco',				'img' => '/img/puntocomodo/tela_smooth_blanco.png',					'valor' => 'Smooth Blanco',						'class_name' => 'TELA Smooth REV_OPCION' ),

				array( 'id' => 'Ecocuer_Gris_Grafito',			'label' => 'Ecocuer Gris Grafito',		'img' => '/img/puntocomodo/tela_ecocuer_gris_grafito.png',			'valor' => 'Ecocuer Gris Grafito',				'class_name' => 'TELA Ecocuer REV_OPCION' ),
				array( 'id' => 'Ecocuer_Azulino',				'label' => 'Ecocuer Azulino',			'img' => '/img/puntocomodo/tela_ecocuer_azulino.png',				'valor' => 'Ecocuer Azulino',					'class_name' => 'TELA Ecocuer REV_OPCION' ),

				array( 'id' => 'Talampaya_Verde',				'label' => 'Talampaya Verde',			'img' => '/img/puntocomodo/tela_talampaya_verde.png',				'valor' => 'Talampaya Verde',					'class_name' => 'TELA Talampaya REV_OPCION' ),
				array( 'id' => 'Talampaya_Petroleo',			'label' => 'Talampaya Petroleo',		'img' => '/img/puntocomodo/tela_talampaya_petroleo.png',			'valor' => 'Talampaya Petroleo',				'class_name' => 'TELA Talampaya REV_OPCION' ),
				array( 'id' => 'Talampaya_Rojo',				'label' => 'Talampaya Rojo',			'img' => '/img/puntocomodo/tela_talampaya_rojo.png',				'valor' => 'Talampaya Rojo',					'class_name' => 'TELA Talampaya REV_OPCION' ),
				array( 'id' => 'Talampaya_Canela',				'label' => 'Talampaya Canela',			'img' => '/img/puntocomodo/tela_talampaya_canela.png',				'valor' => 'Talampaya Canela',					'class_name' => 'TELA Talampaya REV_OPCION' ),
				array( 'id' => 'Talampaya_Marron',				'label' => 'Talampaya Marron',			'img' => '/img/puntocomodo/tela_talampaya_marron.png',				'valor' => 'Talampaya Marron',					'class_name' => 'TELA Talampaya REV_OPCION' ),
				array( 'id' => 'Talampaya_Maiz',				'label' => 'Talampaya Maiz',			'img' => '/img/puntocomodo/tela_talampaya_maiz.png',				'valor' => 'Talampaya Maiz',					'class_name' => 'TELA Talampaya REV_OPCION' ),

				array( 'id' => 'Calafate_Rojo_Fuego',			'label' => 'Calafate Rojo Fuego',		'img' => '/img/puntocomodo/tela_calafate_rojo_fuego.png',			'valor' => 'Calafate Rojo Fuego',				'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Azul',					'label' => 'Calafate Azul',				'img' => '/img/puntocomodo/tela_calafate_azul.png',					'valor' => 'Calafate Azul',						'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Rojo',					'label' => 'Calafate Rojo',				'img' => '/img/puntocomodo/tela_calafate_rojo.png',					'valor' => 'Calafate Rojo',						'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Azulino',				'label' => 'Calafate Azulino',			'img' => '/img/puntocomodo/tela_calafate_azulino.png',				'valor' => 'Calafate Azulino',					'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Bordo',				'label' => 'Calafate Bordo',			'img' => '/img/puntocomodo/tela_calafate_bordo.png',				'valor' => 'Calafate Bordo',					'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Petroleo',				'label' => 'Calafate Petroleo',			'img' => '/img/puntocomodo/tela_calafate_petroleo.png',				'valor' => 'Calafate Petroleo',					'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Verde_Musgo',			'label' => 'Calafate Verde Musgo',		'img' => '/img/puntocomodo/tela_calafate_verde_musgo.png',			'valor' => 'Calafate Verde Musgo',				'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Gris_Medio',			'label' => 'Calafate Gris Medio',		'img' => '/img/puntocomodo/tela_calafate_gris_medio.png',			'valor' => 'Calafate Gris Medio',				'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Marron_Habano',		'label' => 'Calafate Marron Habano',	'img' => '/img/puntocomodo/tela_calafate_marron_habano.png',		'valor' => 'Calafate Marron Habano',			'class_name' => 'TELA Calafate REV_OPCION' ),
				array( 'id' => 'Calafate_Negro',				'label' => 'Calafate Negro',			'img' => '/img/puntocomodo/tela_calafate_negro.png',				'valor' => 'Calafate Negro',					'class_name' => 'TELA Calafate REV_OPCION' ),

				array( 'id' => 'Marathon_Azul',					'label' => 'Marathon Azul',				'img' => '/img/puntocomodo/tela_marathon_azul.png',					'valor' => 'Marathon Azul',						'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Aero',					'label' => 'Marathon Aero',				'img' => '/img/puntocomodo/tela_marathon_aero.png',					'valor' => 'Marathon Aero',						'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Azul_Marino',			'label' => 'Marathon Azul Marino',		'img' => '/img/puntocomodo/tela_marathon_azul_marino.png',			'valor' => 'Marathon Azul Marino',				'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Verde',				'label' => 'Marathon Verde',			'img' => '/img/puntocomodo/tela_marathon_verde.png',				'valor' => 'Marathon Verde',					'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Gris_Perla',			'label' => 'Marathon Grtis Perla',		'img' => '/img/puntocomodo/tela_marathon_gris_perla.png',			'valor' => 'Marathon Gris Perla',				'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Naranja',				'label' => 'Marathon Naranja',			'img' => '/img/puntocomodo/tela_marathon_naranja.png',				'valor' => 'Marathon Naranja',					'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Gris_Oscuro',			'label' => 'Marathon Grtis Oscuro',		'img' => '/img/puntocomodo/tela_marathon_gris_oscuro.png',			'valor' => 'Marathon Gris Oscuro',				'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Rojo',					'label' => 'Marathon Rojo',				'img' => '/img/puntocomodo/tela_marathon_rojo.png',					'valor' => 'Marathon Rojo',						'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Negro',				'label' => 'Marathon Negro',			'img' => '/img/puntocomodo/tela_marathon_negro.png',				'valor' => 'Marathon Negro',					'class_name' => 'TELA Marathon REV_OPCION' ),
				array( 'id' => 'Marathon_Bordo',				'label' => 'Marathon Bordo',			'img' => '/img/puntocomodo/tela_marathon_bordo.png',				'valor' => 'Marathon Bordo',					'class_name' => 'TELA Marathon REV_OPCION' ),

				array( 'id' => 'Nativa_Beige',					'label' => 'Nativa Beige',				'img' => '/img/puntocomodo/tela_nativa_beige.png',					'valor' => 'Nativa Beige',						'class_name' => 'TELA Nativa REV_OPCION' ),
				array( 'id' => 'Nativa_Marron_Negro',			'label' => 'Nativa Marron y Negro',		'img' => '/img/puntocomodo/tela_nativa_marron_negro.png',			'valor' => 'Nativa Marron y Negro',				'class_name' => 'TELA Nativa REV_OPCION' ),
				array( 'id' => 'Nativa_Rojo_Negro',				'label' => 'Nativa Rojo y Negro',		'img' => '/img/puntocomodo/tela_nativa_rojo_negro.png',				'valor' => 'Nativa Rojo y Negro',				'class_name' => 'TELA Nativa REV_OPCION' ),
				array( 'id' => 'Nativa_Canela_Negro',			'label' => 'Nativa Canela y Negro',		'img' => '/img/puntocomodo/tela_nativa_canela_negro.png',			'valor' => 'Nativa Canela y Negro',				'class_name' => 'TELA Nativa REV_OPCION' ),
				array( 'id' => 'Nativa_Rojo',					'label' => 'Nativa Rojo',				'img' => '/img/puntocomodo/tela_nativa_rojo.png',					'valor' => 'Nativa Rojo',						'class_name' => 'TELA Nativa REV_OPCION' ),
				array( 'id' => 'Nativa_Negro_Gris',				'label' => 'Nativa Negro y Gris',		'img' => '/img/puntocomodo/tela_nativa_negro_gris.png',				'valor' => 'Nativa Negro y Gris',				'class_name' => 'TELA Nativa REV_OPCION' ),

				array( 'id' => 'Toledo_Bordo',					'label' => 'Toledo Bordo',				'img' => '/img/puntocomodo/tela_toledo_bordo.png',					'valor' => 'Toledo Bordo',						'class_name' => 'TELA Toledo REV_OPCION' ),
				array( 'id' => 'Toledo_Azul',					'label' => 'Toledo Azul',				'img' => '/img/puntocomodo/tela_toledo_azul.png',					'valor' => 'Toledo Azul',						'class_name' => 'TELA Toledo REV_OPCION' ),
				array( 'id' => 'Toledo_Maiz',					'label' => 'Toledo Maiz',				'img' => '/img/puntocomodo/tela_toledo_maiz.png',					'valor' => 'Toledo Maiz',						'class_name' => 'TELA Toledo REV_OPCION' ),
				array( 'id' => 'Toledo_Negro',					'label' => 'Toledo Negro',				'img' => '/img/puntocomodo/tela_toledo_negro.png',					'valor' => 'Toledo Negro',						'class_name' => 'TELA Toledo REV_OPCION' ),

				array( 'id' => 'Red_Rojo',						'label' => 'Red Rojo',					'img' => '/img/puntocomodo/tela_red_rojo.png',						'valor' => 'Red Rojo',							'class_name' => 'TELA Red REV_OPCION' ),
				array( 'id' => 'Red_Naranja',					'label' => 'Red Naranja',				'img' => '/img/puntocomodo/tela_red_naranja.png',					'valor' => 'Red Naranja',						'class_name' => 'TELA Red REV_OPCION' ),
				array( 'id' => 'Red_Gris_Perla',				'label' => 'Red Gris Perla',			'img' => '/img/puntocomodo/tela_red_gris_perla.png',				'valor' => 'Red Gris Perla',					'class_name' => 'TELA Red REV_OPCION' ),
				array( 'id' => 'Red_Vision',					'label' => 'Red Vision',				'img' => '/img/puntocomodo/tela_red_vision.png',					'valor' => 'Red Vision',						'class_name' => 'TELA Red REV_OPCION' ),
				array( 'id' => 'Red_Negro',						'label' => 'Red Negro',					'img' => '/img/puntocomodo/tela_red_negro.png',						'valor' => 'Red Negro',							'class_name' => 'TELA Red REV_OPCION' ),

				array( 'id' => 'Jacquard_Flores_Lila',			'label' => 'Jacquard Flores Lila',		'img' => '/img/puntocomodo/tela_jacquard_flores_lila.png',			'valor' => 'Jacquard Flores Lila',				'class_name' => 'TELA Jacquard REV_OPCION' ),
				array( 'id' => 'Jacquard_Rock_Celeste',			'label' => 'Jacquard Rock Celeste',		'img' => '/img/puntocomodo/tela_jacquard_rock_celeste.png',			'valor' => 'Jacquard Rock Celeste',				'class_name' => 'TELA Jacquard REV_OPCION' ),
				array( 'id' => 'Jacquard_Rock_Negro',			'label' => 'Jacquard Rock Negro',		'img' => '/img/puntocomodo/tela_jacquard_rock_negro.png',			'valor' => 'Jacquard Rock Negro',				'class_name' => 'TELA Jacquard REV_OPCION' ),

				array( 'id' => 'Aymara_Blanco',					'label' => 'Aymara Blanco',				'img' => '/img/puntocomodo/tela_aymara_blanco.png',					'valor' => 'Aymara Blanco',						'class_name' => 'TELA Aymara REV_OPCION' ),
				array( 'id' => 'Aymara_Negro',					'label' => 'Aymara Negro',				'img' => '/img/puntocomodo/tela_aymara_negro.png',					'valor' => 'Aymara Negro',						'class_name' => 'TELA Aymara REV_OPCION' ),
				array( 'id' => 'Aymara_Rojo',					'label' => 'Aymara Rojo',				'img' => '/img/puntocomodo/tela_aymara_rojo.png',					'valor' => 'Aymara Rojo',						'class_name' => 'TELA Aymara REV_OPCION' ),

				array( 'id' => 'Araucana_Limon',				'label' => 'Araucana Limon',			'img' => '/img/puntocomodo/tela_araucana_limon.png',				'valor' => 'Araucana Limon',					'class_name' => 'TELA Araucana REV_OPCION' ),
				array( 'id' => 'Araucana_Naranja',				'label' => 'Araucana Naranja',			'img' => '/img/puntocomodo/tela_araucana_naranja.png',				'valor' => 'Araucana Naranja',					'class_name' => 'TELA Araucana REV_OPCION' ),
				array( 'id' => 'Araucana_Cielo',				'label' => 'Araucana Cielo',			'img' => '/img/puntocomodo/tela_araucana_cielo.png',				'valor' => 'Araucana Cielo',					'class_name' => 'TELA Araucana REV_OPCION' ),
				array( 'id' => 'Araucana_Fucsia',				'label' => 'Araucana Fucsia',			'img' => '/img/puntocomodo/tela_araucana_fucsia.png',				'valor' => 'Araucana Fucsia',					'class_name' => 'TELA Araucana REV_OPCION' ),
				array( 'id' => 'Araucana_Lila',					'label' => 'Araucana Lila',				'img' => '/img/puntocomodo/tela_araucana_lila.png',					'valor' => 'Araucana Lila',						'class_name' => 'TELA Araucana REV_OPCION' ),
				array( 'id' => 'Araucana_Rojo',					'label' => 'Araucana Rojo',				'img' => '/img/puntocomodo/tela_araucana_rojo.png',					'valor' => 'Araucana Rojo',						'class_name' => 'TELA Araucana REV_OPCION' ),

				array( 'id' => 'Color_Naranja',					'label' => 'Naranja',					'img' => '/img/puntocomodo/color_naranja.png',						'valor' => 'Color Naranja',						'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Rojo',					'label' => 'Rojo',						'img' => '/img/puntocomodo/color_rojo.png',							'valor' => 'Color Rojo',						'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Celeste',					'label' => 'Celeste',					'img' => '/img/puntocomodo/color_celeste.png',						'valor' => 'Color Celeste',						'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Amarillo_Fuerte',			'label' => 'Amarillo Fuerte',			'img' => '/img/puntocomodo/color_amarillo_fuerte.png',				'valor' => 'Color Amarillo Fuerte',				'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Blanco',					'label' => 'Blanco',					'img' => '/img/puntocomodo/color_blanco.png',						'valor' => 'Color Blanco',						'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Gris',					'label' => 'Gris',						'img' => '/img/puntocomodo/color_gris.png',							'valor' => 'Color Gris',						'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Negro',					'label' => 'Negro',						'img' => '/img/puntocomodo/color_negro.png',						'valor' => 'Color Negro',						'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Verde_Claro',				'label' => 'Verde Claro',				'img' => '/img/puntocomodo/color_verde_claro.png',					'valor' => 'Color Verde Claro',					'class_name' => 'COLOR REV_OPCION' ),
				array( 'id' => 'Color_Verde_Oscuro',			'label' => 'Verde Oscuro',				'img' => '/img/puntocomodo/color_verde_oscuro.png',					'valor' => 'Color Verde Oscuro',				'class_name' => 'COLOR REV_OPCION' ),
			),
			'cta' => '<strong>Paso 4: Apoyabrazos &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></strong>',
		),

		// PASO 4 - APOYABRAZOS
		array(
			'pregunta' => 'Apoyabrazos',
			'titulo' => 'Apoyabrazos',
			'tipo' => 'set',
			'id' => 4,
			'campo_id' => 11,
			'opciones' => array(
				array( 'id' => 'sin_ap',		'label' => 'Sin Apoyabrazos',	'img' => '/img/puntocomodo/apoyabrazos_sin.jpg',				'valor' => 'Sin Apoyabrazos' ),
				array( 'id' => 'ap_337',		'label' => 'Modelo 337',		'img' => '/img/puntocomodo/apoyabrazos_337.jpg',		'valor' => 'Modelo 337' ),
				array( 'id' => 'ap_338',		'label' => 'Modelo 338',		'img' => '/img/puntocomodo/apoyabrazos_338.jpg',		'valor' => 'Modelo 338' ),
				array( 'id' => 'ap_339',		'label' => 'Modelo 339',		'img' => '/img/puntocomodo/apoyabrazos_339.jpg',		'valor' => 'Modelo 339' ),
				array( 'id' => 'ap_340',		'label' => 'Modelo 340',		'img' => '/img/puntocomodo/apoyabrazos_340.jpg',		'valor' => 'Modelo 340' ),
				array( 'id' => 'ap_401',		'label' => 'Modelo 401',		'img' => '/img/puntocomodo/apoyabrazos_401.jpg',		'valor' => 'Modelo 401' ),
				array( 'id' => 'ap_405',		'label' => 'Modelo 405',		'img' => '/img/puntocomodo/apoyabrazos_405.jpg',		'valor' => 'Modelo 405' ),
				array( 'id' => 'ap_550',		'label' => 'Modelo 550',		'img' => '/img/puntocomodo/apoyabrazos_550.jpg',		'valor' => 'Modelo 550' ),
				array( 'id' => 'ap_670',		'label' => 'Modelo 670',		'img' => '/img/puntocomodo/apoyabrazos_670.jpg',		'valor' => 'Modelo 670' ),
				array( 'id' => 'ap_680',		'label' => 'Modelo 680',		'img' => '/img/puntocomodo/apoyabrazos_680.jpg',		'valor' => 'Modelo 680' ),
				array( 'id' => 'ap_BR01',		'label' => 'Modelo BR01',		'img' => '/img/puntocomodo/apoyabrazos_br01.jpg',		'valor' => 'Modelo BR01' ),
				array( 'id' => 'ap_BR201',		'label' => 'Modelo BR201',		'img' => '/img/puntocomodo/apoyabrazos_br201.jpg',		'valor' => 'Modelo BR201' ),
				array( 'id' => 'ap_Golf',		'label' => 'Modelo Golf',		'img' => '/img/puntocomodo/apoyabrazos_golf.jpg',		'valor' => 'Modelo Golf' ),
				array( 'id' => 'ap_Optico',		'label' => 'Modelo Optico',		'img' => '/img/puntocomodo/apoyabrazos_optico.jpg',		'valor' => 'Modelo Optico' ),
			),
			'cta' => '<strong>Paso 5: Pie de Butaca &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></strong>',
		),
		
		// PASO 5 - PIE DE ASCIENTO
		array(
			'pregunta' => 'Te gustar&iacute;a elegir un de Pie?',
			'titulo' => 'Pie de Asciento',
			'tipo' => 'set',
			'id' => 5,
			'campo_id' => 11,
			'opciones' => array(	
				array( 'id' => 'pie_estandard',			'label' => 'Pie Estandard',			'img' => '/img/puntocomodo/pie_estandard.png',				'valor' => 'Pie Estandard' ),
				array( 'id' => 'pie_giratorio_negro',	'label' => 'Pie Giratorio Negro',	'img' => '/img/puntocomodo/pie_giratorio_negro.png',		'valor' => 'Pie Giratorio Negro' ),
				array( 'id' => 'pie_giratorio_cromado',	'label' => 'Pie Giratorio Cromado',	'img' => '/img/puntocomodo/pie_giratorio_cromado.png',		'valor' => 'Pie Giratorio Cromado' ),

				array( 'id' => 'pie_metalico',			'label' => 'Pie Metalico',			'img' => '/img/puntocomodo/pie_metalico.png',				'valor' => 'Pie Metalico' ),
				array( 'id' => 'pie_trineo',			'label' => 'Pie Trineo',			'img' => '/img/puntocomodo/pie_trineo.png',					'valor' => 'Pie Trineo' ),
				array( 'id' => 'pie_opr',				'label' => 'Pie OPR',				'img' => '/img/puntocomodo/pie_opr.png',					'valor' => 'Pie OPR' ),
				array( 'id' => 'pie_fly',				'label' => 'Pie Fly',				'img' => '/img/puntocomodo/pie_fly.png',					'valor' => 'Pie Fly' ),
				array( 'id' => 'pie_bari_fijo',			'label' => 'Bari Fijo',				'img' => '/img/puntocomodo/pie_bari_fijo.png',				'valor' => 'Pie Bari Fijo' ),
				array( 'id' => 'pie_ap',				'label' => 'Pie AP',				'img' => '/img/puntocomodo/pie_ap.png',						'valor' => 'Pie AP' ),
			),
			'cta' => '<strong>Paso 5: Accesorios y Complementos &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></strong>',
		),

		// PASO 6 - ACCESORIOS
		array(
			'pregunta' => 'Quer&eacute;s agregar alg&uacute;n accesorio?',
			'titulo' => 'Complementos',
			'tipo' => 'set',
			'id' => 6,
			'campo_id' => 3,
			'opciones' => array(
				array( 'id' => 'cesto',			'label' => 'Cesto Papelero',			'img' => '/img/puntocomodo/101_foto21.jpg',			'valor' => 'Cesto Papelero' ),
				array( 'id' => 'mesa_lupe',		'label' => 'Mesa Lupe',					'img' => '/img/puntocomodo/lupe_apiladas.jpg',		'valor' => 'Mesa Lupe' ),				
				array( 'id' => 'perchero_gala',	'label' => 'Perchero Gala',				'img' => '/img/puntocomodo/100_foto2.jpg',			'valor' => 'Perchero Gala' ),
			),
			'cta' => '<strong>¡ LISTO ! &nbsp; Recibir Presupuesto &nbsp;<span class="glyphicon glyphicon-arrow-right"></span></strong>',
			'cta_activo' => true,
			'cta_ultimo' => true,
		),
	
	);
	$start = 1;
?>
<!-- landing -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="PuntoComodo">
		<title>PuntoComodo - Todo lo que busc&aacute;s en un s&oacute;lo lugar...</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,700italic' rel='stylesheet' type='text/css'>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.min.css" rel="stylesheet">
		<link href="css/puntocomodo/landing.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	</head>
	<body>
		
		<!-- body -->
		<div class="cuerpo">
			<div class="container">
				
				<form method="post" action="">					
					<div class="text-center logo">
						<img src="img/puntocomodo/punto_comodo_logo430.png" class="img-responsive center-block" alt="Punto Comodo" />
						<img src="img/puntocomodo/punto_comodo_slogan.png" class="img-responsive center-block" alt="Punto Comodo" />
					</div>
					
					<?php foreach ($_pasos as $paso) { ?>
						<div class="paso" id="paso_<?=$paso['id']?>" data-paso-id="<?=$paso['id']?>" data-paso-tipo="<?=$paso['tipo']?>" data-paso-label="<?=$paso['titulo']?>">
							<!--resumen-->
							<div class="row resumen" <?=($paso['id'] > $start -1 ?'style="display:none"':'')?>>
								<h2 class="titulo"><?=$paso['titulo']?>
									<span class="opciones">
										<!--<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> Opcion </span>-->
									</span>
									<a class="btn btn-default pull-right boton-modificar"><span class="glyphicon glyphicon-pencil"></span> &nbsp; Modificar</a>
								</h2>
							</div>
							<!--/resumen-->
							<!--formulario-->
							<div class="formulario" <?=($paso['id'] != $start ?'style="display:none"':'')?>>
								<div class="row row-pregunta">
									<?php if ((isset($paso['lead'])) and ($paso['lead'] == true)) { ?>
										<p class="lead"><?=$paso['lead']?></p>
									<?php } ?>
									<h2 class="text-center">
										<?=$paso['pregunta']?>
										<small class="visible-xs">click para seleccionar uno o varios</small>
									</h2>
								</div>
								<?php if (is_array($paso['opciones'])) { ?>
									<div class="row row-opciones">
										<?php foreach ($paso['opciones'] as $op) { ?>
										<div class="col-sm-2 opcion <?php if (isset($op['class_name'])) echo $op['class_name']; ?>" id="opcion_<?=$op['id']?>" data-opcion-id="<?=$op['id']?>" data-opcion-value="<?=$op['valor']?>" data-opcion-label="<?=$op['label']?>">
											<?php if ($paso['tipo'] == 'set') { ?>
												<input type="hidden" name="valores[<?=$paso['campo_id']?>][<?=$op['id']?>]" value="0" />
											<?php } ?>
											<div class="form-group">											
											<?php $height = ''; if ($paso['id'] == '3') $height = 'style="height:80px;"'; ?>
											<?php if ((isset($op['class_name'])) and (strpos($op['class_name'], 'REV_INDEX') > 0)) { $on_click = 'onClick="opciones_revestimientos(this, '."'_".$op['class_name']."'".');"'; } else { $on_click = ''; } ?>
										    <a href="#" class="seleccionar-opcion"><img id="img_<?=$op['id']?>" src="<?=$op['img']?>" class="img-responsive deseleccionada" width="150" <?=$height?> <?=$on_click?>></a>
										    <label for="opcion_<?=$op['id']?>" class="seleccionar-opcion" style="height: 60px;"><?=$op['label']?></label>
										  </div>
										</div>
										<?php } // ops ?>
									</div><!--/.row.row-opciones-->
								<?php } // opciones // ?>
								<div class="row row-boton text-right form-inline">
									<?php if ($paso['tipo'] == 'value') { ?>
										<input type="number" class="form-control input-lg escribir-valor" name="valores[<?=$paso['campo_id']?>]" id="valor_paso_<?=$paso['id']?>" placeholder="<?=$paso['placeholder']?>" style="width:<?=$paso['width']?>;font-weight:bold;">
										<label for="valor_paso_<?=$paso['id']?>"><?=$paso['label']?></label>
									<?php } ?>
									<?php if ((isset($paso['cta_ultimo'])) and ($paso['cta_ultimo'] == true)) { ?>
										<a href="#" class="strong btn btn-xl btn-warning btn-ultimo" data-toggle="modal" data-target="#modal_contacto"><?=$paso['cta']?></a>
									<?php } else { ?>
										<?php if (!isset($paso['cta_activo'])) { $paso['cta_activo'] = ''; } ?>
										<a id="paso_<?=$paso['id']+1?>_boton" href="#" class="strong boton-paso btn btn-lg btn-warning <?=( $paso['cta_activo'] ? 'siempre-activo' : 'disabled' )?>"><?=$paso['cta']?></a>
									<?php } ?>
								</div><!--/row-boton-->
							</div><!--/formulario-->
						</div><!--/paso-->
					<?php } ?>
					
					<!-- ultimo paso -->
					<div class="modal fade" id="modal_contacto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="apadding-top: 100px; adisplay:block; aopacity:1;">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<!-- comentario -->
									<div class="text-center row row-comentario">
										<div class="col-sm-10 col-sm-offset-1">
											<div class="form-group">
												<label for="comentario" class="control-label">Dejanos tus comentarios y consultas:</label>
												<textarea class="form-control input-lg" id="comentario" name="valores[9]" rows="2" placeholder="Escribí tus comentarios aquí"></textarea>
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Es muy importante para personalizar los presupuestos</strong></span>
											</div>
										</div>
									</div>
									<!-- campos -->
									<div class="form-horizontal row campos">
										<!-- nombre -->
										<div class="form-group">
											<label for="nombre" class="col-sm-3 control-label">Nombre</label>
											<div class="col-sm-8">
												<input type="text" name="valores[6]" class="form-control input-lg" id="nombre" placeholder="Escribí tu nombre">
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Por favor dejanos tu nombre completo</strong></span>
												<span class="error-feedback help-block"><strong>Tu nombre es obligatorio</strong></span>
											</div>
										</div>
										<!-- email -->
										<div class="form-group">
											<label for="email" class="col-sm-3 control-label">E-Mail</label>
											<div class="col-sm-8">
												<input type="email" name="valores[8]" class="form-control input-lg" id="email" placeholder="A donde recibirás los presupuestos">
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Por favor ingresá un e-mail válido</strong></span>
												<span class="error-feedback help-block"><strong>Tu e-mail es obligatorio</strong></span>
											</div>
										</div>
										<!-- telefono -->
										<div class="form-group">
											<label for="telefono" class="col-sm-3 control-label">Teléfono</label>
											<div class="col-sm-8">
												<input type="text" name="valores[7]" class="form-control input-lg" id="telefono" placeholder="Para que puedan contactarte" value="">
												<span class="success-feedback glyphicon glyphicon-ok form-control-feedback"></span>
												<span class="warning-feedback glyphicon glyphicon-warning-sign form-control-feedback"></span>
												<span class="error-feedback glyphicon glyphicon-remove form-control-feedback"></span>
												<span class="warning-feedback help-block"><strong>Por favor ingresá un teléfono válido</strong></span>
												<span class="error-feedback help-block"><strong>Tu teléfono es obligatorio</strong></span>
											</div>
										</div>
										<!-- zona -->
										<?php 
											if (!isset($_ocultar_zona)) $_ocultar_zona = false;
											if (!$_ocultar_zona) { 
										?>
										<div class="form-group">
											<label for="zona" class="col-sm-3 control-label">Zona</label>
											<div class="col-sm-8">
												<select class="form-control input-lg" id="zona" name="valores[10][<?=$_zonas[$_zona]['id']?>]" data-name="valores[10][NNN]" value="1">
													<option value="Capital Federal">Capital Federal</option>
													<option value="Zona Norte">Zona Norte</option>
													<option value="Zona Oeste">Zona Oeste</option>
													<option value="Zona Sur">Zona Sur</option>
													<option value="Gran Buenos Aires">Gran Buenos Aires</option>
													<option value="Zona Sur">Interior del Pa&iacute;s</option>
												</select>
											</div>
										</div>
										<?php } ?>
									</div><!-- campos -->
		  						<div class="modal-footer">
						        <button type="submit" class="btn btn-success btn-xl">&iexcl; Recibir Presupuestos !</button>
						      </div>
									
								</div>
							</div>
						</div>
					</div>
					<!-- / ultimo paso -->
					
				</form>
				
			</div><!--/.container-->
		</div>
		<div class="pie navbar-fixed-bottom">
			<div class="container">
				
				<small>
					&copy; <span class="hidden-xs"><?=date('Y')?></span> PuntoComodo.com - Todos los derechos reservados &nbsp;|&nbsp;
					<a href="terminos.php">T&eacute;rminos y Condiciones</a> &nbsp;|&nbsp;
					<a href="privacidad.php">Privacidad</a>
				</small>
				
			</div>
		</div>
		
		
		<script>
			
			// array para contar la cantidad de opciones seleccionadas en cada paso
			var selecciones = new Object();
			
			// activamos o desactivamos el boton siguiente
			// si es un set = tiene que tener 1 o mas selecciones
			// si es un value = tiene que tener un valor en el campo value
			function toggle_siguiente ( paso_id )
			{
				var paso_tipo = $('.paso#paso_'+paso_id).attr('data-paso-tipo');
				var habilitar = false;
				if (paso_tipo == 'set')
				{
					if (selecciones[paso_id])
						habilitar = true;
				}
				else if (paso_tipo == 'value')
				{
					if ($('input#valor_paso_'+paso_id).val() != '')
						habilitar = true;
				}
				// jodemos el css
				if (habilitar)
					$('.paso#paso_'+paso_id).find('.boton-paso').removeClass('disabled');
				else
				{
					if ( ! $('.paso#paso_'+paso_id).find('.boton-paso').hasClass('siempre-activo') )
						$('.paso#paso_'+paso_id).find('.boton-paso').addClass('disabled');
				}
			}
			
			// selecciona una opcion de un paso, manejando
			// las distintas opciones segun el tipo de paso
			function seleccionar_opcion ( opcion_id, opcion_valor )
			{
				//console.log('seleccionar_opcion('+opcion_id+','+opcion_valor+')');
				
				// buscamos informacion del paso
				var paso_id = $('#opcion_'+opcion_id).closest('.paso').attr('data-paso-id');
				var paso_tipo = $('#opcion_'+opcion_id).closest('.paso').attr('data-paso-tipo');
				
				if (paso_tipo == 'set')
				{
					// swapeamos el input hidden de la opcion entre 1 o 0
					$('.opcion#opcion_'+opcion_id+' input[type=hidden]').val( $('.opcion#opcion_'+opcion_id+' input[type=hidden]').val() == 1 ? 0 : 1 );
					
					// contabilizamos cantidad de opciones seleccionadas
					if (!selecciones[paso_id]) selecciones[paso_id] = 0;
					selecciones[paso_id] += $('.opcion#opcion_'+opcion_id+' input[type=hidden]').val() == 1 ? 1 : -1;			
				}
				else if (paso_tipo == 'value')
				{
					// seteamos el campo de texto con el valor de la opcion
					$('input#valor_paso_'+paso_id).val( opcion_valor );
					
					// des-seleccionamos las anteriores
					$('.paso#paso_'+paso_id).find('img.seleccionada').removeClass('seleccionada');
				}
				
				// seleccionamos la imagen
				$('img#img_'+opcion_id).toggleClass('seleccionada');
				
				// activamos o desactivamos el boton
				toggle_siguiente(paso_id);
				
				//console.log('opcion_id = '+opcion_id+', opcion_valor = '+opcion_valor+', paso_id = '+paso_id+', paso_tipo = '+paso_tipo+', selecciones = '+selecciones[paso_id]);
				return false;
			}
			
			// avanza un paso en las preguntas
			function siguiente ( paso_id )
			{
				// armamos el resumen del paso terminado
				//<span class="opciones">
				//  <span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> Fibra de vidrio</span>

				// verifica que no haya seleccionado posabrazos para omitir el paso
				if (paso_id == 3) {
					// primero se fija si alguno de los modelos usa apoyabrazos
					apoyabrazos = false;
					$('.paso#paso_2 img.seleccionada').each( function(){
						id = this.id;
						id = id.replace('img_', 'opcion_');
						class_name = $('#'+id).attr('class');
						if (class_name.indexOf("CON_AP") >= 0) { apoyabrazos = true; }
					});
					// si el modelo seleccionado no tiene apoyabrazos, saltea el paso
					if (apoyabrazos == false) {
						seleccionar_opcion('opcion_sin_ap', 'sin_ap');
						$('#img_sin_ap').removeClass('deseleccionada');
						$('#img_sin_ap').addClass('seleccionada');
						$('#img_pie_estandard').removeClass('deseleccionada');
						$('#img_pie_estandard').addClass('seleccionada');

						$('.paso#paso_3 img.seleccionada').each( function(index,value){
							var label = $(this).closest('.opcion').attr('data-opcion-label');
							$('.paso#paso_3 .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+label+'</span>');
						});

						$('.paso#paso_4 img.seleccionada').each( function(index,value){
							var label = $(this).closest('.opcion').attr('data-opcion-label');
							$('.paso#paso_4 .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+label+'</span>');
						});

						$('#paso_5_boton').removeClass('disabled');
						$('#paso_6_boton').removeClass('disabled');

						$('.paso#paso_3 .formulario').hide();
						$('.paso#paso_3 .resumen').show();
						$('.paso#paso_4 .formulario').hide();
						$('.paso#paso_4 .resumen').show();

						paso_id = 5;
					}
				}

				var paso_tipo = $('.paso#paso_'+paso_id).attr('data-paso-tipo');
				$('.paso#paso_'+paso_id+' .resumen .opciones').html('');
				if (paso_tipo == 'set')
				{
					// recorremos opciones de imagenes seleccionadas para crear los labels
					$('.paso#paso_'+paso_id+' img.seleccionada').each( function(index,value){
						var label = $(this).closest('.opcion').attr('data-opcion-label');
						$('.paso#paso_'+paso_id+' .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+label+'</span>');
					});
				}
				else if (paso_tipo == 'value')
				{
					var label = $('.paso#paso_'+paso_id).attr('data-paso-label');
					var valor = $('#valor_paso_'+paso_id).val();
					$('.paso#paso_'+paso_id+' .resumen .opciones').append('<span class="label label-primary"><span class="glyphicon glyphicon-ok-sign"></span> '+valor+' '+label+'</span>');
				}
				
				// animacion para mostrar el proximo paso
				$('.paso#paso_'+paso_id+' .formulario').slideUp('normal', function(){
					$('.paso#paso_'+paso_id+' .resumen').slideDown( 'normal', function(){
						$('.paso#paso_'+(parseInt(paso_id)+1)+' .resumen').hide();
						$('.paso#paso_'+(parseInt(paso_id)+1)+' .formulario').show();
						$('.paso#paso_'+(parseInt(paso_id)+1) ).slideDown('fast',function(){
							//console.log('scroll bottom paso '+paso_id);
							$('body').animate({ scrollTop:$(document).height() } );
						});
					});
				});
				
			}
			
			// vuelve a maximizar la opcion seleccionada, 
			// ocultando todas las siguientes
			function modificar( paso_id )
			{
				// oculta los posteriores
				for (var i = parseInt(paso_id) + 1 ; i < <?=count($_pasos)?> ; i++)
					$('.paso#paso_'+i+' .formulario, .paso#paso_'+i+' .resumen').slideUp('normal');
				// parche para usar el callback del ultimo paso escondido:
				$('.paso#paso_'+i+' .formulario, .paso#paso_'+i+' .resumen').slideUp( 'fast', function(){
					// oculta el resumen del paso a editar
					$('.paso#paso_'+paso_id+' .resumen').slideUp('normal', function(){
						// muestra el formulario del paso a editar
						$('.paso#paso_'+paso_id+' .formulario').slideDown();
					});
				});
				return false;
			}
			
			// revisa que no tenga errores y ejecuta el submit
			function submit_form ( )
			{
				validate_form($('input#nombre'),true);
				validate_form($('input#email'),true);
				validate_form($('input#telefono'),true);
				
				// control para no ejecutar 2 veces haciendo <enter>
				if ($('.modal button').hasClass('disabled'))
					return false;
				
				// buscamos errores
				if ( $('.modal .campos .form-group.has-error, .modal .campos .form-group.has-warning').length )
					return false;
				
				// otros errores posibles
				if ($('input#nombre').val() == "" || $('input#email').val() == "" || $('input#telefono').val() == "")
					return false;
				
				// evitamos doble click en el boton submit
				$('.modal button').addClass('disabled');
				//return false;
			}
			
			// valida lo que el usuario va tipeando y da feedback visual
			function validate_form ( obj, on_blur )
			{
				//console.log('validate '+obj.attr('name')+' = '+obj.val());
				if (!on_blur && obj.val() == '')
					return false;
				
				if (obj.attr('id') == 'comentario')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning');
				}
				else if (obj.attr('id') == 'nombre')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-error has-feedback').removeClass('has-success has-warning');
					else if (!obj.val().match(/[\w]{3,}/g))
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success has-error');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning has-error');
				}
				else if (obj.attr('id') == 'email')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-error has-feedback').removeClass('has-success has-warning');
					else if (!obj.val().match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/))
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success has-error');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning has-error');
				}
				else if (obj.attr('id') == 'telefono')
				{
					if (obj.val() == '')
						obj.closest('.form-group').addClass('has-error has-feedback').removeClass('has-success has-warning');
					else if (!obj.val().match(/\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d[^\d]*\d/))
						obj.closest('.form-group').addClass('has-warning has-feedback').removeClass('has-success has-error');
					else
						obj.closest('.form-group').addClass('has-success has-feedback').removeClass('has-warning has-error');
				}
			}
			
			$(document).ready( function(){
				
				// handler: click en imagen o label de paso tipo set o value
				$('.seleccionar-opcion').click( function(){
					var opcion_id = $(this).closest('.opcion').attr('data-opcion-id');
					var opcion_valor = $(this).closest('.opcion').attr('data-opcion-value');
					seleccionar_opcion( opcion_id, opcion_valor );
					return false;
				});
				
				// cambio de valor manual en paso tipo value
				$('.escribir-valor').change( function(){
					var paso_id = $(this).closest('.paso').attr('data-paso-id');
					toggle_siguiente(paso_id);
				});
				
				// boton "siguiente"
				$('.boton-paso').click( function(){
					var paso_id = $(this).closest('.paso').attr('data-paso-id');
					ocultar_opciones ( parseInt(paso_id)+1 );

					siguiente( paso_id );
					// oculta las opciones del siguiente paso según la selección
					return false;
				});
				
				// over a imagenes
				$('img.deseleccionada').hover(function () {
					$(this).toggleClass("deseleccionada over");
				});
				
				// over al resumen para link de modificar
				$('.row.resumen').hover(function () {
					$(this).toggleClass("over");
				});
				
				// boton modificar
				$('.boton-modificar').click( function(){
					var paso_id = $(this).closest('.paso').attr('data-paso-id');
					modificar( paso_id );
				});
				
				// focus en el modal
				$('#modal_contacto').on('shown.bs.modal', function (e) {
				  $('textarea#comentario').focus();
				});
				
				// submit final
				$('.cuerpo .container form').submit( function(){
					return submit_form();
				});
				
				// keystrokes y cambios en campos del form
				$('.modal input, .modal textarea').keyup( function(event) {
					validate_form( $(this) );
				}).keydown(function( event ) {
					validate_form( $(this) );
				});
				$('.modal input, .modal textarea').blur( function() { validate_form( $(this), true ); });
				
				// asignar name al <select> de la zona
				$('select#zona').change( function(){
					$(this).attr('name', $(this).attr('data-name').replace(/NNN/g, $(this).val() ) );
				});
				
				//$('#modal_contacto').modal('show');
				
			});

			function ocultar_opciones ( paso_id ) {
				
				if (paso_id == 2) {
					// selecciona los modelos según el tipo seleccionado en el paso 1
					<?php foreach ($_pasos[0]['opciones'] as $opcion) { ?>
						opcion_class_names = $("#img_<?=$opcion['id']?>").attr('class');
						if (opcion_class_names.search(" seleccionada ") != -1) {
							$( ".<?=$opcion['id']?>").each(function() {
							  $("#"+this.id).show();
							});
						} else {
							$( ".<?=$opcion['id']?>").each(function() {
							  $("#"+this.id).hide();
							});
						}
					<?php } ?>
				}

				if (paso_id == 3) {
					// oculta todas las opciones de revestimientos y muestra solo los tipos de revestimiento
					$( ".REV_OPCION").each(function() {
					  $("#"+this.id).hide();
					});
				}

			}

			function opciones_revestimientos ( img, class_name ) {
				img_class_names = $(img).attr('class');
				if (img_class_names.search(" seleccionada ") != -1) { mostrar = false; } else { mostrar = true; }
				rev_class_name = class_name;
				pos = rev_class_name.indexOf(' REV_INDEX');
				rev_class_name = rev_class_name.substr(0, pos);
				if (rev_class_name.search('TELA ') == true) { rev_class_name = rev_class_name.substr(6); }

				if (mostrar == true) {
					// octura todas las opciones
					$( ".REV_INDEX").each(function() {
					  $("#"+this.id).hide();
					});
					// muestra todas las opciones de rev_class_name
					$( "."+rev_class_name).each(function() {
					  $("#"+this.id).show();
					});
				} else {
					// oculta todas las opciones de rev_class_name
					$( "."+rev_class_name).each(function() {
					  $("#"+this.id).hide();
					});
					// muestra todas las opciones
					$( ".REV_INDEX").each(function() {
					  $("#"+this.id).show();
					});

				}
				
			}


		</script>
		<!-- /body -->
		
		<!-- footer scripts -->
		<script src="js/bootstrap.min.js"></script>
		<!-- /footer scripts -->
		
		<!-- google analytics -->
		<!-- /google analytics -->
		
	</body>
</html>