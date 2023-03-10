<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string loop(string $conditions)
 * @method string endLoop(): string
 */
final class LoopDirective implements Directive
{
    /**
     * @param  int  $conditions
     * @return string
     */
    public function loop(int $conditions): string
    {
        return <<<EOT
            <?php
                \$currentLoopHiddens = [];
                for (\$iteration = 0; \$iteration < (int) {$conditions}; \$iteration++):
                    \$currentLoopHiddens[] = \$iteration;
                endfor;

                \$this->addLoop(\$currentLoopHiddens);

                foreach (\$currentLoopHiddens as \$currentLoopHidden):
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
            <?php
                endforeach;
                \$__env->popLoop();
                \$loop = \$__env->getLastLoop();
            ?>
        EOT;
    }
}
