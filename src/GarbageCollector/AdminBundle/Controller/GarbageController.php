<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/29/16
 * Time: 7:56 PM
 */

namespace GarbageCollector\AdminBundle\Controller;

class GarbageController extends CRUDController {

    public function listAction()
    {
        return $this->render('GarbageCollectorAdminBundle:Garbage:list.html.twig', array(

        ));
    }

    public function newAction()
    {
        return $this->render('GarbageCollectorAdminBundle:Garbage:new.html.twig', array(

        ));
    }

    public function editAction($id)
    {
        return $this->render('GarbageCollectorAdminBundle:Garbage:edit.html.twig', array(

        ));
    }

    public function showAction($id)
    {
        return $this->render('GarbageCollectorAdminBundle:Garbage:show.html.twig', array(

        ));
    }

    public function deleteAction($id)
    {

    }


}