<?php

declare(strict_types=1);

namespace Codefog\MemberContentBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class CodefogMemberContentBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
