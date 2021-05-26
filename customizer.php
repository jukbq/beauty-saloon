<?php

/*------------------js--------------------------------*/
add_action( 'customize_preview_init', 'cd_customizer' );
function cd_customizer() {
	wp_enqueue_script(
		  'cd_customizer',
		  get_template_directory_uri() . '/customizer.js',
		  array( 'jquery','customize-preview' ),
		  '',
		  true
	);
}

/*--------------------------add_section contact-----------------------*/

add_action('customize_register', function($customizer) {
	$customizer->add_section(
		'section_one', array(
			'title' => 'Контакты',
			'description' => '',
			'priority' => 11,
		)
	);
	$customizer->add_setting('phone_1', 
		array('default' => '89215555555')
	);
	$customizer->add_setting('phone_2', 
		array('default' => '89215555555')
	);
	$customizer->add_setting('phone_3', 
		array('default' => '89215555555')
	);
	$customizer->add_setting('email', 
		array('default' => '')
	);
	$customizer->add_setting('clock_1', 
		array('default' => '')
	);
	$customizer->add_setting('clock_2', 
		array('default' => '')
	);
	$customizer->add_setting('adress', 
		array('default' => 'Введіть адресу')
	);

	
	$customizer->add_control('phone_1', array(
			'label' => 'Телефон',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_control('phone_2', array(
			'label' => '',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_control('phone_3', array(
			'label' => '',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_control('email', array(
			'label' => 'Електронна скриеька',
			'section' => 'section_one',
			'type' => 'email',
		)
	);
	$customizer->add_control('clock_1', array(
			'label' => 'Години роботи будні',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_control('clock_2', array(
			'label' => 'Години роботи вихідні',
			'section' => 'section_one',
			'type' => 'text',
		)
	);
	$customizer->add_control('adress', array(
			'label' => 'Адреса',
			'section' => 'section_one',
			'type' => 'textarea',
		)
	);
/*----------------------------social network----------------------*/
	$customizer->add_section(
		'section_two', array(
			'title' => 'Соціальні мережі',
			'description' => '',
			'priority' => 12,
		)
	);

    /*------------------facebook---------------*/
    	$customizer->add_setting('facebook', 
		array('default' => '')
	);

    	$customizer->add_control('facebook', array(
			'label' => 'Сторінка Facebook',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
     /*------------------instagrann---------------*/
    	$customizer->add_setting('instagrann', 
		array('default' => '')
	);

    	$customizer->add_control('instagrann', array(
			'label' => 'Сторінка Instagrann',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
     /*------------------messenger---------------*/
    	$customizer->add_setting('messenger', 
		array('default' => '')
	);

    	$customizer->add_control('messenger', array(
			'label' => 'Messenger, додати id facebook',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
     /*------------------viber---------------*/
    	$customizer->add_setting('viber', 
		array('default' => '')
	);

    	$customizer->add_control('viber', array(
			'label' => 'Додати номер viber (38******)',
			'section' => 'section_two',
			'type' => 'number',
		)
	);
     /*------------------viber---------------*/
    	$customizer->add_setting('telegram', 
		array('default' => '')
	);

    	$customizer->add_control('telegram', array(
			'label' => 'Додати логін telegram',
			'section' => 'section_two',
			'type' => 'text',
		)
	);
     /*------------------whatsapp---------------*/
    	$customizer->add_setting('whatsapp', 
		array('default' => '')
	);

    	$customizer->add_control('whatsapp', array(
			'label' => 'Додати номер whatsapp (38******)',
			'section' => 'section_two',
			'type' => 'number',
		)
	);
     /*------------------youtube---------------*/
    	$customizer->add_setting('youtube', 
		array('default' => '')
	);

    	$customizer->add_control('youtube', array(
			'label' => 'Додати посидання youtube каналу',
			'section' => 'section_two',
			'type' => 'text',
		)
	);


});