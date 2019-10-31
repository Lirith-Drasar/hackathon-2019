<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

use Symfony\Component\HttpClient\HttpClient;

class HomeController extends AbstractController
{

    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $monster = [0, 0, 0, 0];

        $question1 = '';
        $question2 = '';
        $question3 = '';
        $question4 = '';
        $question5 = '';

        $error = '';

        if (isset($_POST['isFormSubmitted'])) {
            // $question1 = $_POST['question1'];
            // $question2 = $_POST['question2'];

            if (empty($_POST['question1']) === false
                && empty($_POST['question2']) === false
                && empty($_POST['question3']) === false
                && empty($_POST['question4']) === false
                && empty($_POST['question5']) === false)
            {
                switch ($_POST['question1']) {
                    case 'vampire':
                        $monster[0] += 1;
                        break;
                    case 'slasheur':
                        $monster[1] += 1;
                        break;
                    case 'zombie':
                        $monster[2] += 1;
                        break;
                    case 'ghost':
                        $monster[3] += 1;
                        break;
                }
                switch ($_POST['question2']) {
                    case 'vampire':
                        $monster[0] += 1;
                        break;
                    case 'slasheur':
                        $monster[1] += 1;
                        break;
                    case 'zombie':
                        $monster[2] += 1;
                        break;
                    case 'ghost':
                        $monster[3] += 1;
                        break;

                }
                switch ($_POST['question3']) {
                    case 'vampire':
                        $monster[0] += 1;
                        break;
                    case 'slasheur':
                        $monster[1] += 1;
                        break;
                    case 'zombie':
                        $monster[2] += 1;
                        break;
                    case 'ghost':
                        $monster[3] += 1;
                        break;

                }
                switch ($_POST['question4']) {
                    case 'vampire':
                        $monster[0] += 1;
                        break;
                    case 'slasheur':
                        $monster[1] += 1;
                        break;
                    case 'zombie':
                        $monster[2] += 1;
                        break;
                    case 'ghost':
                        $monster[3] += 1;
                        break;

                }
                switch ($_POST['question5'])
                {
                    case 'vampire':
                        $monster[0] += 1;
                        break;
                    case 'slasheur':
                        $monster[1] += 1;
                        break;
                    case 'zombie':
                        $monster[2] += 1;
                        break;
                    case 'ghost':
                        $monster[3] += 1;
                        break;

                }

                $maxKey = array_keys($monster, max($monster));
                switch ($maxKey[0])
                {
                    case 0 :
                        $valeur = 'vampire';
                        break;
                    case 1 :
                        $valeur = 'slasheur';
                        break;
                    case 2 :
                        $valeur = 'zombie';
                        break;
                    case 3 :
                        $valeur = 'ghost';
                        break;
                }
                //echo $valeur;

                header ("Location: /Home/result/".$valeur);
            }
            else
            {
                $error = 'Une ou des réponses sont mal selectionnées';
            }
        }

        return $this->twig->render('Home/index.html.twig');
    }

    public function result($valeur)
    {
       return $this->twig->render('Home/result.html.twig', [
               'monster' => $valeur
           ]
        );
    }
}
/*
$client = HttpClient::create();
$response = $client->request('GET', 'https://hackathon-wild-hackoween.herokuapp.com/movies');
$content = $response->toArray();*/
