<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Form\Type\ArticleFormType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ArticleController
 *
 * @author Florent DESPIERRES <florent.despierres.ext@francetv.fr>
 *
 * @Route("/article")
 */
class ArticleController extends Controller
{
    /**
     * @Route("/", name="article_list")
     *
     * @return Response
     */
    public function listAction()
    {
        $articles = $this->getDoctrine()->getRepository('AppBundle:Article')->findAll();

        return $this->render('article/list.html.twig', [
            'articles' => $articles,
        ]);
    }
}
