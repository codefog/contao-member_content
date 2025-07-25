<?php

declare(strict_types=1);

namespace Codefog\MemberContentBundle\ContaoManager;

use Codefog\MemberContentBundle\CodefogMemberContentBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(CodefogMemberContentBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
