<?php

/**
 * This file is part of MetaModels/filter_tags.
 *
 * (c) 2012-2024 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels/filter_tags
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Ingolf Steinhardt <info@e-spin.de>
 * @copyright  2012-2024 The MetaModels team.
 * @license    https://github.com/MetaModels/filter_tags/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

namespace MetaModels\FilterTagsBundle\Test\DependencyInjection;

use MetaModels\FilterTagsBundle\DependencyInjection\MetaModelsFilterTagsExtension;
use MetaModels\FilterTagsBundle\FilterSetting\TagsFilterSettingTypeFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;

/**
 * This test case test the extension.
 *
 * @covers \MetaModels\FilterTagsBundle\DependencyInjection\MetaModelsFilterTagsExtensionExtension
 */
class MetaModelsFilterTagsExtensionTest extends TestCase
{
    public function testInstantiation(): void
    {
        $extension = new MetaModelsFilterTagsExtension();

        $this->assertInstanceOf(MetaModelsFilterTagsExtension::class, $extension);
        $this->assertInstanceOf(ExtensionInterface::class, $extension);
    }

    public function testFactoryIsRegistered(): void
    {
        $container = new ContainerBuilder();

        $extension = new MetaModelsFilterTagsExtension();
        $extension->load([], $container);

        self::assertTrue($container->hasDefinition('metamodels.filter_tags.factory'));
        $definition = $container->getDefinition('metamodels.filter_tags.factory');
        self::assertCount(1, $definition->getTag('metamodels.filter_factory'));
    }
}
