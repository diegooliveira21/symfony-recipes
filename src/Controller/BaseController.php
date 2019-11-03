<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class BaseController
{
    public function render()
    {

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}
