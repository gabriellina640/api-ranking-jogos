<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

/**
 * @group Rankings
 * APIs para visualização de rankings de jogos
 */
class GameController extends Controller
{
    /**
     * Ranking Geral
     * * Retorna o top 10 jogos baseado no período informado.
     * @queryParam period string required O período do ranking (weekly, monthly, yearly). Example: weekly
     */
    public function generalRanking(Request $request)
    {
        $period = $request->query('period', 'weekly');
        $column = "{$period}_points";

        // Validação simples
        if (!in_array($period, ['weekly', 'monthly', 'yearly'])) {
            return response()->json(['error' => 'Período inválido'], 400);
        }

        $games = Game::orderBy($column, 'desc')->take(10)->get();
        return response()->json($games);
    }

    /**
     * Jogos Mais Jogados
     * * Retorna o top 10 jogos com base no número de jogadores ativos.
     */
    public function mostPlayed()
    {
        $games = Game::orderBy('active_players', 'desc')->take(10)->get();
        return response()->json($games);
    }

    /**
     * Ranking por Plataforma
     * * Retorna os jogos mais bem ranqueados de uma plataforma específica.
     * @urlParam platform string required O nome da plataforma. Example: Steam
     */
    public function platformRanking($platform)
    {
        $games = Game::where('platform', $platform)
                     ->orderBy('active_players', 'desc')
                     ->get();
                     
        return response()->json($games);
    }
}