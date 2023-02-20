<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string false(string $conditions)
 * @method string endFalse(): string
 */
final class FalseDirective implements Directive
{
    /**
     * @param  string  $conditions
     * @return string
     */
    public function false(string $conditions): string
    {
        return <<<EOT
            <?php if (!(bool) {$conditions}): ?>
        EOT;
    }

    /**
     * @return string
     */
    public function endFalse(): string
    {
        return <<<EOT
            <?php endif; ?>
        EOT;
    }
}
