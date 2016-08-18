RateGenius - Brown bag series
=============================

### Wednesday August 17 2016
- Download Symfony installer 
- Use installer to create a new project `symfony new rg-cart`
- Launch the web server `./bin/console server:run`
- Server will be running on [http://127.0.0.1:8000](http://127.0.0.1:8000)
- Create a new bundle using `./bin/console generate:bundle` called `ApiBundle`
- Routing is loaded from main routing file located in `app/routing.yml`
- Notice how a reference to the newly created bundle is automatically added in `app/AppKernel.php`
- Routing is created using yml and points to a particular method in a particular controller
- Controllers can `return` the `$this->render()` method to render a twig template
- Templates are located in the views folder `src/ApiBundle/Resources/views`
- We looked at how twig templates inherit from each other
- Created an HTML form to capture some user information
- Created a new `Entity` for storing the captured user information
- Demonstrate saving data using the entity manager