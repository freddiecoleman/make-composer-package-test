<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CommanderGenerateCommand extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'commander:generate';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Generate command and handler classes.';

    /**
     * Create a new command instance.
     *
     * @return \CommanderGenerateCommand
     */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$this->info('All done!');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array(
			array('path', InputArgument::REQUIRED, 'Path to the command class to generate.'),
		);
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('properties', null, InputOption::VALUE_OPTIONAL, 'List of properties to build.', null),
			array('base', null, InputOption::VALUE_OPTIONAL, 'The base directory to begin from.', null),
		);
	}

}
