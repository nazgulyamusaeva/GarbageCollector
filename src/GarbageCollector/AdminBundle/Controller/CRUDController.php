<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/29/16
 * Time: 7:57 PM
 */

namespace GarbageCollector\AdminBundle\Controller;

abstract class CRUDController extends AbstractController {

    public abstract function listAction();

    public abstract function newAction();

    public abstract function editAction($id);

    public abstract function showAction($id);

    public abstract function deleteAction($id);
}