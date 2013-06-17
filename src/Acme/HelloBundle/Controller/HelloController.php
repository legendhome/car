<?php
/**
 * Created by IntelliJ IDEA.
 * User: i-tsumuraya
 * Date: 2013/06/13
 * Time: 18:02
 * To change this template use File | Settings | File Templates.
 */

namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeHelloBoundle:Hello:index.html.twig', array('name' => $name));
    }
}