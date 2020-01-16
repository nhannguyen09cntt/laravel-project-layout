<?php
namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Repositories\Contracts\PostRepositoryInterface;
use App\Repositories\EloquentRepository;
use Illuminate\Support\Carbon;

class PostRepository extends EloquentRepository implements PostRepositoryInterface
{

    public function __construct()
    {
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return Post::class;
    }

    /**
     * Get a list of the latest posts across topics
     *
     * @return Array
     */
    public function latest()
    {
        return $this->_model::where('created_at', '>=', Carbon::now()->subMonth())->orderBy('created_at', 'desc')->take(10)->get();
    }

    /**
     * Get post info by id
     *
     * @return Array
     */
    public function getById($id)
    {
        return [];
    }

    /**
     * Get 10 posts hot in a month the last
     *
     * @return Array
     */
    public function popular()
    {
        return $this->_model::where('created_at', '>=', Carbon::now()->subMonth())->orderBy('view', 'desc')->take(10)->get();
    }
}
