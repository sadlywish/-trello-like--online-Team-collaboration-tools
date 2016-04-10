<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Cpuavg;
use AppBundle\Form\CpuavgType;

/**
 * Cpuavg controller.
 *
 * @Route("/cpuavg")
 */
class CpuavgController extends Controller
{

    /**
     * Lists all Cpuavg entities.
     *
     * @Route("/", name="cpuavg")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Cpuavg')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Cpuavg entity.
     *
     * @Route("/", name="cpuavg_create")
     * @Method("POST")
     * @Template("AppBundle:Cpuavg:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Cpuavg();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cpuavg_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Cpuavg entity.
     *
     * @param Cpuavg $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cpuavg $entity)
    {
        $form = $this->createForm(new CpuavgType(), $entity, array(
            'action' => $this->generateUrl('cpuavg_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cpuavg entity.
     *
     * @Route("/new", name="cpuavg_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cpuavg();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cpuavg entity.
     *
     * @Route("/{id}", name="cpuavg_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cpuavg')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cpuavg entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cpuavg entity.
     *
     * @Route("/{id}/edit", name="cpuavg_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cpuavg')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cpuavg entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Cpuavg entity.
    *
    * @param Cpuavg $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cpuavg $entity)
    {
        $form = $this->createForm(new CpuavgType(), $entity, array(
            'action' => $this->generateUrl('cpuavg_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cpuavg entity.
     *
     * @Route("/{id}", name="cpuavg_update")
     * @Method("PUT")
     * @Template("AppBundle:Cpuavg:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cpuavg')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cpuavg entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cpuavg_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Cpuavg entity.
     *
     * @Route("/{id}", name="cpuavg_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Cpuavg')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cpuavg entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cpuavg'));
    }

    /**
     * Creates a form to delete a Cpuavg entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cpuavg_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
