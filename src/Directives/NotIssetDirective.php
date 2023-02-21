<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string notIsset(string $conditions)
 * @method string endNotIsset()
 */
final class NotIssetDirective implements Directive
{
    /**
     * @param  string  $conditions
     * @return string
     */
    public function notIsset(string $conditions): string
    {
        return <<<EOT
            <?php if (!isset({$conditions})): ?>
        EOT;
    }

    /**
     * @return string
     */
    public function endNotIsset(): string
    {
        return <<<EOT
            <?php endif; ?>
        EOT;
    }
}
