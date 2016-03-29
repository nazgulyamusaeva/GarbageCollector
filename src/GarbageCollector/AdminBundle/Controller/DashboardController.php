<?php

namespace GarbageCollector\AdminBundle\Controller;

class DashboardController extends AbstractController
{
    public function indexAction()
    {
        return $this->redirectToRoute("admin_dashboard_dashboard");
    }

    public function dashboardAction() {
        $garbageCans = $this->getRepository('GarbageCollectorEntityBundle:GarbageCan')->findAll();

        return $this->render('GarbageCollectorAdminBundle:Dashboard:dashboard.html.twig', array(
            'garbageCans' => $garbageCans
        ));
    }

}
