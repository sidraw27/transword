<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class RepositoryMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:repository';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new repository class';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Repository';

    /**
     * Build the model class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $modelName = str_replace('Repository', '', $this->argument('name'));

        $stub = $this->files->get($this->getStub());

        $replace = [
            'DummyEntity' => $modelName,
            'DummyClass' => $this->argument('name')
        ];

        return $this->replaceNamespace($stub, $name)->replaceDummy($stub, $replace);
    }

    /**
     * Replace the table for the given stub.
     *
     * @param  string  $stub
     * @param  array  $replace
     * @return string
     */
    protected function replaceDummy($stub, $replace)
    {
        foreach ($replace as $dummy => $value) {
            $stub = str_replace($dummy, $value, $stub);
        }

        return $stub;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/Stubs/Repository.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Repositories';
    }
}