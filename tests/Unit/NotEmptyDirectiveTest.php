<?php

namespace Kanagama\BladeDirectives\Tests\Unit;

use Illuminate\Support\Facades\Blade;
use Kanagama\BladeDirectives\Tests\TestCase;

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
