<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\Player;

class TeamsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        $limit = 30;
        $search_term = $request->input( 'search', false );

        if ( $search_term ) {
            $teams = Team::where( 'team_name', 'ilike', '%' . $search_term . '%' )->orderBy('team_name')->paginate( $limit );
        } else {
            $teams = Team::orderBy( 'team_name' )->paginate( $limit );
        }

        return view( 'project1.viewAllTeams ', compact( 'teams' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $players = Player::with( 'team' )->get();

        $free_agents = [];

        // Find players without a team
        foreach ( $players as $player ) {
            if ( count( $player->team ) < 1 ) {
                array_push( $free_agents, $player );
            }
        }

        $free_agent_collection = collect( $free_agents );

        return view( 'project1.createTeam', [
            'free_agents' => $free_agent_collection
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $team_name      = $request->input( 'teamName', false );
        $team_logo      = $request->input( 'teamLogo', false );
        $players_to_add = $request->input( 'freeAgents', false );

        $team = new Team;

        $team->team_name = $team_name;
        $team->team_logo = $team_logo;

        if ( $team->save() ) {
            foreach ( $players_to_add as $player_id ) {
                $team->players()->attach( $player_id );
            }
        }

        return redirect( '/project-1/teams' );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $team = Team::with( 'players' )->findOrFail( $id );

        return view( 'project1.viewTeam', compact( 'team' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
