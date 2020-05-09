<?php

namespace App\Http\Controllers;

use App\Models\Admin\About;
use App\Models\Admin\Block;
use App\Models\Admin\Client;
use App\Models\Admin\ClientItem;
use App\Models\Admin\Comment;
use App\Models\Admin\CommentItem;
use App\Models\Admin\Contact;
use App\Models\Admin\Portfolio;
use App\Models\Admin\PortfolioTitle;
use App\Models\Admin\Slide;
use App\Models\Admin\WhoWeAre;
use App\Models\Admin\WhoWeAreItem;
use App\Models\Admin\WhyAreWe;

class IndexController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slider = [];
        $whoAreWe = [];
        $portfolios = [];
        $portfolioTitle = [];
        $whoWeAre = [];
        $whoWeAreItems = [];
        $about = [];
        $commentTitle = [];
        $comments = [];
        $clientTitle = [];
        $clientItems = [];
        $contact = [];
        $block = Block::all();
        foreach ($block as $item) {
            if ($item->id == 1 && $item->published == 1) {
                $slider = Slide::all();
            }
            if ($item->id == 2 && $item->published == 1) {
                $whoAreWe = WhyAreWe::find(1);
            }
            if ($item->id == 3 && $item->published == 1) {
                $portfolios = Portfolio::with(['items' => function ($query) {
                    $query->orderBy('sort', 'ASC');
                }])->orderBy('sort', 'ASC')->get();
                $portfolioTitle = PortfolioTitle::find(1);
            }
            if ($item->id == 4 && $item->published == 1) {
                $whoWeAre = WhoWeAre::find(1);
                $whoWeAreItems = WhoWeAreItem::all()->take(3);
            }
            if ($item->id == 5 && $item->published == 1) {
                $about = About::find(1);
            }
            if ($item->id == 6 && $item->published == 1) {
                $commentTitle = Comment::find(1);
                $comments = CommentItem::all()->take('3')->sortBy('sort');
            }
            if ($item->id == 7 && $item->published == 1) {
                $clientTitle = Client::find(1);
                $clientItems = ClientItem::all()->sortBy('sort');
            }
            if ($item->id == 8 && $item->published == 1) {
                $contact = Contact::find(1);
            }
        }
        return view('index', compact('block', 'slider', 'whoAreWe', 'portfolioTitle', 'portfolios', 'whoWeAre', 'whoWeAreItems', 'about', 'commentTitle', 'comments', 'clientTitle', 'clientItems', 'contact'));
    }
}
