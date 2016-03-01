<?php
namespace AppBundle\Response\Decorator;

use Symfony\Component\HttpFoundation\Response;


class ResponseDecorator extends AbstractResponseDecorator
{
    protected $response = null;
    protected $parameters = null;

    public function __construct(Response $response, array $parameters = array())
    {
        $this->response = $response;
        $this->parameters = $parameters;
    }

    protected function getResponse()
    {
        return $this->response;
    }

    protected function getParameters()
    {
        return $this->parameters;
    }

    public function output()
    {
        $this->getResponse()->output();
    }
}