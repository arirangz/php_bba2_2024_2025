<?php




function getGames(): array
{
    $games = [
        ["name" => "Clash of clans", "editor" => "Supercell", "year" => 2013, "description" => "Some description..."],
        ["name" => "GTA V", "editor" => "Rock Star", "year" => 2015, "description" => "Some description..."],
        ["name" => "COD", "editor" => "Activision", "year" => 2019, "description" => "Some description..."],
        ["name" => "Freefire", "editor" => "Garena", "year" => 2022, "description" => "Some description..."],
    ];
    return $games;
}


function getGameByIndex(int $index): array|bool
{
    $games = getGames();

    if (isset($games[$index])) {
        return $games[$index];
    } else {
        return false;
    }
}
