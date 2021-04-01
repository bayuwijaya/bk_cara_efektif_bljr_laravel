<?php 

class UserController extends BaseController 
{
    public function __construct()
    {
        $this->beforeFilter('auth', array('except' => 'getLogin'));
        $this->beforeFilter('csrf', array('on' => 'post'));
        $this->afterFilter('log', array('only' => array('fooAction', 'barAction')));

        $this->beforeFilter(function() {
            // menyisipkan filter berupa Closure (Fungsi tertutup)   
        });

        $this->beforeFilter('@filterRequests');

        $this->filter('before', 'auth');
        
        //call 'log_download' filter for all download/file GET requests
        $this->filter('after', 'log_download')->only(array('file'))->on('get');
        
        //call the 'auth_download' filter for all download/* requests, except for the 'queue' action
        $this->filter('before', 'auth_download')->except(array('queue'));            
    }

    /* Filter the incomung requests */
    public function filterRequests($route, $requests)
    {
        //
    }
}