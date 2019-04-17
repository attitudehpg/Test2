<?php

public function listAction(Request $request)
{
    $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM AcmeMainBundle:Article a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1), /*page number*/
        10 /*limit per page*/
    );

    // parameters to template
    return $this->render('AcmeMainBundle:Article:list.html.twig', array('pagination' => $pagination));
}
public function listAction(Request $request)
    {
      $em    = $this->get('doctrine.orm.entity_manager');
      $dql   = "SELECT a FROM AcmeMainBundle:Article a";
      $query = $em->createQuery($dql);

      $paginator  = $this->get('knp_paginator');
      $pagination = $paginator->paginate(
                                        $query, /* query NOT result */
                                        $request
                                                ->query
                                                ->getInt('page', 1), /*page number*/
                                        10 /*limit per page*/
      );

      // parameters to template
      return $this->render('AcmeMainBundle:Article:list.html.twig', array('pagination' => $pagination));
    }
