<?php 

/**
 * Namespace
 */
namespace Dirch\carouFredSel\Module;


/**
 * Class ModuleCarouFredSelBackground
 *
 * Front end modul "caroufredsel_background".
 *
 * @copyright  Dirk Klemmt 2012-2015
 * @author     Dirk Klemmt
 * @package    carouFredSel
 */
class CarouFredSelBackground extends CarouFredSelGallery
{

	/**
	 * Return if there are no files
	 *
	 * @return string
	 */
	public function generate()
	{
		return parent::generate();
	}


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		parent::compile();
	}
}
