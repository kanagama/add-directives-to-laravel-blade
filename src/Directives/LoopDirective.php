<?php

namespace Kanagama\BladeDirectives\Directives;

use Illuminate\View\Compilers\Concerns\CompilesLoops;
use Illuminate\View\Concerns\ManagesLoops;

/**
 * @method string loop(string $conditions)
 * @method string endLoop(): string
 */
final class LoopDirective extends Directive
{
    use CompilesLoops;
    use ManagesLoops;

    /**
     * @param  int  $conditions
     * @return string
     */
    public function loop(int $conditions): string
    {
        return <<<EOT
            <?php
                \$currentLoopHiddens = [];
                for (\$iteration = 0; \$iteration < (int) {$conditions}; \$iteration++): ?>
                    \$currentLoopHiddens[] = \$iteration;
                endfor;

                \$this->addLoop(\$currentLoopHiddens);
            ?>

            <?php foreach (\$currentLoopHiddens as \$currentLoopHidden): ?>
                \$this->incrementLoopIndices();
                \$loop = \$this->getLastLoop();
        EOT;
    }

    /**
     * @return string
     */
    public function endLoop(): string
    {
        return <<<EOT
            \$this->compileEndforeach()
        EOT;
    }
}
