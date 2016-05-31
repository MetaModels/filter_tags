<?php

/**
 * This file is part of MetaModels/filter_tags.
 *
 * (c) 2012-2016 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage FilterTags
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Christian de la Haye <service@delahaye.de>
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_tags/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['typenames']['tags'] = 'Multi selection';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['useor']             = 'OR';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['useor']             = 'OR-linking of the tags. ' .
    'Is automatically set if the attribute is aselect-type.';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlyused']          = 'Assigned tags only';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlyused']          =
    'Show only options, that are assigned somewhere in the MetaModel.';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlypossible']      = 'Remaining tags only';
$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['onlypossible']      =
    'Show only options, that are still assigned somewhere after the actual filter is set.';
