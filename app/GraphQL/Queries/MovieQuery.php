<?php
namespace App\GraphQL\Queries;
use App\Models\Movie;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;
class MovieQuery extends Query
{
    protected $attributes = [
        "name" => "movie",
    ];
    public function type(): Type
    {
        return GraphQL::type("Movie");
    }
    public function args(): array
    {
        return [
            "id" => [
                "name" => "id",
                "type" => Type::int(),
                "rules" => ["required"],
            ],
        ];
    }
    public function resolve($root, $args)
    {
        return Movie::findOrFail($args["id"]);
    }
}
