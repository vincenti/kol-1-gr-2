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
    /**
     * @Route("/bear.html", name="bear")
     */
    public function bearAction()
    {
        return $this->render('default/bear.html.twig');
    }
    /**
     * @Route("/bad.html", name="bad")
     */
    public function badAction()
    {
        return $this->render('default/bad.html.twig');
    }

    /* C */

    /* D */
    /**
     * @Route("/boat.html", name="boat")
     */
    public function boatAction()
    {
        return $this->render('default/boat.html.twig');
    }
    /**
     * @Route("/brave.html", name="brave")
     */
    public function braveAction()
    {
        return $this->render('default/brave.html.twig');
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
    /**
    * @Route("/feet.html", name="feet")
    */
    public function feetAction()
    {
    return $this->render('default/feet.html.twig');
    }

    /* G */

    /* H */

    /**
     * @Route("/half.html", name="half")
     */
    public function halfAction()
    {
        return $this->render('default/half.html.twig');
    }
    
    /**
     * @Route("/haste.html", name="haste")
     */
    public function hasteAction()
    {
        return $this->render('default/haste.html.twig');
    }
    
    /* I */

    /* J */

    /* K */

    /* L */
    /**
     * @Route("/little.html", name="little")
     */
    public function littleAction()
    {
        return $this->render('default/little.html.twig');
    }
    /* M */

    /* N */
    
    /**
    * @Route("/nothing.html", name="nothing")
    */
    public function  nothingAction()
    {
        return $this->render('default/nothing.html.twig');
    }

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
