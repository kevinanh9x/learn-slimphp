<?php

declare(strict_types=1);

namespace App\Application\Actions\Category;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;

class AddCategoryAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $body= $this->request->getParsedBody();
        $stmt = $this -> db ->prepare("INSERT INTO posts (title) VALUES (?, ?, ?, ?)");

        $stmt->execute([$title]);

        return $this->respondWithData($stmt);
    }
}
