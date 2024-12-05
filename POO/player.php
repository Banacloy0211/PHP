<?php
class Player {
    private $name;
    private $birthDay;
    private $country;
    private $dorsal;
    private $position;
    private $goals;
    private $matches;
    private $minutes;
    private $yellowCard;
    private $redCard;

    public function __construct($name, $birthDay, $country, $dorsal, $position, $goals, $matches, $minutes, $yellowCard, $redCard){
        $this->name = $name;
        $this->birthDay = $birthDay;
        $this->country = $country;
        $this->dorsal = $dorsal;
        $this->position = $position;
        $this->goals = $goals;
        $this->matches = $matches;
        $this->minutes = $minutes;
        $this->yellowCard = $yellowCard;
        $this->redCard = $redCard;
    }

    public function Age(){
        $años = date("Y") - $this->birthDay;
        return $años;
    }

    public function Score(){
        $goles = $this->goals;
        $this->goals = $goles + 1;
        return "Ha marcado un gol, se ha añadido a su marcador. Los goles actuales son: ". $this->goals;
    }

    public function AddCard($color){
        if($color == 1){
            $tarjetas = $this->yellowCard;
            $this->yellowCard = $tarjetas + 1;
            return "El jugador ha sido amonestado, se ha añadido la tarjeta amarilla. Las tarjetas amarillas actuales son: ". $this->yellowCard;
        }else{
            $tarjetas = $this->redCard;
            $this->redCard = $tarjetas + 1;
            return "El jugador ha sido amonestado, se ha añadido la tarjeta roja. Las tarjetas rojas actuales son: ". $this->redCard;
        }
    }

    public function PlayMinutes($min){
        $minutos = $this->minutes;
        $this->minutes = $minutos + $min;
        return "El jugador ha jugado más minutos, se han añadido. Estos son los minutos jugados totales: " . $this->minutes;
    }

    public function Render(){
        return "Esta es la ficha del jugador: 
        <table style = 'text-align: center; border: 1px solid black;'>
            <tr>
                <th>Nombre</th>
                <th>Año de nacimiento</th>
                <th>País</th>
                <th>Dorsal</th>
                <th>Posición</th>
                <th>Goles</th>
                <th>Partidos Jugados</th>
                <th>Minutos jugados</th>
                <th>Tarjetas Amarillas</th>
                <th>Tarjetas Rojas</th>
            </tr>
            <tr>
                <td>$this->name</td>
                <td>$this->birthDay</td>
                <td>$this->country</td>
                <td>$this->dorsal</td>
                <td>$this->position</td>
                <td>$this->goals</td>
                <td>$this->matches</td>
                <td>$this->minutes</td>
                <td>$this->yellowCard</td>
                <td>$this->redCard</td>
            </tr>
        </table>";
    }
}

class Team {
    private $name;
    private $players;
    private $matches;
    private $won;
    private $lost;
    private $tie;
    private $scoreGoals;
    private $concededGoals;
    
    public function __construct($name, $players, $matches, $won, $lost, $tie, $scoreGoals, $concededGoals){
        $this->name = $name;
        $this->players = $players;
        $this->matches = $matches;
        $this->won = $won;
        $this->lost = $lost;
        $this->tie = $tie;
        $this->scoreGoals = $scoredGoals;
        $this->concededGoals = $concededGoals;
    }

    
}

$player = new Player("Jose", 2001, "España", "24", "DEF", 300, 350, 900, 1, 0);
echo "Edad del jugador: " . $player->Age(). "<br>";
echo $player->Score(). "<br>";
echo $player->AddCard(1). "<br>";
echo $player->PlayMinutes(90). "<br>";
echo $player->Render();
?>