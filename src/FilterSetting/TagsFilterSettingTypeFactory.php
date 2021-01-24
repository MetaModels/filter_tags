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
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2012-2021 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_tags/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

namespace MetaModels\FilterTagsBundle\FilterSetting;

use MetaModels\Filter\FilterUrlBuilder;
use MetaModels\Filter\Setting\AbstractFilterSettingTypeFactory;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Attribute type factory for tags filter settings.
 */
class TagsFilterSettingTypeFactory extends AbstractFilterSettingTypeFactory
{
    /**
     * The event dispatcher.
     *
     * @var EventDispatcherInterface
     */
    private $dispatcher;

    /**
     * The filter URL builder.
     *
     * @var FilterUrlBuilder
     */
    private $filterUrlBuilder;

    /**
     * {@inheritDoc}
     */
    public function __construct(EventDispatcherInterface $dispatcher, FilterUrlBuilder $filterUrlBuilder)
    {
        parent::__construct();

        $this
            ->setTypeName('tags')
            ->setTypeIcon('bundles/metamodelsfiltertags/filter_tags.png')
            ->setTypeClass(Tags::class)
            ->allowAttributeTypes();

        foreach (
            [
                'alias',
                'translatedalias',
                'select',
                'translatedselect',
                'text',
                'translatedtext',
                'tags',
                'translatedtags',
            ] as $attribute
        ) {
            $this->addKnownAttributeType($attribute);
        }

        $this->dispatcher       = $dispatcher;
        $this->filterUrlBuilder = $filterUrlBuilder;
    }

    /**
     * {@inheritdoc}
     */
    public function createInstance($information, $filterSettings)
    {
        return new Tags($filterSettings, $information, $this->dispatcher, $this->filterUrlBuilder);
    }
}
