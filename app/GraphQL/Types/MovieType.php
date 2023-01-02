<?php
namespace App\GraphQL\Types;
use App\Movie;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;
class MovieType extends GraphQLType
{
    protected $attributes = [
      "name" => "Movie",
      "description" => "Collection of movies and details of director",
      "model" => Movie::class,
    ];

    public function fields(): array
    {
        return [
            "id" => [
                "type" => Type::nonNull(Type::int()),
                "description" => "Id of a particular movie",
            ],
            "title" => [
                "type" => Type::nonNull(Type::string()),
                "description" => "The title of the movie"
            ],
            "director" => [
                "type" => Type::nonNull(Type::string()),
                "description" => "Name of the director"
            ],
            "language" => [
                "type" => Type::nonNull(Type::string()),
                "description" => "The language which the movie was taken",
            ],
            "year_released" => [
                "type" => Type::nonNull(Type::string()),
                "description" => "he year the movie was released",
            ]
        ];
    }
}
