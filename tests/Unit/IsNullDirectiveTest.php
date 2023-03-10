<?php

namespace Kanagama\BladeDirectives\Tests\Unit;

use Illuminate\Support\Facades\Blade;
use Kanagama\BladeDirectives\Tests\TestCase;

/**
 *
 */
final class IsNullDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function isNullMethod()
    {
        $directive = Blade::compileString('@isnull($test)');
        $this->assertEquals('<?php if (is_null($test)): ?>', trim($directive));
    }

    /**
     * @test
     */
    public function endIsNull()
    {
        $directive = Blade::compileString('@endisnull');
        $this->assertEquals('<?php endif; ?>', trim($directive));
    }
}
