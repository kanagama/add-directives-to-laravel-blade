<?php

namespace Kanagama\BladeDirectives\Directives;

abstract class Directive
{
    /**
     * @var string
     */
    protected const END_IF = '<?php endif ?>';
    /**
     * @var string
     */
    protected const END_FOR = '<?php endfor ?>';
    /**
     * @var string
     */
    protected const END_FOREACH = '<php endforeach ?>';
}
