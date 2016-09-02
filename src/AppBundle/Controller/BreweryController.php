<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Comment;
use AppBundle\Entity\Post;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Services\Http;

/**
 * Controller used to manage API Calls to the Brewery
 *
 * @author Sudhamsha Reddy <sudhamshareddy@gmail.com>
 */
class BreweryController extends Controller
{
    /**
     * @Route("/")
     * Function called when homepage is loaded
     * @Method("GET")
     * @Cache(maxage="10")
     */
    public function indexAction()
    {
        return $this->render('default/homepage.html.twig');
    }
    
    /**
     * Get the beers from the API Call
     * @param Request $request
     * @return array
     */
    public function getBeersAction(Request $request){
        
        // What you need to get
        $type = "beers";
        $returnQuantity = 1;
        
        // Pass Additional Params
        $additionalParams = [
            "order"         => "random",
            "randomCount"   => 1,
            "withBreweries" => "Y",
            "abv"           => "0,20",
            "hasLabels"     => "Y"
        ];
        
        try {
            $response = $this->get("http")->doRequest($returnQuantity, $type, $additionalParams);
        } catch (\Exception $e){
            $this->handleError($e->getMessage());
        }
        
        $checkForAdditionalErrors = json_decode($response);
        
        if( isset($checkForAdditionalErrors->errorMessage)) {
            return $this->handleError($checkForAdditionalErrors->errorMessage);
        }
        
        return new Response($response);
    }
    
    /**
     * Search the beers/breweries from the API Call
     * @param Request $request
     * @return array
     */
    public function searchAction(Request $request){
        
        // Get Posted Content
        $postedContent = json_decode($request->getContent());
        
        // What you need to get
        $searchType = $postedContent->type;
        $searchText = $postedContent->text;
        $type       = "search";
        
        $returnQuantity = 1;
        
        // Pass Additional Params
        $additionalParams = [
            "p"             => 1,
            "type"          => $searchType,
            "q"             => $searchText,
            "withBreweries" => "Y",
            "hasLabels"     => "Y"
        ];
        
        try {
            
            // Perform Request and get response array
            $response = $this->get("http")->doRequest($returnQuantity, $type, $additionalParams);
        } catch (\Exception $e){
            
            // handle any exceptions
            $this->handleError($e->getMessage());
        }
        
        // Check for any additional API Errors
        $checkForAdditionalErrors = json_decode($response);
        
        if( isset($checkForAdditionalErrors->errorMessage)) {
            
            // If any, throw exception
            return $this->handleError($checkForAdditionalErrors->errorMessage);
        }
        
        return new Response($response);
    }
    
    /**
     * Handle Errors
     * @param $errMessage
     * @param $e
     * returns JsonResponse
     *
     */
    public function handleError($errMessage, $e = NULL){
        
        // Returning JSON Response to Angular App to handle the rest
        return new JsonResponse($errMessage, 400);
    }
}
