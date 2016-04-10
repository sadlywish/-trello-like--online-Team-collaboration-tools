<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Memory;
use AppBundle\Form\MemoryType;

/**
 * Memory controller.
 *
 * @Route("/memory")
 */
class MemoryController extends Controller
{

    /**
     * Lists all Memory entities.
     *
     * @Route("/", name="memory")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AppBundle:Memory')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Memory entity.
     *
     * @Route("/", name="memory_create")
     * @Method("POST")
     * @Template("AppBundle:Memory:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Memory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('memory_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Memory entity.
     *
     * @param Memory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Memory $entity)
    {
        $form = $this->createForm(new MemoryType(), $entity, array(
            'action' => $this->generateUrl('memory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Memory entity.
     *
     * @Route("/new", name="memory_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Memory();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Memory entity.
     *
     * @Route("/{id}", name="memory_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Memory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Memory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Memory entity.
     *
     * @Route("/{id}/edit", name="memory_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Memory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Memory entity.');
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
    * Creates a form to edit a Memory entity.
    *
    * @param Memory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Memory $entity)
    {
        $form = $this->createForm(new MemoryType(), $entity, array(
            'action' => $this->generateUrl('memory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Memory entity.
     *
     * @Route("/{id}", name="memory_update")
     * @Method("PUT")
     * @Template("AppBundle:Memory:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AppBundle:Memory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Memory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('memory_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Memory entity.
     *
     * @Route("/{id}", name="memory_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AppBundle:Memory')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Memory entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('memory'));
    }

    /**
     * Creates a form to delete a Memory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('memory_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
