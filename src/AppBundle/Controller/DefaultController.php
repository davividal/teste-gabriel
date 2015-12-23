<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $bugsnagCli = new \Bugsnag_Client('9e189108c4ab434fce86a34bc4c02ca1');
        $bugsnagCli->notifyException(new \Exception());
        throw new \Exception('teste');

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }

    /**
     * @Route("/teste", name="teste")
     */
    public function testeAction(Request $request)
    {

        return new Response('teste');
    }

    /**
     * @Route("/teste2", name="teste2")
     */
    public function teste2Action(Request $request)
    {

        return new Response('teste2');
    }
}