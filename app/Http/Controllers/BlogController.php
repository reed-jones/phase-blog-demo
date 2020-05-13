<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Phased\Routing\Facades\Phase;
use Phased\State\Facades\Vuex;

class BlogController extends Controller
{
    public function HomePage()
    {
        $fakeArticles = $this->getFakerArticles();

        // Add them to our vuex store
        // $store.state.articles.recent
        $fakeArticles->toVuex('articles', 'recents');

        // return the Phase view
        return Phase::view();
    }

    public function SingleArticle($article)
    {
        // Find the article that matches the slug
        // With real database models we would use Route Model binding
        // but since this is all just fake data, we will just match
        // the slug string here
        $fakeArticle = $this->getFakerArticles()->firstWhere('slug', $article);

        // Set it as the active article
        // $store.state.articles.active
        $fakeArticle->toVuex('articles', 'active');

        // return the Phase view
        return Phase::view();
    }

    private function getFakerArticles()
    {
        // Generate a collection of fake blog articles...
        // Our faker has a common seed, so this will always
        // generate the same articles
        return factory(Article::class, 10)->make();
    }
}
