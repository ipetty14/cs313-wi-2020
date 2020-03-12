<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;

class PlayersController extends Controller
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
            $players = Player::where( 'first_name', 'ilike', '%' . $search_term . '%' )
                               ->orWhere( 'last_name', 'ilike', '%' . $search_term . '%' )
                               ->orderBy( 'last_name' )->paginate( $limit );
        } else {
            $players = Player::orderBy( 'last_name' )->paginate( $limit );
        }

        return view( 'project1.viewAllPlayers', compact( 'players' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'project1.createPlayer' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request )
    {
        $first_name      = $request->input('firstName', false);
        $last_name       = $request->input('lastName', false);
        $height          = $request->input('height', false);
        $weight          = $request->input('weight', false);
        $jersey_number   = $request->input('jerseyNumber', false);
        $player_position = $request->input('playerPosition', false);
        $player_image    = $request->input('playerImage', false);

        $player = Player::find( $id );

        $player->first_name      = $first_name;
        $player->last_name       = $last_name;
        $player->height          = $height;
        $player->weight          = $weight;
        $player->jersey_number   = $jersey_number;
        $player->player_position = $player_position;
        $player->player_image    = $player_image;

        $player->save();

        $id = $player->id;

        return \redirect("/project-1/players/$id");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id )
    {
        $player = Player::with( 'team' )->findOrFail( $id );

        return view( 'project1.viewPlayer', compact( 'player' ) );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $player = Player::with( 'team' )->findOrFail( $id );

        return view( 'project1.editPlayer', compact( 'player' ) );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Request $request, $id )
    {
        $first_name      = $request->input('firstName', false);
        $last_name       = $request->input('lastName', false);
        $height          = $request->input('height', false);
        $weight          = $request->input('weight', false);
        $jersey_number   = $request->input('jerseyNumber', false);
        $player_position = $request->input('playerPosition', false);

        $player = Player::find( $id );

        $player->first_name      = $first_name;
        $player->last_name       = $last_name;
        $player->height          = $height;
        $player->weight          = $weight;
        $player->jersey_number   = $jersey_number;
        $player->player_position = $player_position;

        $player->save();

        return \redirect("/project-1/players/$id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        //
    }
}
