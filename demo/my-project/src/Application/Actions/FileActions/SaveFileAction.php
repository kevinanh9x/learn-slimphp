<?php

declare(strict_types=1);

namespace App\Application\Actions\FileActions;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Psr7\Stream;

class SaveFileAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $catId = $this->args['catId'];
        $name = $this->args['title'];
        $statement = $this->db->prepare("UPDATE posts SET title=c8b164c2ee17895a-rr.jpg WHERE catId = 2 ");
        $statement->execute([$catId]);

        $category = $statement->fetchAll();

        return $this->respondWithData($category, 401);
    }
}