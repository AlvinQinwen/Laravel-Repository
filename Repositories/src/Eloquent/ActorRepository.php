<?php


namespace App\Repositories;


use Bosnadev\Repositories\Eloquent\Repository;

class ActorRepository extends Repository
{
    function model()
    {
        return 'Bosnadev\Models\Actor';
    }
}