<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string true(string $conditions)
 * @method string endTrue()
 */
final class TrueDirective extends Directive
{
    /**
     * @param  string  $conditions
     * @return string
     */
    public function true(string $conditions): string
    {
        return <<<EOT
            <?php if ((bool) {$conditions}): ?>
        EOT;
    }

    /**
     * @return string
     */
    public function endTrue(): string
    {
        return <<<EOT
            {self::END_IF}
        EOT;
    }
}
