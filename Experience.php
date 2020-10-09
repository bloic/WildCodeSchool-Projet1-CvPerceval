<section class="experience" id="experience">
    <h2 class="title">Expériences</h2>
    <?php
    $dateQuests = [
    ['dateQuests'=>'1400 av. JScript',
    'school'=>'Université de Karadoc',
    'quest'=>'Quête des deux Renards',
    ],
    ['dateQuests'=>'1400 av. JScript',
    'school'=>'Université Le Gallois',
    'quest'=>'Pêcheur du serpent géant',
    ],
    ['dateQuests'=>'1400 av. JScript',
    'school'=>'Le semi-Croustillant',
    'quest'=>'Proverbiale inventivité',
    ],
    ['dateQuests'=>'1400 av. JScript',
    'school'=>'Le semi-Croustillant',
    'quest'=>'Prendre la tête d’un petit groupe hétéroclite d\'hommes',
    ]
    ];


    foreach ($dateQuests as $title => $dateQuest) {
    ?>

    <div class="containers">
        <div class="containersDate">
            <div class="date">
                <div class="dateQuests"><?= $dateQuest['dateQuests'];?></div>
            </div>
        </div>

        <div class="cadre"><?php ?>
            <div class="quests"><h3><?= $dateQuest['school']; ?></h3>
                <p><?= $dateQuest['quest'];?></p></div>
        </div>
    </div><?php };?>



</section>
