<?php

namespace GarbageCollector\AdminBundle\Controller;

class DashboardController extends AbstractController
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
