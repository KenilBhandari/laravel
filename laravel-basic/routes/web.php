<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome') ;
});

Route::get('/about', function () {
    return view('about', ["name" => "Kenil Bhandari"]);
});

Route::get("/projects", function(){
  $projects = [
    ["name" => "Finvest", "Score" => 9, "Popularity" => "High", "id" => 100 ],
    ["name" => "Triofin", "Score" => 7, "Popularity" => "Low", "id" => 101 ],
    ["name" => "logos", "Score" => 8.5, "Popularity" => "Mid", "id" => 102 ],
  ];
  return view("projects.index", ['projects' => $projects]);
});

Route::get("/projects/{id}", function($id){
  $projects = [
    ["name" => "Finvest", "Score" => 9, "Popularity" => "High", "id" => 100 ],
    ["name" => "Triofin", "Score" => 7, "Popularity" => "Low", "id" => 101 ],
    ["name" => "logos", "Score" => 8.5, "Popularity" => "Mid", "id" => 102 ],
  ];
  return view("projects.projectdetail", ['project' => $projects[$id - 100] ]);
});