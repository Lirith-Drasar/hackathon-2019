<?php
    $monster=[0,0,0,0];

    $question1='';
    $question2='';
    $question3='';
    $question4='';
    $question5='';

    $error='';

    if (isset($_POST['isFormSubmitted']))
    {
        // $question1 = $_POST['question1'];
        // $question2 = $_POST['question2'];
        
        if (empty($_POST['question1'])===false 
            && empty($_POST['question2'])===false 
            && empty($_POST['question3'])===false 
            && empty($_POST['question4'])===false 
            && empty($_POST['question5'])===false)
            {
            switch ($_POST['question1'])
            { 
                case 'vampire': $monster[0]+=1;
                break;
                case 'slasheur': $monster[1]+=1;
                break;
                case 'zombie': $monster[2]+=1;
                break;
                case 'Gost': $monster[3]+=1;
                break;
            }
            switch ($_POST['question2'])
            { 
                case 'vampire': $monster[0]+=1;
                break;
                case 'slasheur': $monster[1]+=1;
                break;
                case 'zombie': $monster[2]+=1;
                break;
                case 'Gost': $monster[3]+=1;
                break;
                
            }
            switch ($_POST['question3'])
            { 
                case 'vampire': $monster[0]+=1;
                break;
                case 'slasheur': $monster[1]+=1;
                break;
                case 'zombie': $monster[2]+=1;
                break;
                case 'Gost': $monster[3]+=1;
                break;
                
            }
            switch ($_POST['question4'])
            { 
                case 'vampire': $monster[0]+=1;
                break;
                case 'slasheur': $monster[1]+=1;
                break;
                case 'zombie': $monster[2]+=1;
                break;
                case 'Gost': $monster[3]+=1;
                break;
                
            }
            switch ($_POST['question5'])
            { 
                case 'vampire': $monster[0]+=1;
                break;
                case 'slasheur': $monster[1]+=1;
                break;
                case 'zombie': $monster[2]+=1;
                break;
                case 'Gost': $monster[3]+=1;
                break;
                
            }
            //header ('location: result.php');
        }
        else
        {
            $error='Une ou des réponses sont mal selectionnées';
        }
        
    }
    var_dump($monster);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    <form method ="POST" action="question.php">

    <p>
        <label>Plutôt....</label>

    </p>
    <p>
    <?php
        echo $error;
    ?>
        <label for="sujet">Choisissez votre réponse : </label>


    </p>

    <p>
    <input type="radio" name="question1" value="slasheur">Chair
    <input type="radio" name="question1" value="vampire">Sang
    <input type="radio" name="question1" value="Gost">Âme
    <input type="radio" name="question1" value="zombie">Cerveau

    </p>

    <p>
    <input type="radio" name="question2" value="vampire">Cri
    <input type="radio" name="question2" value="slasheur">Rire
    <input type="radio" name="question2" value="zombie">Gémissement
    <input type="radio" name="question2" value="Gost">Silence
    </p>

    <p> 
    <input type="radio" name="question3" value="zombie">Mains
    <input type="radio" name="question3" value="slasheur">Armes
    <input type="radio" name="question3" value="vampire">Dents
    <input type="radio" name="question3" value="Gost">Lévitation
    </p>

    <p>
    <input type="radio" name="question4" value="Gost">Planer
    <input type="radio" name="question4" value="slasheur">Vehiculé
    <input type="radio" name="question4" value="zombie">Course à pied
    <input type="radio" name="question4" value="vampire">Voler
    </p>

    <p>
    <input type="radio" name="question5" value="vampire">Rouge
    <input type="radio" name="question5" value="slasheur">Noir
    <input type="radio" name="question5" value="Gost">Blanc
    <input type="radio" name="question5" value="zombie">Gris

    </p>

    <button type ="submit" name="isFormSubmitted">
        Valider:
    </button>

</body>
</html>