<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;

final class RemoveGameByName
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        
        $name = $args['name'];

        $results = \App\Models\Game::query()
            ->where('name', $name)
            ->delete();


        $data = array('name'=>$name);
        return $data;

        // TODO implement the resolver
    }
}
