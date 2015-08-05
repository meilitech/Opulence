<?php
/**
 * Copyright (C) 2015 David Young
 *
 * Defines the interface for console requests to implement
 */
namespace Opulence\Console\Requests;
use InvalidArgumentException;

interface IRequest
{
    /**
     * Adds an argument value
     *
     * @param mixed $value The value of the argument
     */
    public function addArgumentValue($value);

    /**
     * Sets the value of an option
     * If an option with the input name already exists,
     * then the value is converted to an array and the new value is pushed
     *
     * @param string $name The name of the option
     * @param mixed $value The value of the option
     */
    public function addOptionValue($name, $value);

    /**
     * Gets all the values of arguments
     *
     * @return array The list of argument values
     */
    public function getArgumentValues();

    /**
     * Gets the name of the command the request calls
     *
     * @return string The name of the command the request calls
     */
    public function getCommandName();

    /**
     * Gets the value of an option
     *
     * @param string $name The name of the option
     * @return mixed The value of the option
     * @throws InvalidArgumentException Thrown if the option does not exist
     */
    public function getOptionValue($name);

    /**
     * Gets all the values of options
     *
     * @return array The mapping of option names to their values
     */
    public function getOptionValues();

    /**
     * Gets whether or not the input contains an option
     *
     * @param string $name The name of the option
     * @return bool True if the input has the option, otherwise false
     */
    public function optionIsSet($name);

    /**
     * Sets the name of the command the request calls
     *
     * @param string $name The name of the command the request calls
     */
    public function setCommandName($name);
}