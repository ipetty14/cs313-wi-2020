-- Create Tables Migration
create table "teams" (
    "id" bigserial primary key not null,
    "team_name" varchar(255) not null,
    "team_logo" varchar(255) not null,
    "created_at" timestamp(0) without time zone null,
    "updated_at" timestamp(0) without time zone null
) create table "players" (
    "id" bigserial primary key not null,
    "first_name" varchar(255) not null,
    "last_name" varchar(255) not null,
    "height" integer not null,
    "weight" integer not null,
    "jersey_number" integer not null,
    "player_position" varchar(255) not null,
    "created_at" timestamp(0) without time zone null,
    "updated_at" timestamp(0) without time zone null
) create table "players_teams" (
    "id" bigserial primary key not null,
    "player_id" bigint not null,
    "team_id" bigint not null,
    "created_at" timestamp(0) without time zone null,
    "updated_at" timestamp(0) without time zone null
)
alter table
    "players_teams"
add
    constraint "players_teams_player_id_foreign" foreign key ("player_id") references "players" ("id") on delete cascade
alter table
    "players_teams"
add
    constraint "players_teams_team_id_foreign" foreign key ("team_id") references "teams" ("id") on delete cascade
