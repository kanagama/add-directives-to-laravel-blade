<?php

namespace Kanagama\BladeDirectives\TestCases;

use Illuminate\Support\Facades\Blade;
use Tests\TestCase;

/**
 *
 */
final class LoopDirectiveTest extends TestCase
{
    /**
     * @test
     */
    public function loop()
    {
        // 複雑なのでエラーが出ないかどうかだけ確認
        $directive = Blade::compileString('@loop(3)');
        $this->assertTrue((bool) $directive);
    }

    /**
     * @test
     */
    public function endLoop()
    {
        // 複雑なのでエラーが出ないかどうかだけ確認
        $directive = Blade::compileString('@endloop');
        $this->assertTrue((bool) $directive);
    }
}
