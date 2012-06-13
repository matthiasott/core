<?php
/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 * @package	   MetaModels
 * @subpackage Interfaces
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @copyright  CyberSpectrum
 * @license    private
 * @filesource
 */
if (!defined('TL_ROOT')) {
	die('You cannot access this file directly!');
}

/**
 * This is the MetaModel filter interface.
 *
 * @package	   MetaModels
 * @subpackage Interfaces
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 */
abstract class MetaModelFilterRule implements IMetaModelFilterRule
{

	/**
	 * The attribute this rule applies to.
	 * @var IMetaModelAttribute
	 */
	protected $objAttribute = NULL;

	/**
	 * create a new FilterRule instance.
	 * @param IMetaModelAttribute|null $objAttribute the attribute this rule applies to.
	 */
	public function __construct($objAttribute = NULL)
	{
		$this->objAttribute = $objAttribute;
	}

	/**
	 * {@inheritdoc}
	 */
//	abstract public function getMatchingIds();
}

?>