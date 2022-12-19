<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;


final class UpdateGameSession
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        
        $game_name = $args['game_name'];
        $retries = $args['retries'];
        $game_session = GameSession::where('game_name', '=', $game_name)->update(['retries' => $retries]);;

        $data = array('game_name'=>'The Game ' . $game_name . ' was updated');
        return $data;

        // TODO implement the resolver
    }
}
