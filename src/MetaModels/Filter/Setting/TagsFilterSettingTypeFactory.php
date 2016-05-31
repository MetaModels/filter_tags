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
 * @copyright  2012-2016 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_tags/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

namespace MetaModels\Filter\Setting;

/**
 * Attribute type factory for tags filter settings.
 */
class TagsFilterSettingTypeFactory extends AbstractFilterSettingTypeFactory
{
    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        parent::__construct();

        $this
            ->setTypeName('tags')
            ->setTypeIcon('system/modules/metamodelsfilter_tags/html/filter_tags.png')
            ->setTypeClass('MetaModels\Filter\Setting\Tags')
            ->allowAttributeTypes();

        foreach (array(
            'select',
            'translatedselect',
            'text',
            'translatedtext',
            'tags',
            'translatedtags',
         ) as $attribute) {
            $this->addKnownAttributeType($attribute);
        }
    }
}
