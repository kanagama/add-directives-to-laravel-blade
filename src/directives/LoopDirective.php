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
                for (\$iteration = 0; \$iteration < {$conditions}; \$iteration++):
                    \$currentLoopHiddens[] = \$iteration;
                endfor;

                \$__env->addLoop(\$currentLoopHiddens);

                foreach (\$currentLoopHiddens as \$currentLoopHidden) :
                    \$__env->incrementLoopIndices();
                    \$loop = \$__env->getLastLoop();
            ?>
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
