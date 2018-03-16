<?php
/**
 * Created by PhpStorm.
 * User: VSM
 * Date: 16-Mar-18
 * Time: 2:39 PM
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ArticleController {
    public function index() {
        return new Response('<html><body>Hello</body></html>');
    }
}