<?php
/**
 * Copyright (C) 2014 David Young
 *
 * Defines the PDO driver for a MySQL database
 */
namespace RDev\Databases\SQL\PDO\MySQL;
use RDev\Databases\SQL;
use RDev\Databases\SQL\PDO;
use RDev\Databases\SQL\Providers;

class Driver extends PDO\Driver
{
    /**
     * {@inheritdoc}
     */
    protected function getDSN(SQL\Server $server, array $options = [])
    {
        $dsn = "mysql: host=" . $server->getHost() . ";dbname=" . $server->getDatabaseName() . ";"
            . "port=" . $server->getPort() . ";charset=" . $server->getCharset() . ";";

        if(isset($options["unix_socket"]))
        {
            $dsn .= "unix_socket=" . $options["unix_socket"] . ";";
        }

        return $dsn;
    }

    /**
     * {@inheritdoc}
     */
    protected function setProvider()
    {
        $this->provider = new Providers\MySQL();
    }
} 