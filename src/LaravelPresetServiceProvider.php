<?php

namespace RandyRankin\LaravelPreset;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class CustomLaravelPresetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('custom-laravel-preset', function ($command) {
            CustomLaravelPreset::install();

            $command->info('A custom Laravel preset has been installed!');
            $command->info('To finish setup, run one of the following commands:');
            $command->info('If you are using npm: npm install && ./node_modules/.bin/tailwind init && npm run dev');
            $command->info('If you are using yarn: yarn && ./node_modules/.bin/tailwind init && yarn run dev');
            $command->comment('NOW you can build someting amazing!!');
        });
    }
}