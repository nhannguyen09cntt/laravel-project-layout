<?php
namespace App\Repositories\Contracts;

interface PostRepositoryInterface
{
    public function getById($id);

    public function latest();

    public function popular();
}
