<?php

/**
 * This file is part of MetaModels/filter_tags.
 *
 * (c) 2012-2021 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels/filter_tags
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     Christian de la Haye <service@delahaye.de>
 * @author     Andreas Isaak <info@andreas-isaak.de>
 * @author     David Molineus <mail@netzmacht.de>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @author     Sven Baumann <baumann.sv@gmail.com>
 * @copyright  2012-2021 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_tags/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['metapalettes']['tags extends default'] = [
    '+config' => [
        'attr_id',
    ],
    '+fefilter' => [
        'urlparam',
        'label',
        'hide_label',
        'template',
        'apply_sorting',
        'blankoption',
        'show_select_all',
        'useor',
        'onlyused',
        'onlypossible',
        'skipfilteroptions',
        'cssID'
    ],
];

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['useor'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['useor'],
    'exclude'                 => true,
    'default'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => 'char(1) NOT NULL default \'0\'',
    'eval'                    => [
        'tl_class'            => 'clr w50 cbx m12',
    ],
];

$GLOBALS['TL_DCA']['tl_metamodel_filtersetting']['fields']['show_select_all'] = [
    'label'                   => &$GLOBALS['TL_LANG']['tl_metamodel_filtersetting']['show_select_all'],
    'exclude'                 => true,
    'inputType'               => 'checkbox',
    'sql'                     => 'char(1) NOT NULL default \'0\'',
    'eval'                    => [
        'tl_class'            => 'w50 cbx m12',
    ],
];
