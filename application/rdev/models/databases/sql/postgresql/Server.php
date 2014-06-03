<?php
/**
 * Copyright (C) 2014 David Young
 *
 * Defines the base PostgreSQL server object
 */
namespace RDev\Models\Databases\SQL\PostgreSQL;
use RDev\Models\Databases\SQL;

abstract class Server extends SQL\Server
{
    /**
     * {@inheritdoc}
     */
    public function getConnectionString()
    {
        return "pgsql: host=" . $this->host . " dbname=" . $this->databaseName;
    }
} 