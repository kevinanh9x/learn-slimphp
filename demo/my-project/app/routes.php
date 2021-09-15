<?php
declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use App\Application\Actions\Caculator\CalcAction;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;
use App\Application\Actions\TodoAction\todoAction;
use App\Application\Actions\CleaddActions\cleaddActile;
use App\Application\Actions\Category\ListCategoryAction;
use App\Application\Actions\Category\DetailCategoryAction;
use App\Application\Actions\Category\AddCategoryAction;
use App\Application\Actions\FileActions\FileAction;
use App\Application\Actions\FileActions\DownloadImgAction;
use App\Application\Actions\FileActions\SaveFileAction;
use Slim\Psr7\Stream;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {


/*$result= "";
$username = "Tam";
$userInput="vi";
$userListInput = [
            [
                "username" => "Karl",
                "language" => "en"
            ],[
                "username" => "Tam",
                "language" => "vi"
            ],[
                "username" => "Kazuki",
                "language" => "ja"
            ]
        ];
*/
/*function getMessageByLang($username, $userListInput) {
            foreach($userListInput as $userInput){
                if($username === $userInput['username']) {
                    switch ($userInput['language']) {
                        case 'en':
                            return "Hello $username";
                        case 'vi':
                            return "Xin chao $username";
                        case 'ja':
                            return "Konnichiwa $username";
                        default:
                            return '';
                    }
                }
            }

}*/
        //$result = "Kết quả: <br/>";
        //$result .=getMessageByLang($username, $userListInput);


        //$response->getBody()->write($result);
        //return $response;
        $response->getBody()->write('Hello world!');
        return $response;
    });

  /*  $app->get('/xin-chao', function (Request $request, Response $response) {
        $response->getBody()->write('xin chao');
        return $response;
    });

 $app->get('/xinchao[/{lang:[a-z]{2}}/{abc}]', function (Request $request, Response $response, array $args) {

       if (array_key_exists('lang' , $args) && $args['lang'] === 'vi') {
           $welcomeMessage = "Ban dang noi tieng viet";
       } else {
           $welcomeMessage = "Ban dang noi tieng anh";
       }

       $response->getBody()->write($welcomeMessage);
       return $response;
   });
*/
    /*$app->get('/15[/{cong:[a-z]{2}}/{30}]', function (Request $request, Response $response, array $args) {
        
       
        $kq="";
        if (array_key_exists('cong' , $args) && $args['cong'] === '15') {
            $a=15;
            $b=30;
            $kq = $a+$b;
       } else {
           $welcomeMessage = "Eror";
       }
        
       $response->getBody()->write($kq);
       return $response;
   });*/


/*$app->get('/15[/{cong:[a-z]{2}}/{30}]', function (Request $request, Response $response, array $args) {
        
       
$kq="";
        if (array_key_exists('cong' , $args) && $args['cong'] === '15') {
  $a=15;
            $b=30;
            $kq = $a+$b;
       } else {
           $welcomeMessage = "Eror";
       }
        
       $response->getBody()->write($kq);
       return $response;
   });
*/

//   $app->group(
//         '/test1',
//         function (Group $group) {

//             $group->get('', function (Request $request, Response $response) {
//                 $response->getBody()->write('Xin chao abc!');
//                 return $response;
//             });

//             $group->get('/family', function (Request $request, Response $response) {
//                 $response->getBody()->write('Xin chao 2 bo con');
//                 return $response;
//             });
//         }
//     );


//     $app->get('/db', function (Request $request, Response $response) {
        
       
//         $db = $this->get(PDO::class);

//         $sth = $db->prepare("SELECT posts.id, posts.content, COUNT(comments.id) as number
//         FROM comments
//         INNER JOIN posts
//         ON posts.id = comments.post_id
//         GROUP BY posts.id, posts.content
//         ORDER BY number DESC
//         LIMIT 1");
//         $sth->execute();
//         $data = $sth->fetchAll(PDO::FETCH_ASSOC);
    
    
//         $payload = json_encode($data);
//         $response->getBody()->write($payload);
//         return $response->withHeader('Content-Type', 'application/json');

//     });


// $app->post("/posts", function (Request $request, Response $response, array $args) {

//     try {
//         $db = $this->get(PDO::class);

//         // $db->exec("INSERT INTO posts ( title, content, category_id) VALUES ( 'abc', 'abc', 1)");

//         $sth = $db->prepare("SELECT * FROM posts WHERE id < 10");
//         $sth->execute();

//         $data = $sth->fetchAll(PDO::FETCH_CLASS);

//         $payload = json_encode($data);
//         $response->getBody()->write($payload);
//         return $response->withHeader('Content-Type', 'application/json');
//     } catch (\Throwable $th) {
//         return $th->getMessage();
//     }
// });


// $app->put("/posts/{postId}", function (Request $request, Response $response, array $args) {

//     try {
//         $db = $this->get(PDO::class);

//         $db->exec("INSERT INTO posts ( title, content, category_id) VALUES ( 'abc', 'abc', 1)");

//         $sth = $db->prepare("SELECT * FROM posts WHERE id < 10");
//         $sth->execute();

//         $data = $sth->fetchAll(PDO::FETCH_CLASS);

//         $payload = json_encode($data);
//         $response->getBody()->write($payload);
//         return $response->withHeader('Content-Type', 'application/json');
//     } catch (\Throwable $th) {
//         return $th->getMessage();
//     }
// });

// $app->delete("/posts/{postId}", function (Request $request, Response $response, array $args) {

//     try {
//         $db = $this->get(PDO::class);

       

//         $sth = $db->prepare("SELECT * FROM posts WHERE id < 10");
//         $sth->execute();

//         $data = $sth->fetchAll(PDO::FETCH_CLASS);

//         $payload = json_encode($data);
//         $response->getBody()->write($payload);
//         return $response->withHeader('Content-Type', 'application/json');
//     } catch (\Throwable $th) {
//         return $th->getMessage();
//     }
// });

// $app->delete("/posts/maxComment", function (Request $request, Response $response, array $args) {

//     try {
//         $db = $this->get(PDO::class);

//         $sth = $db->prepare("SELECT * FROM posts WHERE id < 10");
//         $sth->execute();

//         $data = $sth->fetchAll(PDO::FETCH_CLASS);

//         $payload = json_encode($data);
//         $response->getBody()->write($payload);
//         return $response->withHeader('Content-Type', 'application/json');
//     } catch (\Throwable $th) {
//         return $th->getMessage();
//     }
// });
    

    // $app->post('/myaction', CalcAction::class);
    // $app->get('/todoaction', todoAction::class);
    // $app->get('/cleaddactile', cleaddActile::class);


    // $app->get("/categories", ListCategoryAction::class);
    // $app->get("/category/{catId:[0-9]+}", DetailCategoryAction::class);
    // $app->post("/posts/{catId:[0-9]+}", AddCategoryAction::class);
    $app->get("/download", DownloadImgAction::class);
    $app->post("/fileaction", FileAction::class);
    $app->post("/savefile", SaveFileAction::class);

    $app->get("/static/{filetype}/{filename}", function (Request $request, Response $response, array $args) {
        $filename = $args['filename'];
        $filetype = $args['filetype'];
        $directory = __DIR__ . "/../public/static";
        $path = $directory . "/$filetype/$filename";

        if (file_exists($path)) {
            $fh = fopen($path, 'rb');
            $file_stream = new Stream($fh);

            return $response->withBody($file_stream);
        }
        return $response->withStatus(404, "File not found");
    });


    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
