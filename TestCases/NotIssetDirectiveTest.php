<?php

namespace Kanagama\BladeDirectives\TestCases;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

/**
 *
 */
final class NotIssetDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function notIsset()
    {
        $directive = Blade::compileString('@notisset($test)');
        $this->assertEquals('<?php if (!isset($test)): ?>', trim($directive));
    }

    /**
     * @test
     */
    public function endNotIsset()
    {
        $directive = Blade::compileString('@endnotisset');
        $this->assertEquals('<?php endif; ?>', trim($directive));
    }
}
