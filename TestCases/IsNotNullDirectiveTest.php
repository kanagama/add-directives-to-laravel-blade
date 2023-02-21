<?php

namespace Kanagama\BladeDirectives\TestCases;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

/**
 *
 */
final class IsNotNullDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function isNotNull()
    {
        $directive = Blade::compileString('@isnotnull($test)');
        $this->assertEquals('<?php if (!is_null($test)): ?>', trim($directive));
    }

    /**
     * @test
     */
    public function endIsNotNull()
    {
        $directive = Blade::compileString('@endisnotnull');
        $this->assertEquals('<?php endif; ?>', trim($directive));
    }
}
