<?php

/*
 * This file is part of Baul Test Bundle.
 *
 * (c) Bastian Ullrich
 *
 * @license LGPL-3.0-or-later
 */

namespace Baul\TestBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Baul\TestBundle\BaulTestBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(BaulTestBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
