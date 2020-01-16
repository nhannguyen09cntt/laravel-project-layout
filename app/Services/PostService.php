<?php
namespace App\Services;

use App\Repositories\Contracts\PostRepositoryInterface;

class PostService
{
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function latest()
    {
        return $this->postRepository->latest();
    }
}
