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
        $colors = [
            'foreground' => 'white',
            'background' => 'black'
        ];

        $template = 'default/index.html.twig';
        $args = [
            'colors' => $colors,
        ];
        return $this->render($template, $args);
    }

    /**
     * @Route("/pinkblue", name="pinkblue")
     */
    public function pinkblue()
    {
        $colors = [
            'foreground' => 'blue',
            'background' => 'pink'
        ];

        $template = 'default/index.html.twig';
        $args = [
            'colors' => $colors,
        ];
        return $this->render($template, $args);
    }

}
