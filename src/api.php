<?php
// CORS https://www.slimframework.com/docs/v3/cookbook/enable-cors.html
/*
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});
*/
/**
 * GET getContacts
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->options('/ab/contacts', function ($request, $response, $args) {
    return $response;
});
 
$app->GET('/ab/contacts', function($request, $response, $args) use($db) {
//https://www.slimframework.com/docs/v4/objects/response.html#returning-json    
            $queryParams = $request->getQueryParams();
            $bcode = $queryParams['bcode'];
            if ($bcode)
              $contacts=$db->getContacts($bcode);
            else 
              $contacts=[];
            $payload = json_encode([ 'contacts'=>$contacts ]);
            $response->getBody()->write($payload);
            return $response
                    ->withHeader('Content-Type', 'application/json')
                    ->withHeader('Access-Control-Allow-Origin', '*')
                    ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
                    ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});


/**
 * GET getGroups
 * Summary: 
 * Notes: 
 * Output-Formats: [application/json]
 */
$app->options('/ab/branches', function ($request, $response, $args) {
    return $response;
});
 
$app->GET('/ab/branches', function($request, $response, $args) use($db) {
    $branches=$db->getBranches();
    $payload = json_encode(['branches'=>$branches]);
    $response->getBody()->write($payload);
    return $response
            ->withHeader('Content-Type', 'application/json')
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
                            ;

});

$app->GET('/ab/info', function($request, $response, $args)  use($db){
    $branches=$db->getBranches();
    $response->getBody()->write(json_encode($branches));
    return $response;
    });
