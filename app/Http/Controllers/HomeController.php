<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\PostService;

class HomeController extends Controller
{
    private $service;

    public function __construct(PostService $service)
    {
        $this->service = $service;
    }

    /**
     * Display posts
     * 
     * @return View
     */
    public function index()
    {
        $posts = $this->service->latest();

        return view('home.index', compact('posts'));
    }
}
