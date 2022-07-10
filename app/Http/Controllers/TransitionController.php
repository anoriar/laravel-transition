<?php

namespace App\Http\Controllers;

use App\Transition\UseCases\Transit\TransitCommand;
use App\Transition\UseCases\Transit\TransitHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TransitionController extends Controller
{
    public function redirect(string $token, TransitHandler $transitHandler)
    {
        $result = $transitHandler->handle(new TransitCommand($token));
        if ($result) {
            return redirect($result);
        }

        throw new NotFoundHttpException();
    }
}
