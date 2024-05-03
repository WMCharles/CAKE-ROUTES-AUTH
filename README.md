Migrations -> link -> https://book.cakephp.org/migrations/3/en/index.html

creating tables
bin/cake bake migration CreateUsers name:string email:string phone_number:string password:string created modified
bin/cake bake migration CreateClients name:string email:string phone_number:string password:string created modified

bin/cake bake migration CreateProducts name:string price:decimal[10,2] availability:string description:string created modified

migrating
bin/cake migrations migrate - create tables in db
bin/cake migrations status - check status
bin/cake migrations rollback - undo previous migration

seeding database 

Routing - How to route 

1 lvl -> /admin
$routes->prefix('Admin', function (RouteBuilder $routes) {
    $routes->connect('/{controller}/{action}');
    $routes->connect('/', ['controller' => 'Users', 'action' => 'login', 'home']);
});


2 lvl -> /manager/admin
$routes->prefix('Manager', function (RouteBuilder $routes) {
$routes->prefix('Admin', function (RouteBuilder $routes) {
    $routes->connect('/{controller}/{action}');
    $routes->connect('/', ['controller' => 'Users', 'action' => 'login', 'home']);
$routes->fallbacks();
});
});

3 lvl -> api/v1/admin
$routes->prefix('Api', function (RouteBuilder $routes) {
    $routes->prefix('V1', function (RouteBuilder $routes) {
        $routes->prefix('Admin', function (RouteBuilder $routes) { // Add this line
            $routes->connect('/{controller}/{action}');
            $routes->connect('/', ['controller' => 'Users', 'action' => 'login', 'home']);
    $routes->fallbacks();
        }); // Add this line
    });
});

Handling Authentication -> [text](https://book.cakephp.org/4/en/console-commands.html)

under each routes - use seperate controller for authentications
- admin use Users Table
- clients user Clients table

install plugin
- composer require "cakephp/authentication:^2.4"
