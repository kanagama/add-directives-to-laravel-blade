<?php

namespace Kanagama\BladeDirectives\TestCases;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

/**
 *
 */
final class NotEmptyDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function notEmpty()
    {
        $directive = Blade::compileString('@notempty($test)');
        $this->assertEquals('<?php if (!empty($test)): ?>', trim($directive));
    }

    /**
     * @test
     */
    public function endNotEmpty()
    {
        $directive = Blade::compileString('@endnotempty');
        $this->assertEquals('<?php endif; ?>', trim($directive));
    }
}
