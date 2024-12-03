<?php

namespace Ecoleplus\EcoleplusUi\Traits;

trait HasContext
{
    protected function getContext(string $key, $default = null)
    {
        return request()->get("_context.{$key}", $default);
    }
}
