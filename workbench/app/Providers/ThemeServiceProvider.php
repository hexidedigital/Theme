<?php

namespace Workbench\App\Providers;

use Illuminate\Support\ServiceProvider;
use YAAP\Theme\Exceptions\ThemeException;
use YAAP\Theme\Facades\ThemeLoader;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        try {
            ThemeLoader::init('default');
        } catch (ThemeException) {
        }
    }
}
