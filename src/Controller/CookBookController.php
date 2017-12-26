<?php
/**
 * Created by PhpStorm.
 * User: cappoocha
 * Date: 26.12.17
 * Time: 21:49
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class CookBookController
 * @package CookBook\Controller
 */
class CookBookController extends Controller
{
    public function index()
    {
        $number = mt_rand(0, 100);

        return $this->render('cookBook/index.html.twig', ['number' => $number]);
    }
}