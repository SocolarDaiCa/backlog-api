<?php

namespace Itigoppo\BacklogApi\Connector;

abstract class Connector implements ConnectorInterface
{
    const API_URL = 'https://%1$s.%2$s/api/v2/';
}
