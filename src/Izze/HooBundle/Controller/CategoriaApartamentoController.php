<?php

namespace Izze\HooBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Izze\HooBundle\Entity\CategoriaApartamento;
use Izze\HooBundle\Form\CategoriaApartamentoType;

/**
 * CategoriaApartamento controller.
 *
 */
class CategoriaApartamentoController extends Controller
{

    /**
     * Lists all CategoriaApartamento entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('IzzeHooBundle:CategoriaApartamento')->findAll();

        return $this->render('IzzeHooBundle:CategoriaApartamento:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new CategoriaApartamento entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new CategoriaApartamento();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_apartamento_show', array('id' => $entity->getId())));
        }

        return $this->render('IzzeHooBundle:CategoriaApartamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a CategoriaApartamento entity.
    *
    * @param CategoriaApartamento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(CategoriaApartamento $entity)
    {
        $form = $this->createForm(new CategoriaApartamentoType(), $entity, array(
            'action' => $this->generateUrl('categoria_apartamento_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new CategoriaApartamento entity.
     *
     */
    public function newAction()
    {
        $entity = new CategoriaApartamento();
        $form   = $this->createCreateForm($entity);

        return $this->render('IzzeHooBundle:CategoriaApartamento:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a CategoriaApartamento entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IzzeHooBundle:CategoriaApartamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoriaApartamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IzzeHooBundle:CategoriaApartamento:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing CategoriaApartamento entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IzzeHooBundle:CategoriaApartamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoriaApartamento entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('IzzeHooBundle:CategoriaApartamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a CategoriaApartamento entity.
    *
    * @param CategoriaApartamento $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(CategoriaApartamento $entity)
    {
        $form = $this->createForm(new CategoriaApartamentoType(), $entity, array(
            'action' => $this->generateUrl('categoria_apartamento_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing CategoriaApartamento entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('IzzeHooBundle:CategoriaApartamento')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CategoriaApartamento entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categoria_apartamento_edit', array('id' => $id)));
        }

        return $this->render('IzzeHooBundle:CategoriaApartamento:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a CategoriaApartamento entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('IzzeHooBundle:CategoriaApartamento')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CategoriaApartamento entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoria_apartamento'));
    }

    /**
     * Creates a form to delete a CategoriaApartamento entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoria_apartamento_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
