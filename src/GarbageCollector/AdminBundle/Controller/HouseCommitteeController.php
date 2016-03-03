<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/3/16
 * Time: 10:58 PM
 */

namespace GarbageCollector\AdminBundle\Controller;

use Application\FOS\UserBundle\Entity\User;
use Application\FOS\UserBundle\Form\UserType;
use Symfony\Component\HttpFoundation\Request;

class HouseCommitteeController extends CRUDController {

    public function listAction()
    {
        $houseCommittees = $this->getRepository('ApplicationFOSUserBundle:User')->findAll();
        return $this->render('GarbageCollectorAdminBundle:HouseCommittee:list.html.twig', array(
            'houseCommittees' => $houseCommittees
        ));
    }

    public function newAction(Request $request)
    {
        $houseCommittee = new User();
        $form = $this->createForm(new UserType(), $houseCommittee);

        if ($request->isMethod("GET")) {
            return $this->render('GarbageCollectorAdminBundle:HouseCommittee:new.html.twig', array(
                'form' => $form->createView()
            ));
        }

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->save($form->getData());
            $this->getFlashBag()->add('success', 'info.flash.savesuccess');

            return $this->render('GarbageCollectorAdminBundle:HouseCommittee:new.html.twig', array(
                'form' => $form->createView()
            ));
        }

        $this->getFlashBag()->add('error', 'info.flash.saveerror');
        return $this->render('GarbageCollectorAdminBundle:HouseCommittee:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $houseCommittee = $this->getRepository('ApplicationFOSUserBundle:User')->find($id);

        if(!$houseCommittee) {
            $this->getFlashBag()->add('error', 'info.flash.datawithidnotfound');
            return $this->redirectToRoute('admin_housecommittee_list');
        }

        $form = $this->createForm(new UserType(), $houseCommittee);

        if ($request->isMethod("GET")) {
            return $this->render('GarbageCollectorAdminBundle:HouseCommittee:edit.html.twig', array(
                'form' => $form->createView(), 'housecommittee' => $houseCommittee
            ));
        }

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->save($form->getData());
            $this->getFlashBag()->add('success', 'info.flash.updatesuccess');

            return $this->render('GarbageCollectorAdminBundle:HouseCommittee:edit.html.twig', array(
                'form' => $form->createView(), 'housecommittee' => $houseCommittee
            ));
        }

        $this->getFlashBag()->add('error', 'info.flash.updateerror');
        return $this->render('GarbageCollectorAdminBundle:HouseCommittee:edit.html.twig', array(
            'form' => $form->createView(), 'housecommittee' => $houseCommittee
        ));
    }

    public function showAction($id)
    {
        $houseCommittee = $this->getRepository('ApplicationFOSUserBundle:User')->find($id);

        if(!$houseCommittee) {
            $this->getFlashBag()->add('error', 'info.flash.datawithidnotfound');
            return $this->redirectToRoute('admin_housecommittee_list');
        }

        return $this->render('GarbageCollectorAdminBundle:HouseCommittee:show.html.twig', array(
            'housecommittee' => $houseCommittee
        ));
    }

    public function deleteAction($id)
    {
        // TODO: Implement deleteAction() method.
    }


}