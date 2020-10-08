<section class="formation" id="formation">
    <h2 class="title">Formations</h2>
    <?php

    $historyDates = ['1400 ans avant JScript',
                    '1400 ans avant JScript',
                    '10 ans après JScript',
                    '1400 ans avant JScript',
                    ];
    $dateDiplomas = [
            'Université de Karadoc' => 'Doctorat de la botte secrète de Karadoc "c\'est pas faux"',
            'Université Le Gallois' => 'Master de la technique du Rebrousse-Chemin',
            'Stargate' => 'Testeur de Porte Dimmensionnelles Stargate',
            'Université Cul de Chouette' => 'Perceval chante le Sloubi',
        ];


    ?>

    <div class="containers">
<?php foreach ($dateDiplomas as $title => $dateDiploma){
     foreach( $historyDates as $historyDate){ ?>
        <div class="containersDate">
            <div class="date">
                <div class="historyDate"><?= $historyDate;};?></div>
            </div>
        </div>
        <div class="row"></div>


        <div class="cadre">
            <div class="dateDiploma"><h3><?= $title; ?></h3>
                <p><?= $dateDiploma;};?></p></div>
        </div>
    </div>


</section>