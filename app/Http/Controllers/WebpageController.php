<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function blogs(){
        $sample=[
            ['id'=>1,
            'name'=>'test1',
            'des'=>'hello this is test',
            'img'=>'https://plus.unsplash.com/premium_photo-1780332929942-15a60d5184b4?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],

             ['id'=>2,
            'name'=>'test2',
            'des'=>'hello this is test2',
            'img'=>'https://plus.unsplash.com/premium_photo-1780332929942-15a60d5184b4?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ]
        ];
        return view('pages.blog', compact('sample'));
    }

    public function contact(){
        return view('pages.contact');
    }

     public function blogdetail($id){
         $sample=[
            ['id'=>1,
            'name'=>'test1',
            'des'=>'hello this is test',
            'img'=>'https://plus.unsplash.com/premium_photo-1780332929942-15a60d5184b4?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],

             ['id'=>2,
            'name'=>'test2',
            'des'=>'hello this is test2',
            'img'=>'https://plus.unsplash.com/premium_photo-1780332929942-15a60d5184b4?q=80&w=688&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ]
        ];

        $service=null;
        foreach($sample as $item)
            if($item['id']==$id)
                {
                    $service =$item;
                    break;
                }
            if(!$service){
                abort(404);
            }
        return view('pages.blogdetail',compact('service'));
    }

}
