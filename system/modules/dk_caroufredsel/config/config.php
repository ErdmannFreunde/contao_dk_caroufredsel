<?php 

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2015 Leo Feyer
 * 
 * @package   carouFredSel
 * @author    Dirk Klemmt
 * @license   MIT/GPL
 * @copyright Dirk Klemmt 2012-2015
 */


/**
 * Back end modules
 */
array_insert($GLOBALS['BE_MOD'], 3, array
(
	'content' => array
	(
		'caroufredsel' => array
		(
			'tables' => array('tl_dk_caroufredsel', 'tl_content'),
			'icon' => 'system/modules/dk_caroufredsel/assets/images/caroufredsel.png',
		)
	)
));


/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['caroufredsel_category'] = array(
	'caroufredsel' => 'Dirch\carouFredSel\Module\CarouFredSel',
	'caroufredsel_gallery' => 'Dirch\carouFredSel\Module\CarouFredSelGallery',
	'caroufredsel_background' => 'Dirch\carouFredSel\Module\CarouFredSelBackground',
	'caroufredsel_ticker' => 'Dirch\carouFredSel\Module\CarouFredSelTicker'
);


/**
 * Content Element
 */
$GLOBALS['TL_CTE']['caroufredsel_category'] = array(
	'caroufredsel_gallery' => 'Dirch\carouFredSel\Content\CarouFredSelGallery',
	'caroufredsel_background' => 'Dirch\carouFredSel\Content\CarouFredSelBackground',
	'caroufredsel_start' => 'Dirch\carouFredSel\Content\CarouFredSelStart',
	'caroufredsel_stop' => 'Dirch\carouFredSel\Content\CarouFredSelStop'
);


/**
 * Wrapper Element
 */
$GLOBALS['TL_WRAPPERS']['start'][] = 'caroufredsel_start';
$GLOBALS['TL_WRAPPERS']['stop'][] = 'caroufredsel_stop';


/**
 * Models
 */
$GLOBALS['TL_MODELS']['tl_dk_caroufredsel'] = 'Dirch\carouFredSel\Model\CarouFredSel';
