<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/29/16
 * Time: 7:56 PM
 */

namespace GarbageCollector\AdminBundle\Controller;

use GarbageCollector\EntityBundle\Entity\GarbageCan;
use GarbageCollector\EntityBundle\Form\GarbageCanType;
use Symfony\Component\HttpFoundation\Request;

class GarbageCanController extends CRUDController {

    public function listAction()
    {
        $garbageCans = $this->getRepository('GarbageCollectorEntityBundle:GarbageCan')->findAll();
        return $this->render('GarbageCollectorAdminBundle:GarbageCan:list.html.twig', array(
            'garbageCans' => $garbageCans
        ));
    }

    public function newAction(Request $request)
    {
        $garbageCan = new GarbageCan();
        $form = $this->createForm(new GarbageCanType(), $garbageCan);

        if ($request->isMethod("GET")) {
            return $this->render('GarbageCollectorAdminBundle:GarbageCan:new.html.twig', array(
                'form' => $form->createView()
            ));
        }

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->save($form->getData());
            $this->getFlashBag()->add('success', 'info.flash.savesuccess');

            return $this->render('GarbageCollectorAdminBundle:GarbageCan:new.html.twig', array(
                'form' => $form->createView()
            ));
        }

        $this->getFlashBag()->add('error', 'info.flash.saveerror');
        return $this->render('GarbageCollectorAdminBundle:GarbageCan:new.html.twig', array(
            'form' => $form->createView()
        ));
    }

    public function editAction(Request $request, $id)
    {
        $garbageCan = $this->getRepository('GarbageCollectorEntityBundle:GarbageCan')->find($id);

        if(!$garbageCan) {
            $this->getFlashBag()->add('error', 'info.flash.datawithidnotfound');
            return $this->redirectToRoute('admin_garbagecan_list');
        }

        $form = $this->createForm(new GarbageCanType(), $garbageCan);

        if ($request->isMethod("GET")) {
            return $this->render('GarbageCollectorAdminBundle:GarbageCan:edit.html.twig', array(
                'form' => $form->createView(), 'garbagecan' => $garbageCan
            ));
        }

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->save($form->getData());
            $this->getFlashBag()->add('success', 'info.flash.updatesuccess');

            return $this->render('GarbageCollectorAdminBundle:GarbageCan:edit.html.twig', array(
                'form' => $form->createView(), 'garbagecan' => $garbageCan
            ));
        }

        $this->getFlashBag()->add('error', 'info.flash.updateerror');
        return $this->render('GarbageCollectorAdminBundle:GarbageCan:edit.html.twig', array(
            'form' => $form->createView(), 'garbagecan' => $garbageCan
        ));
    }

    public function showAction($id)
    {
        $garbageCan = $this->getRepository('GarbageCollectorEntityBundle:GarbageCan')->find($id);

        if(!$garbageCan) {
            $this->getFlashBag()->add('error', 'info.flash.datawithidnotfound');
            return $this->redirectToRoute('admin_garbagecan_list');
        }

        return $this->render('GarbageCollectorAdminBundle:GarbageCan:show.html.twig', array(
            'garbagecan' => $garbageCan
        ));
    }

    public function deleteAction($id)
    {

    }


}