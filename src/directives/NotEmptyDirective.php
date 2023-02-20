<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string notEmpty(string $conditions)
 * @method string endNotEmpty()
 */
final class NotEmptyDirective extends Directive
{
    /**
     * @param  string  $conditions
     * @return string
     */
    public function notEmpty(string $conditions): string
    {
        return <<<EOT
            <?php if (!empty({$conditions}): ?>
        EOT;
    }

    /**
     * @return string
     */
    public function endNotEmpty(): string
    {
        return <<<EOT
            {self::END_IF}
        EOT;
    }
}
