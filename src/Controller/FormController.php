<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


class FormController {

  public function render() {
    return new Response(
      '<h1>Here we go!</h1>'
    );
  }
}
