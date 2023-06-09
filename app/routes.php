<?php

$router = new Router(new Request());

// User routes
$router->get('/users/all', [$UserController, 'getAll']);
$router->post('/users/create', [$UserController, 'create']);
$router->post('/users/login', [$UserController, 'login']);
$router->get('/users/checkUserExistence', [$UserController, 'checkUserExistence']);

// Dependent routes
$router->post('/dependents/insert', [$DependentController, 'createDependent']);
$router->get('/dependents/all', [$DependentController, 'getAll']);
$router->put('/dependents/update', [$DependentController, 'updateDependent']);
$router->delete('/dependents/delete', [$DependentController, 'deleteDependent']);

// Pregnancy routes
$router->get('/pregnancies/all', [$PregnancyController, 'getAll']);
$router->post('/pregnancies/insert', [$PregnancyController, 'createPregnancy']);

// Exam routes
$router->get('/exams/all', [$ExamController, 'getAll']);
$router->post('/exams/insert', [$ExamController, 'createExam']);
$router->get('/exams/details', [$ExamController, 'getById']);

// Product routes
$router->post('/products/all', [$ProductController, 'getAll']);
$router->get('/products/store', [$ProductController, 'getByStore']);

// Store routes
$router->get('/stores/all', [$StoreController, 'getAll']);
$router->get('/stores/details', [$StoreController, 'getById']);
$router->post('/stores/login', [$StoreController, 'login']);
