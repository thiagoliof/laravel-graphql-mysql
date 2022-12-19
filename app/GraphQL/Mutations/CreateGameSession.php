<?php

namespace App\GraphQL\Mutations;
use App\Models\Game;
use App\Models\GameSession;

final class CreateGameSession
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        
        $game_name = $args['game_name'];



        $numberOfPairs = Game::query()->where('name', $game_name)->count();
        $retries = 0;
        $state = 1;

        $count_session_game = GameSession::query()->where('game_name', $game_name)->count();

        if ($count_session_game > 0){
            $data = array('game_name'=>'Game already exists');
            return $data;
        }
        else{
            $game_session = new GameSession;
            $game_session->game_name = $game_name;
            $game_session->retries = $retries;
            $game_session->numberOfPairs = $numberOfPairs;
            $game_session->state = $state;
            $game_session->save();
            $data = array('game_name'=>'Game ' . $game_name . ' Successfully started');
            return $data;
        }

        // TODO implement the resolver
    }
}
