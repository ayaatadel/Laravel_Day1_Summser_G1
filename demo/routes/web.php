<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/students',function(){
    return "WElcome students";
});
// Route::get('/users',function(){
//     $users=[
//         ["id"=>1,"name"=>"ayaat","age"=>24],
//         ["id"=>2,"name"=>"eman","age"=>25],
//         ["id"=>3,"name"=>"nada","age"=>26],
//     ];
//             //   dump($users);


//     return $users;
// });
Route::get('/users/{id}',function($id){
    $users=[
        ["id"=>1,"name"=>"ayaat","age"=>24],
        ["id"=>2,"name"=>"eman","age"=>25],
        ["id"=>3,"name"=>"nada","age"=>26],
    ];
//   dump($users);

// return url()->current(); // string  // ==(value)

// dump(url()->current());
if($id<count($users))
    {
        return $users[$id-1];
    }else{
        return abort(404);
    }
})->where('id',"[0-9]+"); // to make user enter numbers only
// and function didn't return any thing if user enter any thing ecept numbers

Route::get('/home',function(){
    $users=[
        ["id"=>1,"name"=>"ayaat","age"=>24],
        ["id"=>2,"name"=>"eman","age"=>25],
        ["id"=>3,"name"=>"nada","age"=>26],
    ];
            //   dump($users);

                    // key => array
    return view('home',["users"=>$users]);
});
