<?php

namespace Izze\HooBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Security("has_role('ROLE_USER')")
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('IzzeHooBundle:Default:index.html.twig');
    }
}
