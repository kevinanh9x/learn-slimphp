<?php
declare(strict_types=1);

namespace App\Application\Actions\CleaddActions;
use App\Application\Actions\Action;

use Psr\Http\Message\ResponseInterface as Response;

class cleaddActile extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        return $this->respondWithData("the anh");
    }
}
