<?php
namespace AppBundle\Response\Decorator;

use AppBundle\Response;


abstract class AbstractResponseDecorator
{
    abstract public function output();
}