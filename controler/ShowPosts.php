<?php

namespace App\Controller;
use App\Model\ModelShowPosts;
use App\View\ShowPostsView ;
use App\Model\ModelPagination;

class ShowPosts extends  Controller
{
    public static function Page(): void
    {
        $req_method = $_SERVER["REQUEST_URI"];
        $req_method = explode("/", $req_method);

        $page=$req_method[2];
        $obj = new ModelShowPosts();
        $rows =$obj->showPosts(isset($page)?$page: 1);

        ShowPostsView::createView(...$rows);
        echo "<br/><br/>";
        $pag = new ModelPagination();
        $page_number = $pag->numberOfRows();
        echo "<br/><br/>";
        for($i = 1; $i<=$page_number || ($page_number >5? $page_number=5:0);$i++){
            echo "<a href='/all-posts/{$i}'>{$i}</a>";
        }


    }
}