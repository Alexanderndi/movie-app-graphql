<?php
namespace App\graphql\Queries;
use App\Models\Movie;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
class MoviesQuery extends Query
{
    protected $attributes = [
        "name" => "movies",
    ];
    public function type(): Type
    {
        return Type::listOf(GraphQL::type("Movie"));
    }
    public function resolve($root, $args)
    {
        return Movie::all();
    }
}
