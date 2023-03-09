<?php

namespace Kanagama\BladeDirectives\Tests\Unit;

use Illuminate\Support\Facades\Blade;
use Kanagama\BladeDirectives\Tests\TestCase;

/**
 *
 */
final class FalseDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function false()
    {
        $directive = Blade::compileString('@false($test)');
        $this->assertEquals('<?php if (!(bool) $test): ?>', trim($directive));
    }

    /**
     * @test
     */
    public function endFalse()
    {
        $directive = Blade::compileString('@endfalse');
        $this->assertEquals('<?php endif; ?>', trim($directive));
    }
}
