<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/6/16
 * Time: 1:02 AM
 */

namespace GarbageCollector\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class RequestController extends CRUDController {

    public function listAction()
    {
        $requests = $this->getRepository('GarbageCollectorEntityBundle:Request')->findAll();
        return $this->render('GarbageCollectorAdminBundle:Request:list.html.twig', array(
            'requests' => $requests
        ));
    }

    public function newAction(Request $request)
    {
        // No implementation
    }

    public function editAction(Request $request, $id)
    {
        // No implementation.
    }

    public function showAction($id)
    {
        $request = $this->getRepository('GarbageCollectorEntityBundle:Request')->find($id);

        if(!$request) {
            $this->getFlashBag()->add('error', 'info.flash.datawithidnotfound');
            return $this->redirectToRoute('admin_request_list');
        }

        return $this->render('GarbageCollectorAdminBundle:Request:show.html.twig', array(
            'request' => $request
        ));
    }

    public function deleteAction($id)
    {
        // TODO: Implement deleteAction() method.
    }


}