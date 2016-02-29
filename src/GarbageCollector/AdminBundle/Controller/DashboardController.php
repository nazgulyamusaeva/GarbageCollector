<?php

namespace GarbageCollector\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->redirectToRoute("admin_dashboard_dashboard");
    }

    public function dashboardAction() {
        return $this->render('GarbageCollectorAdminBundle:Dashboard:dashboard.html.twig', array(

        ));
    }

}
