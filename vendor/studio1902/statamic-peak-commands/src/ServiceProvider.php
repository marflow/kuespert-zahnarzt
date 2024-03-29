<?php

namespace Studio1902\PeakCommands;

use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $commands = [
        Commands\AddBlock::class,
        Commands\AddCollection::class,
        Commands\AddPartial::class,
        Commands\AddSet::class,
        Commands\ClearSite::class,
        Commands\InstallBlock::class,
        Commands\InstallPreset::class,
    ];

    public function bootAddon()
    {
        $this->registerPublishableStubs();
    }

    protected function registerPublishableStubs()
    {
        $this->publishes([
            __DIR__ . '/../resources/stubs' => resource_path('stubs/vendor/statamic-peak-commands'),
        ], 'statamic-peak-commands-stubs');
    }
}
