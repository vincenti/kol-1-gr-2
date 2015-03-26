<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }


    /* A */

    /* B */

    /* C */

    /* D */
    /**
     * @Route("/boat.html", name="boat")
     */
    public function boatAction()
    {
        return $this->render('default/boat.html.twig');
    }

    /* E */

    /* F */
    /**
    * @Route("/fear.html", name="fear")
    */
    public function fearAction()
    {
    return $this->render('default/fear.html.twig');
    }

    /* G */

    /* H */

    /* I */

    /* J */

    /* K */

    /* L */

    /* M */

    /* N */

    /* O */

    /* P */

    /* Q */

    /* R */

    /* S */

    /* T */

    /* U */

    /* V */

    /* W */

    /* X */

    /* Y */

    /* Z */

}
