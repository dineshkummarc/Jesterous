<?php

namespace AppBundle\Controller;

use AppBundle\Contracts\IArticleCategoryDbManager;
use AppBundle\Contracts\IArticleDbManager;
use AppBundle\Entity\Article;
use AppBundle\Service\ArticleCategoryDbManager;
use AppBundle\Service\ArticleDbManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends BaseController
{
    /**
     * @Route("/", name="homepage")
     * @param Request $request
     * @param ArticleDbManager $articleDbManager
     * @param ArticleCategoryDbManager $articleCategoryDbManager
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, IArticleDbManager $articleDbManager, IArticleCategoryDbManager $articleCategoryDbManager)
    {
        $categories = $articleCategoryDbManager->findLocaleCategories();
        $latestPosts = $articleDbManager->findArticlesForLatestPosts(0);
        $sliderArticles = $articleDbManager->forgeSliderViewModel($articleDbManager->findArticlesByCategories($articleCategoryDbManager->findLocaleCategories()));


        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
            'categories'=>$categories,
            'latestPosts'=>$latestPosts,
            'sliderArticles'=>$sliderArticles,
        ]);
    }

    /**
     * @Route("/contacts", name="contacts_page")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactsAction(){
        return $this->render("default/contacts.html.twig", array());
    }

    /**
     * @Route("/categories", name="categories_page")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function categoriesAction(){
        return $this->render("default/categories.html.twig", array());
    }


    /**
     * @Route("/articles/{id}", name="show_article", defaults={"id"=null})
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function viewArticleAction(Request $request, $id){
        $article = $this->getDoctrine()->getRepository(Article::class)->findOneBy(array('id'=>$id));

        return $this->render('default/article.html.twig', [
            'article'=>$article
        ]);
    }


    /**
     * @Route("/admin", name="admin_panel")
     * @Security("is_granted('IS_AUTHENTICATED_FULLY')")
     * add @ Security("has_role('ROLE_ADMIN')")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function hiddenAction(Request $request)
    {
        if(!$this->isAdminLogged())
            return $this->redirectToRoute('homepage');

        return $this->render("partials/haha.html.twig");
    }
}
