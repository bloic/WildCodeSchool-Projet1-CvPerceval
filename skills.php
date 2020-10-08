<section id="skills" class="skillsSection">
    <h2 class="skillsMainTitle">Compétences</h2>

    <div class="skillContainerGlobal">
        <?php

        $skills = [
            ['title' => 'Combat',
                'titleClass' => 'skillsTitle',
                'iconClass' => 'skillIconSwords',
                'text' => 'Expertise dans le maniement d\'objets redondants',
                'textClass' => 'skillsText',
            ],
            ['title' => 'Stratégie',
                'titleClass' => 'skillsTitle',
                'iconClass' => 'skillIconCastle',
                'text' => 'Comptage des briques au centième près de manière péremptoire',
                'textClass' => 'skillsText',
            ],
            ['title' => 'Communication',
                'titleClass' => 'skillsTitle',
                'iconClass' => 'skillIconOld',
                'text' => 'Spécialisé dans la gestion des vieux mystérieux',
                'textClass' => 'skillsText',
            ],
        ];

        foreach ($skills as $skill) {
        ?>
        <div class="skillContainer">
            <div class="<?=$skill['iconClass'];?>"></div>
            <h3 class="<?=$skill['titleClass'];?>"><?=$skill['title'];?></h3>
            <p class="<?=$skill['textClass'];?>"><?=$skill['text'];?></p>
        </div>
        <?php
}
        ?>

    </div>
</section>




        <!--<div class="skillContainer">
            <div class="skillIconSwords"></div>
            <h3 class="skillsTitle">Combat</h3>
            <p class="skillsText">Expertise dans le maniement d'objets redondants</p>
        </div>

        <div class="skillContainer">
            <div class="skillIconCastle"></div>
            <h3 class="skillsTitle">Stratégie</h3>
            <p class="skillsText">Comptage des briques au centième près de manière péremptoire</p>
        </div>

        <div class="skillContainer">
            <div class="skillIconOld"></div>
            <h3 class="skillsTitle">Communication </h3>
            <p class="skillsText">Spécialisé dans la gestion des vieux mystérieux</p>
        </div>-->