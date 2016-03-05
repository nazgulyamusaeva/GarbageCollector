<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/6/16
 * Time: 1:22 AM
 */

namespace GarbageCollector\AndroidBundle\Controller;

use GarbageCollector\AdminBundle\Controller\AbstractController;
use GarbageCollector\EntityBundle\Entity\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class AndroidController extends AbstractController {

    public function newRequestAction() {
        $request = new Request();
        $request->setComment("Мой комментарий");
        $request->setGarbageCan($this->getRepository('GarbageCollectorEntityBundle:GarbageCan')->find(1));

        $this->save($request);

        return new JsonResponse(array(
            "requestSent" => true
        ));
    }
}