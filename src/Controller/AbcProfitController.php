<?php declare(strict_types=1);

namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use App\Entity\AbcMethodProfit;
use App\Form\AbcProfit;

/**
 * Movie controller.
 * @Route("/api", name="api_")
 */
class AbcProfitController extends FOSRestController
{
    /**
     * Lists all abc values in profit method.
     * @Rest\Get("/abc-profit")
     *
     * @return Response
     */
    public function getAbcProfitAction()
    {
        $repository = $this->getDoctrine()->getRepository(AbcMethodProfit::class);
        $abcs = $repository->findall();
        return $this->handleView($this->view($abcs));
    }

    /**
     * Create Movie.
     * @Rest\Post("/movie")
     *
     * @return Response
     */
    public function postMovieAction(Request $request)
    {
        $abc = new AbcMethodProfit();
        $form = $this->createForm(AbcMethodProfit::class, $abc);
        $data = json_decode($request->getContent(), true);
        $form->submit($data);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($abc);
            $em->flush();
            return $this->handleView($this->view(['status' => 'ok'], Response::HTTP_CREATED));
        }
        return $this->handleView($this->view($form->getErrors()));
    }

}