<?php

namespace Techbizz\ImdbReader;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Techbizz\ImdbReader\Commands\ImdbReaderCommand;

class ImdbReaderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('imdb-reader')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_imdb-reader_table')
            ->hasCommand(ImdbReaderCommand::class);
    }
}
