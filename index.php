<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="btn">
            <ul>
       <button><li><a href="?Saison=Hiver&jour">Hiver</a></li></button>
       <button><li><a href="?Saison=Autonme&jour">Autonme</a></li></button>
       <button><li><a href="?Saison=Printemps&jour">Printemps</a></li></button>
       <button><li><a href="?Saison=Ete&jour">Ete</a></li></button>
            </ul>
        </div>
    </header>
    <?php

    if ($_GET['Saison'] === 'Hiver') {
        echo '<ul>
        <a href="?Saison=Hiver&jour=Lundi"><li>Lundi : Hiver</li></a>
        <a href="?Saison=Hiver&jour=Mardi"><li>Mardi : Hiver</li></a>
        <a href="?Saison=Hiver&jour=Mercredi"><li>Mercredi Hiver</li></a>
        <a href="?Saison=Hiver&jour=Jeudi"><li>Jeudi : Hiver</li></a>
        <a href="?Saison=Hiver&jour=Vendredi"><li>Vendredi Hiver</li></a>
        <a href="?Saison=Hiver&jour=Samedi"><li>Samedi : Hiver</li></a>
        <a href="?Saison=Hiver&jour=Dimanche"><li>Dimanche : Hiver</li></a>
        </ul>';
    }

    if ($_GET['Saison']==='Printemps') {
        echo '<ul>
        <a href="?Saison=Printemps&jour=Lundi"><li>Lundi : Printemps</li></a>
        <a href="?Saison=Printemps&jour=Mardi"><li>Mardi : Printemps</li></a>
        <a href="?Saison=Printemps&jour=Mercredi"><li>Mercredi : Printemps</li></a>
        <a href="?Saison=Printemps&jour=Jeudi"><li>Jeudi : Printemps</li></a>
        <a href="?Saison=Printemps&jour=Vendredi"><li>Vendredi : Printemps</li></a>
        <a href="?Saison=Printemps&jour=Samedi"><li>Samedi : Printemps</li></a>
        <a href="?Saison=Printemps&jour=Dimanche"><li>Dimanche : Printemps</li></a>
        </ul>';
        }

        if ($_GET['Saison']=== 'Autonme') {
            echo '<ul>
            <a href="?Saison=Autonme&jour=Lundi"><li>Lundi : Autonme</li></a>
            <a href="?Saison=Autonme&jour=Mardi"><li>Mardi : Autonme</li></a>
            <a href="?Saison=Autonme&jour=Mercredi"><li>Mercredi : Autonme</li></a>
            <a href="?Saison=Autonme&jour=Jeudi"><li>Jeudi : Autonme</li></a>
            <a href="?Saison=Autonme&jour=Vendredi"><li>Vendredi : Autonme</li></a>
            <a href="?Saison=Autonme&jour=Samedi"><li>Samedi : Autonme</li></a>
            <a href="?Saison=Autonme&jour=Dimanche"><li>Dimanche : Autonme</li></a>
            </ul>';
        }


        if ($_GET['Saison']=== 'Ete') {
            echo '<ul>
            <a href="?Saison=Ete&jour=Lundi"><li>Lundi : Ete</li></a>
            <a href="?Saison=Ete&jour=Mardi"><li>Mardi : Ete</li></a>
            <a href="?Saison=Ete&jour=Mercredi"><li>Mercredi : Ete</li></a>
            <a href="?Saison=Ete&jour=Jeudi"><li>Jeudi : Ete</li></a>
            <a href="?Saison=Ete&jour=Vendredi"><li>Vendredi : Ete</li></a>
            <a href="?Saison=Ete&jour=Samedi"><li>Samedi : Ete</li></a>
            <a href="?Saison=Ete&jour=Dimanche"><li>Dimanche : Ete</li></a>
            </ul>';
        }


  

            $tempsHiver=[
                    'Lundi'=> [
                        'NORD' => '0°', #Gel
                        'SUD' => '10°',
                        'OUEST' => '2°', #Gel
                        'EST' => '1°', #Gel
                        'CENTRE' => '6°'],
                    
                    'Mardi' =>[
                        'NORD' =>'1°', #Gel
                        'SUD' =>'0°', #Gel
                        'OUEST' =>'4°',
                        'EST' =>'2°', #Gel
                        'CENTRE' =>'6°'],
                    
                    'Mercredi' =>[
                        'NORD'=> '1°', #Gel
                        'SUD'=> '8°',
                        'OUEST'=> '4°',
                        'EST'=> '7°',
                        'CENTRE'=> '6°'],
                    
                    'Jeudi' =>[
                        'NORD'=> '8°',
                        'SUD'=> '8°',
                        'OUEST'=> '7°',
                        'EST'=> '6°',
                        'CENTRE'=> '3°'],
                    
                    'Vendredi' =>[
                        'NORD'=> '4°',
                        'SUD'=> '9°',
                        'OUEST'=> '4°',
                        'EST'=> '0°', #Gel
                        'CENTRE'=> '1°'], #Gel #VentPuissant
                     
                    'Samedi' =>[
                        'NORD'=> '4°',
                        'SUD'=> '8°',
                        'OUEST'=> '3°',
                        'EST'=> '0°',
                        'CENTRE'=> '2°'],
                    
                    'Dimanche' =>[
                        'NORD'=> '2°',
                        'SUD'=> '8°',
                        'OUEST'=> '4°',
                        'EST'=> '0°',
                        'CENTRE'=> '1°'], #Gel
                    ];
                
                    $tempPrintemps=[
                        'Lundi' => [
                            'NORD' => '0°', #Gel
                            'SUD' => '10°',
                            'OUEST' => '2°', #Gel
                            'EST' => '1°', #Gel
                            'CENTRE' => '6°'],
                        
                        'Mardi' =>[
                            'NORD' =>'1°', #Gel
                            'SUD' =>'0°', #Gel
                            'OUEST' =>'4°',
                            'EST' =>'2°', #Gel
                            'CENTRE' =>'6°'],
                        
                        'Mercredi' =>[
                            'NORD'=> '1°', #Gel
                            'SUD'=> '8°',
                            'OUEST'=> '4°',
                            'EST'=> '7°',
                            'CENTRE'=> '6°'],
                        
                        'Jeudi' =>[
                            'NORD'=> '8°',
                            'SUD'=> '8°',
                            'OUEST'=> '7°',
                            'EST'=> '6°',
                            'CENTRE'=> '3°'],
                        
                        'Vendredi' =>[
                            'NORD'=> '4°',
                            'SUD'=> '9°',
                            'OUEST'=> '4°',
                            'EST'=> '0°', #Gel
                            'CENTRE'=> '1°'], #Gel #VentPuissant
                         
                        'Samedi' =>[
                            'NORD'=> '4°',
                            'SUD'=> '8°',
                            'OUEST'=> '3°',
                            'EST'=> '0°',
                            'CENTRE'=> '2°'],
                        
                        'Dimanche' =>[
                            'NORD'=> '2°',
                            'SUD'=> '8°',
                            'OUEST'=> '4°',
                            'EST'=> '0°',
                            'CENTRE'=> '1°'], #Gel
                        ];
            
                        $tempAutonme=[
                            'Lundi' => [
                                'NORD' => '0°', #Gel
                                'SUD' => '10°',
                                'OUEST' => '2°', #Gel
                                'EST' => '1°', #Gel
                                'CENTRE' => '6°'],
                            
                            'Mardi' =>[
                                'NORD' =>'1°', #Gel
                                'SUD' =>'0°', #Gel
                                'OUEST' =>'4°',
                                'EST' =>'2°', #Gel
                                'CENTRE' =>'6°'],
                            
                            'Mercredi' =>[
                                'NORD'=> '1°', #Gel
                                'SUD'=> '8°',
                                'OUEST'=> '4°',
                                'EST'=> '7°',
                                'CENTRE'=> '6°'],
                            
                            'Jeudi' =>[
                                'NORD'=> '8°',
                                'SUD'=> '8°',
                                'OUEST'=> '7°',
                                'EST'=> '6°',
                                'CENTRE'=> '3°'],
                            
                            'Vendredi' =>[
                                'NORD'=> '4°',
                                'SUD'=> '9°',
                                'OUEST'=> '4°',
                                'EST'=> '0°', #Gel
                                'CENTRE'=> '1°'], #Gel #VentPuissant
                             
                            'Samedi' =>[
                                'NORD'=> '4°',
                                'SUD'=> '8°',
                                'OUEST'=> '3°',
                                'EST'=> '0°',
                                'CENTRE'=> '2°'],
                            
                            'Dimanche' =>[
                                'NORD'=> '2°',
                                'SUD'=> '8°',
                                'OUEST'=> '4°',
                                'EST'=> '0°',
                                'CENTRE'=> '1°'], #Gel
                            ];
            
                            $tempEte=[
                                'Lundi' => [
                                    'NORD' => '0°', #Gel
                                    'SUD' => '10°',
                                    'OUEST' => '2°', #Gel
                                    'EST' => '1°', #Gel
                                    'CENTRE' => '6°'],
                                
                                'Mardi' =>[
                                    'NORD' =>'1°', #Gel
                                    'SUD' =>'0°', #Gel
                                    'OUEST' =>'4°',
                                    'EST' =>'2°', #Gel
                                    'CENTRE' =>'6°'],
                                
                                'Mercredi' =>[
                                    'NORD'=> '1°', #Gel
                                    'SUD'=> '8°',
                                    'OUEST'=> '4°',
                                    'EST'=> '7°',
                                    'CENTRE'=> '6°'],
                                
                                'Jeudi' =>[
                                    'NORD'=> '8°',
                                    'SUD'=> '8°',
                                    'OUEST'=> '7°',
                                    'EST'=> '6°',
                                    'CENTRE'=> '3°'],
                                
                                'Vendredi' =>[
                                    'NORD'=> '4°',
                                    'SUD'=> '9°',
                                    'OUEST'=> '4°',
                                    'EST'=> '0°', #Gel
                                    'CENTRE'=> '1°'], #Gel #VentPuissant
                                 
                                'Samedi' =>[
                                    'NORD'=> '4°',
                                    'SUD'=> '8°',
                                    'OUEST'=> '3°',
                                    'EST'=> '0°',
                                    'CENTRE'=> '2°'],
                                
                                'Dimanche' =>[
                                    'NORD'=> '2°',
                                    'SUD'=> '8°',
                                    'OUEST'=> '4°',
                                    'EST'=> '0°',
                                    'CENTRE'=> '1°'], #Gel
                                ];
                                
                                $periodeSaison=[];
                                
                               if ($_GET['Saison']== 'Hiver') {
                                $periodeSaison = $tempsHiver;
                               }

                               if ($_GET['Saison']=='Printemps') {
                                $periodeSaison = $tempPrintemps;
                               }

                               if ($_GET['Saison']== 'Autonme') {
                                $periodeSaison = $tempAutonme;
                               }

                               if ($_GET['Saison']=='Ete') {
                                $periodeSaison = $tempEte;
                               }

                               foreach ($periodeSaison as $key => $value) {
                                if ($key == $_GET['jour']) {
                                    echo $key. '<br>';
                                    foreach ($value as $departement => $temperature) {
                                        echo '<br>'.$departement.':  ' .$temperature;
                                    }
                                }
                               }
                     
    ?>
    <div class="img-1">

    </div>
</body>
</html>