<?php

namespace Loiste\MinesweeperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('LoisteMinesweeperBundle:Default:index.html.twig');
    }
}
