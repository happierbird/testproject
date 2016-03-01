<?php
namespace AppBundle\Response\Decorator;

use Symfony\Component\HttpFoundation\Response;

class ResponseDecoratorFactory
{
    public static function getDecoratorInstance(Response $response, $type, $options = array())
    {
        // First I wanted to add more decorators, but no time for that
        switch ($type) {
            case 'png':
                $decorator = new PngResponseDecorator($response, $options);
                break;
            default:
                $decorator = new PngResponseDecorator($response, $options);
                break;
        }

        return $decorator;
    }
}