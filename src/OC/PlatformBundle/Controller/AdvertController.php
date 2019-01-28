<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 28/01/2019
 * Time: 12:40
 */

namespace OC\PlatformBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{
   public function indexAction(){
       $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('name'=>'anis'));
       return new Response($content);
   }
   public function homeAction(){
       $content = $this->get('templating')->render('OCPlatformBundle:Advert:home.html.twig', array('name'=>'anis'));
       return new Response($content);
   }
}