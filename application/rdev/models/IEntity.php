<?php
/**
 * Copyright (C) 2014 David Young
 *
 * Defines the interface for entity models to implement
 */
namespace RDev\Models;

interface IEntity
{
    /**
     * Gets the database Id
     *
     * @return int|string The database Id
     */
    public function getId();

    /**
     * Sets the database Id of the entity
     *
     * @param int|string $id The database Id
     */
    public function setId($id);
} 