<?php
/**
 * Created by IntelliJ IDEA.
 * User: i-tsumuraya
 * Date: 2013/06/18
 * Time: 20:33
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\RentacarBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

/*
 * @Route("/reservation")
 */
class ReservationController extends AppController
{
    /*
     * @Route("/", name="reservation")
     * @Template
     */
    public function indexAction(Request $request)
    {
        $retun array();
    }

    /*
     * @Route("/new", name="reservation_new")
     * @Template
     */
    public function newAction(Request $request)
    {
        return array();
    }

    /*
     * @Route("/car", name="reservation_car")
     * @Template
     */
    public function carAction(Request $request)
    {
        return array();
    }

    /*
     * @Route("/option", name="reservation_optin")
     * @Template
     */
    public function optionAction(Request $request)
    {
        return array();
    }

    /*
     * @Route("/confirm", name="reservation_confirm")
     * @Template
     */
    public function confirmAction(Request $request)
    {
        return array();
    }

    /*
     * @Route("/finish", name="reservation_finish")
     * @Template
     */
    public function finishAction(Request $request)
    {
        return array();
    }

}
