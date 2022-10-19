<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    #[Route('/', name: 'app')]
    public function HelloWorld(): Response
    {
        return new Response(
            '<html><body>Hello World.</body></html>'
        );
    }
}