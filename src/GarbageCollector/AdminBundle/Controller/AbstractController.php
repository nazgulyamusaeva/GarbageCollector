<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/29/16
 * Time: 7:52 PM
 */

namespace GarbageCollector\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractController extends Controller {

    public function save() {
        $entities = func_get_args();
        $em = $this->getDoctrine()->getManager();

        foreach ($entities as $e) {
            $em->persist($e);
        }

        $em->flush();
    }

    public function getRepository($name) {
        return $this->getDoctrine()->getManager()->getRepository($name);
    }
}