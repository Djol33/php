<?php

namespace App\Controller;
use App\Model\ModelOpenPost;
class OpenPost extends Controller
{
    public static function Page(): void
    {
        $req_method = $_SERVER["REQUEST_URI"];
        $req_method = explode("/", $req_method);
        $id = (int)$req_method[2];
        $obj =new ModelOpenPost();
        $obj->OpenPost($id);



    }
}