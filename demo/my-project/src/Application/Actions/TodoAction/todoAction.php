<?php
declare(strict_types=1);

namespace App\Application\Actions\TodoAction;
use App\Application\Actions\Action;

use Psr\Http\Message\ResponseInterface as Response;

class todoAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        // $rusult= $this->__sum(2,3);

        return $this->respondWithData('TEST');
    }

    // function __sum($a, $b){
    //     return $a+$b;
    // }
}
