<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AppBundle\Response\Decorator\ResponseDecoratorFactory;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function infoAction($id, $width, $height, $bgcolor, $fontcolor)
    {
        // TODO: inject doctrine as a service and make a join with Reviews
        $user = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($id);

        if ($user && $user->getActive()) {

            $dummy_rating = '30%';

            $decoratorParameters = array(
                'width' => $width,
                'height' => $height,
                'bgcolor' => $bgcolor,
                'fontcolor' => $fontcolor,

            );
            $response = new Response($dummy_rating);
            $responseDecorator = ResponseDecoratorFactory::getDecoratorInstance($response, 'json', $decoratorParameters);
            $responseDecorator->output();
            // TODO: cache the response
        } else {
            throw $this->createNotFoundException(
                'No user found for id '.$id
            );
        }
    }
}
