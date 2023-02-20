<?php

namespace Kanagama\BladeDirectives\TestCases;

/**
 *
 */
final class LoopDirective extends Directive
{
    /**
     * @test
     */
    public function loop()
    {
        $blade = '@loop(3) Iteration #{{ $iteration }} @endloop';

        $expected = implode('', [
            '<?php for ($iteration = 0 ; $iteration < (int) 3; $iteration++): ?>',
            ' Iteration #<?php echo e($iteration); ?> ',
            '<?php endfor; ?>',
        ]);

        $this->assertSame($expected, $this->blade->compileString($blade));
    }

    /**
     * @test
     */
    public function endLoop()
    {

    }
}
