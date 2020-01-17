<?php
declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function number()
    {
        $number = 25; //random_int(0, 100);

        if ($number >= 0 && $number <= 49) {
            $color = 'red';
        } else if ($number >= 50 && $number <= 59) {
            $color = 'orange';
        } else if ($number === 60) {
            $color = 'green';
        } else {
            $color = 'gray';
        }

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'color' => $color,
        ]);
    }
}
