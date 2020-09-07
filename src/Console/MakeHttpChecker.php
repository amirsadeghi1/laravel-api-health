<?php

namespace ProtoneMedia\ApiHealth\Console;

use Illuminate\Console\GeneratorCommand;

class MakeHttpChecker extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:http-checker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a HTTP GET checker';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Checker';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../stubs/http-checker.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Checkers';
    }
}
