<?php

namespace Kanagama\BladeDirectives;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Kanagama\BladeDirectives\Directives\FalseDirective;
use Kanagama\BladeDirectives\Directives\IsNotNullDirective;
use Kanagama\BladeDirectives\Directives\IsNullDirective;
use Kanagama\BladeDirectives\Directives\LoopDirective;
use Kanagama\BladeDirectives\Directives\NotEmptyDirective;
use Kanagama\BladeDirectives\Directives\TrueDirective;

class BladeDirectivesServiceProvider extends ServiceProvider
{
    /**
     * incrementLoopIndices
     */
    public function boot()
    {
        $directives = [
            new FalseDirective(),
            new IsNotNullDirective(),
            new IsNullDirective(),
            new LoopDirective(),
            new NotEmptyDirective(),
            new TrueDirective(),
        ];

        foreach ($directives as $directive) {
            foreach (get_class_methods($directive) as $method) {
                $anonymousFunction = function ($conditions) use ($directive, $method) {
                    // パラメータが存在する、かつメソッド名が end で始まってない
                    return !empty($conditions) && (strpos($method, 'end') !== 0)
                        ? $directive->{$method}($conditions)
                        : $directive->{$method}();
                };

                // ディレクティブ追加
                Blade::directive(strtoupper($method), $anonymousFunction);
            }
        }
    }
}