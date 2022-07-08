<?php

$min = 60;
$max = 140;

    $matches = [
        [
            'home' => 'Boston Celtics',
            'away' => 'Chicago Bulls',
            'homePoints' => rand($min, $max),
            'awayPoints' => rand($min,$max),
        ],
        [
            'home' => 'Miami Heats',
            'away' => 'Toronto Raptors',
            'homePoints' => rand($min, $max),
            'awayPoints' => rand($min,$max),
        ],
        [
            'home' => 'Golden State Warrioris',
            'away' => 'Los Angeles Lakers',
            'homePoints' => rand($min, $max),
            'awayPoints' => rand($min,$max),
        ],
        [
            'home' => 'Denver Nuggets',
            'away' => 'Utha Jazz',
            'homePoints' => rand($min, $max),
            'awayPoints' => rand($min,$max),
        ],
        [
            'home' => 'Phoenix Suns',
            'away' => 'San Antonio Spurs',
            'homePoints' => rand($min, $max),
            'awayPoints' => rand($min,$max),
        ],

    ]
?>

<!-- <h1><?php echo $matches[0]['homePoints']?></h1> -->

<?php
for ($i = 0; $i < count($matches); $i++) {
    $currentHome = $matches[$i]['home'];
    $currentAway = $matches[$i]['away'];
    $currentHomePoints = $matches[$i]['homePoints'];
    $currentAwayPoints = $matches[$i]['awayPoints'];
?>

<h1>Partita: <?php echo $currentHome . ' - ' . $currentAway . ': ' . $currentHomePoints . ' - ' . $currentAwayPoints ?></h1>

<?php } ?>


