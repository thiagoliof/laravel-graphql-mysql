<?php

namespace App\GraphQL\Mutations;
use App\Models\GameSession;

final class EndGameSession
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        
        $game_name = $args['game_name'];
        $game_session = GameSession::where('game_name', '=', $game_name)->update(['state' => 2]);;

        $data = array('game_name'=>'The Game ' . $game_name . ' was completed');
        return $data;

        // TODO implement the resolver
    }
}
