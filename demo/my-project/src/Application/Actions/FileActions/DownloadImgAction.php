<?php

declare(strict_types=1);

namespace App\Application\Actions\FileActions;

use App\Application\Actions\Action;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Psr7\Stream;

class DownloadImgAction extends Action
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {

        $directory = $this->settings->get('uploadDir');
        $path = $directory . '/c8b164c2ee17895a-rr.jpg.jpg';

        $fh = fopen($path, 'rb');
        $file_stream = new Stream($fh);

        return $this->response->withBody($file_stream)
            ->withHeader('Content-Disposition', 'attachment; filename=rt.csv;')
            ->withHeader('Content-Type', mime_content_type($path))
            ->withHeader('Content-Length', filesize($path));
    }
}