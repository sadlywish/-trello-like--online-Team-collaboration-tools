<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Cpuall;
use AppBundle\Form\CpuallType;

/**
 * Cpuall controller.
 *
 * @Route("/cpuall")
 */
class CpuallController extends Controller
{

    /**
     * Lists all Cpuall entities.
     *
     * @Route("/", name="cpuall")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Cpuall')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Cpuall entity.
     *
     * @Route("/", name="cpuall_create")
     * @Method("POST")
     * @Template("AppBundle:Cpuall:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Cpuall();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cpuall_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Cpuall entity.
     *
     * @param Cpuall $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Cpuall $entity)
    {
        $form = $this->createForm(new CpuallType(), $entity, array(
            'action' => $this->generateUrl('cpuall_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Cpuall entity.
     *
     * @Route("/new", name="cpuall_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cpuall();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cpuall entity.
     *
     * @Route("/{id}", name="cpuall_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cpuall')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cpuall entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cpuall entity.
     *
     * @Route("/{id}/edit", name="cpuall_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cpuall')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cpuall entity.');
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
    * Creates a form to edit a Cpuall entity.
    *
    * @param Cpuall $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Cpuall $entity)
    {
        $form = $this->createForm(new CpuallType(), $entity, array(
            'action' => $this->generateUrl('cpuall_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Cpuall entity.
     *
     * @Route("/{id}", name="cpuall_update")
     * @Method("PUT")
     * @Template("AppBundle:Cpuall:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Cpuall')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cpuall entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cpuall_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Cpuall entity.
     *
     * @Route("/{id}", name="cpuall_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Cpuall')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cpuall entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cpuall'));
    }

    /**
     * Creates a form to delete a Cpuall entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cpuall_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
