<?php

namespace Nue\Docs\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Blade;

use Novay\Nue\Nue;
use Nue\Docs\Docs;

class DocsServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(Docs $extension)
    {
        if (! Docs::boot()) {
            return ;
        }

        if ($views = $extension->views()) {
            $this->loadViewsFrom($views, 'nue-docs');
        }

        $this->app->booted(function () {
            Docs::routes(__DIR__.'/../../routes/web.php');
        });

        Nue::extend('docs', __CLASS__);

        $this->configureComponents();
    }

    /**
     * Configure the NueUI Blade components.
     *
     * @return void
     */
    protected function configureComponents()
    {
        $this->callAfterResolving(BladeCompiler::class, function () {
            $this->registerComponent('example');
            $this->registerComponent('header');
        });
    }

    /**
     * Register the given component.
     *
     * @param  string  $component
     * @return void
     */
    protected function registerComponent(string $component)
    {
        Blade::component('nue-docs::components.'.$component, 'nue::docs::'.$component);
    }
}