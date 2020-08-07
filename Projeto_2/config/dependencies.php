<?php

use Alura\Cursos\Infra\EntityManagerCreator;
use Doctrine\ORM\EntityManagerInterface;

$conteinerBuilder = new \DI\ContainerBuilder();

$conteinerBuilder->addDefinitions([
    EntityManagerInterface::class => function()
    {
        return (new EntityManagerCreator())->getEntityManager();
    }
]);

return $conteinerBuilder->build();