<?php

namespace Magento\Bundle\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontendController extends Controller
{
    public function indexAction()
    {
        return $this->render('MagentoSiteBundle:Frontend:index.html.twig', array());
    }
}
