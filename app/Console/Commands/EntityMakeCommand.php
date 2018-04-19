<?php

namespace App\Console\Commands;

use Illuminate\Console\GeneratorCommand;

class EntityMakeCommand extends GeneratorCommand
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:entity';

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
    protected $type = 'Entity';

    /**
     * Build the model class with the given name.
     *
     * @param  string  $name
     * @return string
     */
    protected function buildClass($name)
    {
        $this->call('make:repository', [
            'name' => $this->argument('name') . 'Repository'
        ]);

        $this->call('make:migration', [
            'name' => 'Create' . str_plural($this->argument('name')) . 'Table'
        ]);

        $entityName = strtolower($this->argument('name'));

        $stub = $this->files->get($this->getStub());

        $replace = [
            'DummyCollection' => $entityName,
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
        return __DIR__ . '/Stubs/Entity.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Entities';
    }
}