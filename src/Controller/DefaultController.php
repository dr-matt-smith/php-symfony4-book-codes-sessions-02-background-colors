<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $colours = [
            'foreground' => 'blue',
            'background' => 'pink'
        ];
        $default_colours = true;

        $template = 'default/index.html.twig';
        $args = [
            'colours' => $colours,
            'default_colours' => $default_colours
        ];
        return $this->render($template, $args);
    }
}
