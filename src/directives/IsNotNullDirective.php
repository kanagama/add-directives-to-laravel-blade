<?php

namespace Kanagama\BladeDirectives\Directives;

/**
 * @method string isNotNull(string $conditions)
 * @method string endIsNotNull(): string
 */
final class IsNotNullDirective extends Directive
{
    /**
     * @param  string  $conditions
     * @return string
     */
    public function isNotNull(string $conditions): string
    {
        return <<<EOT
            <?php if (!is_null({$conditions})): ?>
        EOT;
    }

    /**
     * @return string
     */
    public function endIsNotNull(): string
    {
        return <<<EOT
            {self::END_IF}
        EOT;
    }
}
