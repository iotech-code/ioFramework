<?php
require ('../include/IOLoader.php');

echo DS;


// /**
//  * Datatest
//  * 
//  * @see    app('request')->json
//  * @param  $arr
//  * @return  json
//  */
// app('request')->json = function($arr){
//     return json_encode($arr);
// };

// /**
//  * Setup homepage
//  */
// $route->any('/', 'controllers\Home@index');

// /**
//  * Test db connection and query some data.
//  * @see the data
//  * @return json
//  */
// $route->any('/dbTest', function() {

// });

// /**
//  * API Route group
//  */
// $route->group('/api', function() {
//     // header('Content-Type: application/json');
//     $this->get_post('/', function () {
//         echo json_encode(app('request')->query);
//     });
//     // $this->get_post('/addshipment', 'controllers\AddShipment@add');
//     // $this->post('/checkStatus', 'controllers\TrackShipment@index');
//     // $this->post('/ShipmentInterface', 'controllers\Shipment@add');
//     // $this->post('/Waypoint', 'controllers\Waypoint@add');
// });

// $route->end();