

# MVC structure - Backend Developer Challenge @ ARPM

## Task Description

Create a set of files organized in a simple MVC structure that, once installed in a web root, produces the below browsable urls:
1. www.domain.it
2. www.domain.it/folder1/
3. www.domain.it/folder2/

Contents:
1. `<h1>Hi</h1><div>I'm in the homepage</div>  `
2. `<h1>Hi</h1><div>I'm in folder1</div>`
3. `<h1>Hi</h1><div>I'm in folder2</div>`

Conditions:
- index.php as the only public file
- .htaccess and route.php to manage the routes
- PageController.php used as a single Controller class of the 3 urls.
- view.php that contains html and contents shown above  
