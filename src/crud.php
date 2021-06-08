<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;



$app->get('/branch', function (Request $request, Response $response, $args) use($db) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'branches.twig', 
           ['branches'=>$db->getBranches()]);
 });
 
$app->get('/branch/new', function (Request $request, Response $response, $args) use($db) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'branch_new.twig',[]); 
 });
 
$app->post('/branch/new', function (Request $request, 
                  Response $response, $args) use($db) {
   $db->insertBranch($_POST['branch'],$_POST['bcode']);
   $view = Twig::fromRequest($request);
   return $view->render($response, 'branches.twig', 
          ['branches'=>$db->getBranches()]);
});

$app->get('/branch/edit', function (Request $request, Response $response, $args) use($db) {
    $branch=$db->getBranch($_REQUEST['id']);
    $view = Twig::fromRequest($request);
    return $view->render($response, 'branch_edit.twig', $branch);
  });
 
$app->post('/branch/update', function (Request $request, Response $response, $args) use($db) {
    $db->updateBranch($_POST);
    $view = Twig::fromRequest($request);
    return $view->render($response, 'branches.twig', 
           ['branches'=>$db->getBranches()]);
});
 
$app->get('/branch/delete', function (Request $request, Response $response, $args) use($db) {
    $db->deleteBranch($_REQUEST['id']);
    $view = Twig::fromRequest($request);
    return $view->render($response, 'branches.twig', 
           ['branches'=>$db->getBranches()]);
});

$app->get('/contact', function (Request $request, Response $response, $args) use($db) {
    $view = Twig::fromRequest($request);
    $contacts=$db->getContacts($_REQUEST['bcode']);
    return $view->render($response, 'contacts.twig', 
           ['contacts'=>$contacts]);
 });
 
$app->get('/contact/new', function (Request $request, Response $response, $args) use($db) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'contact_new.twig',[]); 
 });
 
$app->post('/contact/new', function (Request $request, 
                  Response $response, $args) use($db) {
   $db->insertContact($_POST);
   $view = Twig::fromRequest($request);
   return $view->render($response, 'contacts.twig', 
          ['bcode'=>$_POST['bcode'],'contacts'=>$db->getContacts($_POST['bcode'])]);
});

$app->get('/contact/edit', function (Request $request, Response $response, $args) use($db) {
    $contact=$db->getContact($_REQUEST['id']);
    $view = Twig::fromRequest($request);
    return $view->render($response, 'contact_edit.twig', $contact);
  });
 
$app->post('/contact/update', function (Request $request, Response $response, $args) use($db) {
    $db->updateContact($_POST);
    $view = Twig::fromRequest($request);
    return $view->render($response, 'contacts.twig', 
           ['bcode'=>$_POST['bcode'],'contacts'=>$db->getContacts($_POST['bcode'])]);
});
 
$app->get('/contact/delete', function (Request $request, Response $response, $args) use($db) {
    $db->deleteContact($_REQUEST['id']);
    $view = Twig::fromRequest($request);
    return $view->render($response, 'contacts.twig', 
           ['bcode'=>$_POST['bcode'],'contacts'=>$db->getContacts($_POST['bcode'])]);
});
