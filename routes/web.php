<?php

$router->get('/ChartData', 'ChartDataController@onAllSelect');

$router->get('/ClientReview', 'ClientReviewController@onAllSelect');

$router->post('ContactSend', 'ContactController@onContactSend');


$router->get('/CourseHome', 'CourseController@onSelectFour');
$router->get('/CourseAll', 'CourseController@onSelectAll');
$router->post('/CourseDetails', 'CourseController@onSelectDetails');

$router->get('/Footer', 'FooterController@onSelect');

$router->get('/Information', 'InformationController@onSelect');

$router->get('/Services', 'ServiceController@onSelect');


$router->get('/Project', 'ProjectController@onSelect3');
$router->get('/ProjectAll', 'ProjectController@onSelectAll');
$router->post('/ProjectDetails', 'ProjectController@onSelectDetail');

$router->get('/VideoHome', 'HomeEtcController@onSelectVideo');
$router->get('/TotalProjectClient', 'HomeEtcController@onSelectProjectClient');
$router->get('/TechDesc', 'HomeEtcController@onSelectTechDesc');
$router->get('/HomeTopTitle', 'HomeEtcController@onSelectHomeTopTitle');






