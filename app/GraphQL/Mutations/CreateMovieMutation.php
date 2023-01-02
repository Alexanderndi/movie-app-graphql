<?php
namespace App\graphql\Mutations;
use App\Models\Movie;
use Rebing\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
class CreateMovieMutation extends Mutation
{
    protected $attributes = [
        "name" => "createMovie",
    ];
    public function type(): Type
    {
        return GraphQL::type("Movie");
    }
    public function args(): array
    {
        return [
            "title" => [
                "name" => "title",
                "type" => Type::nonNull(Type::string()),
            ],
            "director" => [
                "name" => "director",
                "type" => Type::nonNull(Type::string()),
            ],
            "language" => [
                "name" => "language",
                "type" => Type::nonNull(Type::string()),
            ],
            "year_released" => [
                "name" => "year_released",
                "type" => Type::nonNull(Type::string()),
            ],
        ];
    }
    public function resolve($root, $args)
    {
        $movie = new Movie();
        $movie->fill($args);
        $movie->save();
        return $movie;
    }
}
