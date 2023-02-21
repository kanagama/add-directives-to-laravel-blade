<?php

namespace Kanagama\BladeDirectives\TestCases;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

/**
 *
 */
final class TrueDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function true()
    {
        $directive = Blade::compileString('@true($test)');
        $this->assertEquals('<?php if ((bool) $test): ?>', trim($directive));
    }

    /**
     * @test
     */
    public function endTrue()
    {
        $directive = Blade::compileString('@endtrue');
        $this->assertEquals('<?php endif; ?>', trim($directive));
    }
}
