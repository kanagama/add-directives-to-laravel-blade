<?php

namespace Kanagama\BladeDirectives\TestCases;

use Tests\TestCase;

/**
 * @method string notEmpty(string $conditions)
 * @method string endNotEmpty(): string
 */
class Directive extends TestCase
{
    protected $blade;

    /**
     * @return void
     */
    public function setUp(): void
    {
        $this->blade = app('blade.compiler');
    }
}
