<?php
namespace Controllers;
class HomeController extends PublicController
{
   
}
namespace Controllers;
use \Dao\Products\Product as ProductDao;
use \Views\Renderer as Renderer;


class Index extends PublicController
{
    public function run() :void
    {
        $viewData = [];
        $viewData["productsOnSale"] = ProductDao::getDailyDeals();
        $viewData["productsHighlighted"] = ProductDao::getFeaturedProducts();
        $viewData["productsNew"] = ProductDao::getNewProducts();
        Renderer::render("home", $viewData);
    }
}
?>