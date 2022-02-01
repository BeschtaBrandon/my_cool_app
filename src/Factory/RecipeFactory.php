<?php

namespace App\Factory;

use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use Zenstruck\Foundry\RepositoryProxy;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;

/**
 * @extends ModelFactory<Recipe>
 *
 * @method static Recipe|Proxy createOne(array $attributes = [])
 * @method static Recipe[]|Proxy[] createMany(int $number, array|callable $attributes = [])
 * @method static Recipe|Proxy find(object|array|mixed $criteria)
 * @method static Recipe|Proxy findOrCreate(array $attributes)
 * @method static Recipe|Proxy first(string $sortedField = 'id')
 * @method static Recipe|Proxy last(string $sortedField = 'id')
 * @method static Recipe|Proxy random(array $attributes = [])
 * @method static Recipe|Proxy randomOrCreate(array $attributes = [])
 * @method static Recipe[]|Proxy[] all()
 * @method static Recipe[]|Proxy[] findBy(array $attributes)
 * @method static Recipe[]|Proxy[] randomSet(int $number, array $attributes = [])
 * @method static Recipe[]|Proxy[] randomRange(int $min, int $max, array $attributes = [])
 * @method static RecipeRepository|RepositoryProxy repository()
 * @method Recipe|Proxy create(array|callable $attributes = [])
 */
final class RecipeFactory extends ModelFactory
{
    public function __construct()
    {
        parent::__construct();

        // TODO inject services if required (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#factories-as-services)
    }

    protected function getDefaults(): array
    {
        return [
            // TODO add your default values here (https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#model-factories)
            'name' => self::faker()->text(),
            'ingredients' => ['bacon', 'salt'],
            'category' => 'mexican'
,        ];
    }

    protected function initialize(): self
    {
        // see https://symfony.com/bundles/ZenstruckFoundryBundle/current/index.html#initialization
        return $this
            // ->afterInstantiate(function(Recipe $recipe): void {})
        ;
    }

    protected static function getClass(): string
    {
        return Recipe::class;
    }
}
