<?php

/**
 * The MetaModels extension allows the creation of multiple collections of custom items,
 * each with its own unique set of selectable attributes, with attribute extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the
 * data in each collection.
 *
 * PHP version 5
 *
 * @package    MetaModels
 * @subpackage FilterTags
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Christian de la Haye <service@delahaye.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     David Molineus <mail@netzmacht.de>
 * @copyright  The MetaModels team.
 * @license    LGPL.
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['tags extends default'] = array
(
	'+config' => array
	(
		'attr_id',
		'urlparam',
		'label',
		'template',
		'useor',
		'onlyused',
		'onlypossible',
		'skipfilteroptions'
	),
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['onlyused'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlyused'],
	'exclude'                 => true,
	'default'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array
	(
		'tl_class'            => 'w50',
	),
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['onlypossible'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlypossible'],
	'exclude'                 => true,
	'default'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array
	(
		'tl_class'            => 'w50',
	),
);

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['useor'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['useor'],
	'exclude'                 => true,
	'default'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array
	(
		'tl_class'            => 'w50',
	),
);
