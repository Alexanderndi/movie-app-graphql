<?php
namespace App\graphql\Mutations;
use App\Models\Movie;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;
class DeleteMovieMutation extends Mutation
{
    protected $attributes = [
        "name" => "deleteMovie",
        "description" => "Delete a movie",
    ];
    public function type(): Type
    {
        return Type::boolean();
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
        $movie = Movie::findOrFail($args["id"]);
        return $movie->delete() ? true : false;
    }
}
