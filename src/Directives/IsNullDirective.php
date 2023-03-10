<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string isNull(string $conditions)
 * @method string endIsNull(): string
 */
final class IsNullDirective implements Directive
{
    /**
     * @param  string  $conditions
     * @return string
     */
    public function isNull(string $conditions): string
    {
        return <<<EOT
            <?php if (is_null({$conditions})): ?>
        EOT;
    }

    /**
     * @return string
     */
    public function endIsNull(): string
    {
        return <<<EOT
            <?php endif; ?>
        EOT;
    }
}
