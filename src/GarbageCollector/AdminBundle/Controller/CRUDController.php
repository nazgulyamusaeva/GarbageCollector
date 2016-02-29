<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/29/16
 * Time: 7:57 PM
 */

namespace GarbageCollector\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

abstract class CRUDController extends AbstractController {

    public abstract function listAction();

    public abstract function newAction(Request $request);

    public abstract function editAction(Request $request, $id);

    public abstract function showAction($id);

    public abstract function deleteAction($id);
}