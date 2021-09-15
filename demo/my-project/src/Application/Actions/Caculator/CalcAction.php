<?php
declare(strict_types=1);

namespace App\Application\Actions\Caculator;
use App\Application\Actions\Action;

use Psr\Http\Message\ResponseInterface as Response;

class CalcAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $body= $this->request->getParsedBody();
        return $this->respondWithData($body);
    }


}
