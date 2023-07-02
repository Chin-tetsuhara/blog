<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $client = new \GuzzleHttp\Client();
        
        $url = 'https://teratail.com/api/v1/questions';
        
        $response = $client->request(
            'GET',
            $url,
            ['Bearer' => config('services.teratail.token')]
        );
        
        $questions = json_decode($response->getBody(), true);
        
        return view('categories.index')->with([
            'posts' => $category->getByCategory(),
            'questions' => $questions['questions'],
        ]);
    }
}