<?php

namespace App\State;

use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use DateTime;

class PlatPersister implements ProcessorInterface
{
    public function process($data, Operation $operation, array $uriVariables = [], array $context = [])
    {
        // call your persistence layer to save $data
        $data->setAddDate(new DateTime());

        return $data;
    }
}
